<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categories;
use App\Models\Comments;
use App\Models\History;
use App\Models\Partnership;
use App\Models\Products;
use App\Models\Pubs;
use App\Models\Referral;
use App\Models\Slide;
use App\Models\Subscribers;
use App\Models\Users;
use App\Models\Channel;
use App\Models\WishlistItems;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Throwable;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    //
    public function visitor()
    {
        $liste = Slide::all();
        $ar = DB::select(
            'SELECT a.cover_image, a.titre,ch.name "authors",ch.id "channel", \'article\' as type, a.id,DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
            FROM article a
            JOIN channel ch
            ON ch.id = a.channel
            where ch.etat = 1
            ORDER BY a.createdat DESC;'
        );
        $vd = DB::select(
            'SELECT v.video "cover_image", v.titre, v.id, v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
            FROM video v
            JOIN channel ch
            ON ch.id = v.channel
            where ch.etat = 1
            ORDER BY v.createdat DESC;'
        );
        $ara = collect($ar)->toArray();
        $vda = collect($vd)->toArray();
        $final = collect(array_merge($ara, $vda));
        $final = $final->shuffle();
        $final = $final->sortBy('fmt_date');

        $ch = Channel::where("etat", 1)->get();
        return view('customer.welcome.index', ['slide' => $liste, 'channel' => $ch, 'final' => $final]);
    }

    public function newpartnership(Request $request)
    {
        try {
        DB::beginTransaction();
        $pub = new Partnership();
        $pub->description = $request->input('description');
        $pub->ads = $request->has('ads') ? $request->input('ads') : 0;
        $pub->vente = $request->has('vente') ? $request->input('vente') : 0;
        $pub->user = Auth::user()->id;
        $pub->phone = $request->input('phone');
        $pub->activity = $request->input('activity');
        $pub->mail = $request->input('mail');
        $pub->save();
        DB::commit();
        return back()->with('error', "Pub successfully updated.");
         } catch (Throwable $th) {
             return back()->with('error',"Echec lors de la modification'");
         }

    }
    public function history()
    {
        $vd= DB::select(
            'SELECT distinct v.id, v.cover_image, v.titre,v.duration,(select ca.name from categories ca where ca.category_id=v.category ) "cats", v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(h.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date 
            FROM history h 
            JOIN video v 
            ON h.video = v.id
            JOIN channel ch
            ON ch.id = v.channel
            WHERE h.user ='.Auth::user()->id. '
             and YEAR(h.createdat) = YEAR(now())'
        );
        $ar = DB::select(
            'SELECT a.id, a.cover_image, a.titre, 0 "duration", (select ca.name from categories ca where ca.category_id=a.category ) "cats", ch.name "authors" ,ch.id "channel", \'article\' as type, DATE_FORMAT(h.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
            FROM history h 
            JOIN article a 
            ON h.article = a.id
            JOIN channel ch
            ON ch.id = a.channel
            WHERE h.user ='.Auth::user()->id. '
             and YEAR(h.createdat) = YEAR(now())'
        );
        $ara = collect($ar)->toArray();
        $vda = collect($vd)->toArray();
        $final = collect(array_merge($ara, $vda));
        $final = $final->sortBy('fmt_date');
        return view('customer.history-page', ["personal" => $this->personalinfo(),"his"=>$final, "subinfo" => $this->suscribeinfo()]);
    }
    public function dashboard()
    {
        $subs = Subscribers::where("user", Auth::user()->id)->get();
        $liste = DB::select(
            'SELECT c.*, COUNT(distinct s.id) "subscribers", (COUNT(distinct b.id) + COUNT(distinct v.id)) "posts" 
            FROM channel c 
            LEFT JOIN subscribers s 
            ON s.channel = c.id 
            LEFT JOIN article b 
            ON b.channel = c.id 
            LEFT JOIN video v 
            ON v.channel = c.id 
            GROUP BY c.id, c.name, c.createdAt, c.description, c.image, c.cover_image 
            ORDER BY c.createdAt DESC;'
        );
        $popular = DB::select(
            'SELECT c.*, COUNT(s.id) "subscribers", COUNT(b.id) "posts" 
            FROM channel c 
            LEFT JOIN subscribers s 
            ON s.channel = c.id 
            LEFT JOIN article b 
            ON b.channel = c.id 
            GROUP BY c.id, c.name, c.createdAt, c.description, c.image, c.cover_image 
            ORDER BY COUNT(s.id) DESC
            LIMIT 4;'
        );
        $ar = DB::select(
            'SELECT a.*, c.name, DATEDIFF(CURRENT_DATE, a.createdat)/30 "month"
            FROM article a 
            JOIN channel c
            ON a.channel = c.id 
            ORDER BY a.createdat DESC
            LIMIT 8;'
        );
        return view('customer.index', ["subs" => $subs, "channels" => $liste, "popular" => $popular, "article" => $ar, "personal" => $this->personalinfo(), "subinfo" => $this->suscribeinfo()]);
    }
    public function channels()
    {
        $subs = Subscribers::where("user", Auth::user()->id)->get();
        $liste = DB::select(
            'SELECT c.*, COUNT(distinct s.id) "subscribers", COUNT(distinct b.id) "posts" 
            FROM channel c 
            LEFT JOIN subscribers s 
            ON s.channel = c.id 
            LEFT JOIN article b 
            ON b.channel = c.id 
            GROUP BY c.id, c.name, c.createdAt, c.description, c.image, c.cover_image 
            ORDER BY c.createdAt DESC;'
        );
        return view('customer.channels', ["subs" => $subs, "channels" => $liste, "personal" => $this->personalinfo(), "subinfo" => $this->suscribeinfo()]);
    }
    public function subscribe($id)
    {
        $suscriber = new Subscribers();
        $suscriber->channel = $id;
        $suscriber->user = Auth::user()->id;
        $suscriber->save();
        return redirect()->back();
    }
    public function unsubscribe($id)
    {
        $suscriber = Subscribers::find($id);
        $suscriber->delete();
        return redirect()->back();
    }
    public function channel($id)
    {
        $ch = Channel::find($id);
        $articles = DB::select(
            'SELECT a.*, c.name, DATEDIFF(CURRENT_DATE, a.createdat)/30 "month"
            FROM article a 
            JOIN channel c
            ON a.channel = c.id 
            WHERE a.channel = ' . $id . '
            ORDER BY a.createdat DESC
            ;'
        );
        $videos = DB::select(
            'SELECT v.*, c.name, DATEDIFF(CURRENT_DATE, v.createdat)/30 "month"
            FROM video v 
            JOIN channel c
            ON v.channel = c.id 
            WHERE v.channel = ' . $id . '
            ORDER BY v.createdat DESC
            ;'
        );
        $pro = DB::select(
            'SELECT p.* 
            FROM products p 
            JOIN channel c 
            ON c.id = p.channel 
            WHERE c.id =' . $id
        );
        $sub = Subscribers::where(["user"=>Auth::user()->id, "channel"=>$id])->get()->first();
        if ($ch != null) {
            return view('customer.single-channel', ["personal" => $this->personalinfo(), "subinfo" => $this->suscribeinfo(), "channel" => $ch, "articles" => $articles, "videos" => $videos, "pro" => $pro, "sub" => $sub]);
        } else {
            return redirect('/notfound')->with('error',"Erreur dans le lien'");
        }

    }
    public function settings()
    {
        $refs = Referral::where('user', Auth::user()->id)->first();
        return view('customer.settings', ["personal" => $this->personalinfo(), "subinfo" => $this->suscribeinfo(), "refs" => $refs]);
    }
    public function partnership()
    {
        return view('customer.partenariat', ["personal" => $this->personalinfo(), "subinfo" => $this->suscribeinfo()]);
    }
    public function settingpost(Request $request)
    {
        try {
            $articlec = new ArticleController();
            $user = Auth::user();
            $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
            $user->phone = $request->input('phone');
            $user->city = $request->input('city');
            $user->adress = $request->input('address');
            $user->bp = $request->input('bp');
            $user->company = $request->input('company');
            if ($request->hasFile('image')) {
                if ($request->file('image') !== null) {
                    $user->image ? $articlec->deleteImage($user->image, 'uploads/user/') : null;
                    $ima = $request->file('image');
                    $filename = time() . '_' . $ima->getClientOriginalName();
                    $user->image = asset('/uploads/user/' . $filename);
                    $ima->move(public_path('/uploads/user'), $filename);
                }
            }
            $user->update();
            return redirect('/settings')->with('error',"succesfully updated");
        } catch (Throwable $th) {
            return back()->with('error',"Echec lors de L'enregistrement");
        }
    }
    /*public function history()
    {
        return view('customer.history-page');
    }*/
    public function account()
    {
        return view('customer.account', ["personal" => $this->personalinfo(), "subinfo" => $this->suscribeinfo()]);
    }
    /*public function abonnements()
    {
        return view('customer.subscriptions');
    }*/
    public function shop($name = null)
    {
        if ($name === null) {
            $pubs = Pubs::where('etat', 1)->get();
            $cat = Categories::all();
            $pro = Products::where('etat', 1)->get();
            return view('customer.welcome.shop', ["pubs" => $pubs, "pro" => $pro, "cat" => $cat]);
        } else {
            $pubs = Pubs::where('etat', 1)->get();
            $cat = Categories::all();
            $category = Categories::find($name);
            $pro = DB::select(
                'SELECT p.* 
                FROM products p 
                JOIN categories c 
                ON c.category_id = p.category_id
                WHERE c.category_id =' . $category->category_id
            );
            return view('customer.welcome.shop', ["pubs" => $pubs, "pro" => $pro, "cat" => $cat]);
        }
    }
    public function prostore()
    {
        $pro = DB::select(
            'SELECT p.* 
            FROM products p 
            JOIN channel c 
            ON c.id = p.channel '
        );
        return view('customer.store', ["pro" => $pro, "personal" => $this->personalinfo(), "subinfo" => $this->suscribeinfo()]);
    }
    public function shopdetail($id)
    {
        $pro = DB::select(
            'SELECT p.* 
        FROM products p 
        JOIN channel c 
        ON c.id = p.channel 
        WHERE p.product_id =' . $id . '
        and c.etat = 1'
        );
        $comments = Comments::where("product", $id)->get()->count();
        $pubs = Pubs::where('etat', 1)->get();
        $recom = DB::select(
            'SELECT p.* 
            FROM products p
            JOIN categories ca 
            ON ca.category_id = p.category_id
            JOIN channel ch
            ON ch.id = p.channel
            WHERE p.category_id = ' . $pro[0]->category_id . '
            and p.product_id !=' . $pro[0]->product_id
        );
        if (count($pro) > 0) {
            return view('customer.welcome.shop-detail', ["comments" => $comments, "pubs" => $pubs, "pro" => $pro[0], "recom" => $recom]);
        } else {
            return redirect('/notfound')->with('error', "Le contenu que vous cherchez n'existe pas ou a été supprimé.");
        }
    }
    public function prodetail($id)
    {
        $pro = DB::select(
            'SELECT p.* 
        FROM products p 
        JOIN channel c 
        ON c.id = p.channel 
        WHERE p.product_id =' . $id
        );
        if (count($pro) > 0) {
            return view('customer.shop-detail', ["pro" => $pro[0], "personal" => $this->personalinfo(), "subinfo" => $this->suscribeinfo()]);
        } else {
            return redirect('/notfound')->with('error', "Le contenu que vous cherchez n'existe pas ou a été supprimé.");
        }
    }

    public function blog($category = null)
    {
        $cats = Categories::all();
        $channels = Channel::all();
        if ($category === null) {
            $ar = DB::select(
                'SELECT (SELECT COUNT(cm.id) from comments cm where cm.article = a.id) "comments",a.bloc1,a.bloc2,a.bloc3, a.cover_image, a.titre,ch.name "authors",ch.id "channel", \'article\' as type, a.id,DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
                FROM article a
                JOIN channel ch
                ON ch.id = a.channel
                ORDER BY a.createdat DESC;'
            );
            $vd = DB::select(
                'SELECT (SELECT COUNT(cm.id) from comments cm where cm.video = v.id) "comments",v.bloc1, v.cover_image, v.titre, v.id, v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
            FROM video v
            JOIN channel ch
            ON ch.id = v.channel
            ORDER BY v.createdat DESC;'
            );
            $ara = collect($ar)->toArray();
            $vda = collect($vd)->toArray();
            $final = collect(array_merge($ara, $vda));
            $final = $final->shuffle();
            $final = $final->sortBy('fmt_date');
            return view('customer.blog', ["channels" => $channels, "cats" => $cats, "final" => $final, "personal" => $this->personalinfo(), "subinfo" => $this->suscribeinfo()]);

        } else {
            $ar = DB::select(
                'SELECT (SELECT COUNT(cm.id) from comments cm where cm.article = a.id) "comments", a.bloc1,a.bloc2,a.bloc3, a.cover_image, a.titre,ch.name "authors",ch.id "channel", \'article\' as type, a.id,DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
                FROM article a
                JOIN channel ch
                ON ch.id = a.channel
                where a.category = ' . $category . '
                ORDER BY a.createdat DESC;'
            );
            $vd = DB::select(
                'SELECT (SELECT COUNT(cm.id) from comments cm where cm.video = v.id) "comments", v.bloc1, v.cover_image, v.titre, v.id, v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
            FROM video v
            JOIN channel ch
            ON ch.id = v.channel
            where v.category = ' . $category . '
            ORDER BY v.createdat DESC;'
            );
            $ara = collect($ar)->toArray();
            $vda = collect($vd)->toArray();
            $final = collect(array_merge($ara, $vda));
            $final = $final->shuffle();
            $final = $final->sortBy('fmt_date');
            return view('customer.blog', ["channels" => $channels, "cats" => $cats, "final" => $final, "personal" => $this->personalinfo(), "subinfo" => $this->suscribeinfo()]);
        }
    }
    public function blog_article($id)
    {
        //try {
        //no commentaires
        $cats = Categories::all();
        $channels = Channel::all();
        $com = DB::select(
            'SELECT count(distinct id) "coms" FROM comments WHERE article =' . $id
        );
        //commentaires
        $coms = DB::select(
            'SELECT c.*, u.firstname,u.lastname, DATE_FORMAT(c.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date, u.image  FROM comments c JOIN user u ON u.id = c.user WHERE c.article =' . $id
        );
        $ar = DB::select(
            'SELECT a.*, c.name,  DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date 
            FROM article a 
            JOIN channel c 
            ON c.id = a.channel
            WHERE a.id=' . $id
        );
        $tag = DB::select(
            'SELECT t.*
            FROM tag t 
            JOIN article a 
            on a.id = t.article 
            where a.id =' . $id
        );
        $tags = DB::select(
            'SELECT distinct name
            FROM tag'
        );
        $recom = DB::select(
            'SELECT distinct v.id, v.titre,DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date 
                        FROM article v 
                        JOIN tag t
                        on v.id = t.article
                        where t.name IN (SELECT th.name
                        FROM tag th 
                        JOIN article vd 
                        on vd.id = th.article
                        where vd.id =' . $id . ') 
                        and v.id != ' . $id . ' 
                        OR v.category = ' . $ar[0]->category . ' 
                        and v.id != ' . $id . '
                        ;'
        );
        $this->historystore(Auth::user()->id, $id, null);
        return view('customer.blog-detail', ["tags"=>$tags,"channels" => $channels, "cats" => $cats,"recom" => $recom,"coms" => $coms, "com" => $com[0], "tag" => $tag, "article" => $ar, "personal" => $this->personalinfo(), "subinfo" => $this->suscribeinfo()]);
        /*} catch (Throwable $th) {
            return back()->withErrors("Echec lors de la surpression");
        }*/
    }
    public function iblog_article($id)
    {
        //try {
        $ar = DB::select(
            'SELECT a.*, c.name, c.id "cid",  DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date 
            FROM article a 
            JOIN channel c 
            ON c.id = a.channel
            WHERE a.id=' . $id
        );
        $tag = DB::select(
            'SELECT t.*
            FROM tag t 
            JOIN article a 
            on a.id = t.article 
            where a.id =' . $id
        );
        //dévut de recommandation
        $recom = DB::select(
            'SELECT distinct a.id, a.titre
                FROM article a 
                JOIN channel ch
                ON ch.id = a.channel
                JOIN tag t
                on a.id = t.article 
                where t.name IN (SELECT th.name
                FROM tag th 
                JOIN article ar 
                on ar.id = th.article 
                where ar.id =' . $id . ')
                and ch.etat = 1
                and a.id != ' . $id . ';'
        );
        if (count($recom) < 1) {
            $recom = DB::select(
                'SELECT a.id, a.titre
                    FROM article a
                    JOIN channel ch 
                    on ch.id = a.channel
                    JOIN categories c
                    ON c.id = a.category
                    where c.id = 
                    ch.id = ' . $ar[0]->cid . '
                     and a.id !=' . $id . ';'
            );
        } else if (count($recom) < 1) {
            $recom = DB::select(
                'SELECT id, titre
                    FROM article;'
            );
        }
        $comments = DB::select(
            'SELECT c.message, u.image, u.firstname
                FROM comments c 
                JOIN user u
                ON c.user = u.id
                where c.article =' . $id
        );
        $recom = collect($recom);
        $recom = $recom->shuffle();
        //fin recommandations
        return view('customer.welcome.blog-details', ["tag" => $tag, "article" => $ar[0], "recom" => $recom, "comments" => $comments]);
        /*} catch (Throwable $th) {
            return back()->withErrors("Echec lors de la surpression");
        }*/
    }
    public function blog_video($id)
    {
        //try {
            //no commentaires
            $com = DB::select(
                'SELECT count(distinct id) "coms" FROM comments WHERE video =' . $id
            );
            //commentaires
            $coms = DB::select(
                'SELECT c.*, u.firstname, u.image  FROM comments c JOIN user u ON u.id = c.user WHERE c.video =' . $id
            );
            //info video
            $ar = DB::select(
                'SELECT v.*, c.name, c.image "channel_image", DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date 
            FROM video v
            JOIN channel c 
            ON c.id = v.channel
            WHERE v.id=' . $id
            );
            $tag = DB::select(
                'SELECT t.*
            FROM tag t 
            JOIN video v 
            on v.id = t.video 
            where v.id =' . $id
            );
            $recom = DB::select(
                'SELECT distinct v.id, v.titre, v.cover_image, v.duration, ch.name "channel", ca.name "cat", DATEDIFF(CURRENT_DATE, v.createdat)/30 "month"
                    FROM video v 
                    JOIN tag t
                    on v.id = t.video
                    JOIN channel ch
                    ON ch.id = v.channel
                    JOIN categories ca
                    ON ca.category_id = v.category
                    where t.name IN (SELECT th.name
                    FROM tag th 
                    JOIN video vd 
                    on vd.id = th.video
                    where vd.id =' . $id . ') 
                    and v.id != ' . $id . ' 
                    OR v.category = ' . $ar[0]->category . ' 
                    and v.id != ' . $id . '
                    ;'
            );
            $next = DB::select(
                'SELECT distinct v.id, v.titre, v.cover_image, v.duration, ch.name "channel", ca.name "cat", DATEDIFF(CURRENT_DATE, v.createdat)/30 "month"
                    FROM video v 
                    JOIN tag t
                    on v.id = t.video
                    JOIN channel ch
                    ON ch.id = v.channel
                    JOIN categories ca
                    ON ca.category_id = v.category
                    where t.name IN (SELECT th.name
                    FROM tag th 
                    JOIN video vd 
                    on vd.id = th.video
                    where vd.id =' . $id . ') 
                    and v.id != ' . $id . '
                    OR v.channel =  ' . $ar[0]->channel . ' 
                    and v.id != ' . $id . '
                    OR v.category = ' . $ar[0]->category . ' 
                    and v.id != ' . $id . '
                    ;'
            );
            $liste = DB::select(
                'SELECT COUNT(distinct s.id) "subscribers"
                FROM channel c 
                LEFT JOIN subscribers s 
                ON s.channel = c.id 
                LEFT JOIN video v 
                ON v.channel = c.id
                WHERE c.id = ' . $ar[0]->channel
            );
            $pubs = Pubs::all();
            $pubs = collect($pubs)->toArray();
            $this->historystore(Auth::user()->id, null, $id);
            return view('customer.video-page', ["tag" => $tag, "coms" => $coms, "com" => $com[0], "sub" => $liste[0], "pubs" => $pubs, "next" => $next, "video" => $ar, "personal" => $this->personalinfo(), "subinfo" => $this->suscribeinfo(), "recom" => $recom]);
        /*} catch (Throwable $th) {
            return back()->withErrors("Echec lors de la surpression");
        }*/
    }
    public function iblog_video($id)
    {

        try {
            $vd = DB::select(
                'SELECT v.*, c.name, c.id "cid",  DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date 
            FROM video v 
            JOIN channel c 
            ON c.id = v.channel
            WHERE v.id=' . $id
            );
            $tag = DB::select(
                'SELECT t.*
            FROM tag t 
            JOIN video v 
            on v.id = t.video 
            where v.id =' . $id
            );
            //dévut de recommandation
            $recom = DB::select(
                'SELECT distinct v.id, v.titre, v.cover_image, v.duration, ch.name "channel", ca.name "cat"
            FROM video v 
            JOIN tag t
            on v.id = t.video
            JOIN channel ch
            ON ch.id = v.channel
            JOIN categories ca
            ON ca.category_id = v.category
            where t.name IN (SELECT th.name
            FROM tag th 
            JOIN video vd 
            on vd.id = th.video
            where vd.id =' . $id . ')
            and ch.etat = 1 
            and v.id != ' . $id . '
            OR v.category = ' . $vd[0]->category . '
            and v.id != ' . $id . '
            ;'
            );
            if (count($recom) < 1) {
                $recom = DB::select(
                    'SELECT v.id, v.titre
                    FROM video v
                    JOIN channel ch 
                    on ch.id = v.channel
                    where ch.id = ' . $vd[0]->cid . '
                     and v.id !=' . $id . ';'
                );
            } else if (count($recom) < 1) {
                $recom = DB::select(
                    'SELECT id, titre
                    FROM article;'
                );
            }
            $recom = collect($recom);
            $recom = $recom->shuffle();
            $comments = DB::select(
                'SELECT c.message, u.image, u.firstname
                FROM comments c 
                JOIN user u
                ON c.user = u.id
                where c.video=' . $id
            );
            //fin recommandations
            return view('customer.welcome.blog-detailsv', ["tag" => $tag, "video" => $vd[0], "recom" => $recom, "comments" => $comments]);
        } catch (Throwable $th) {
            return back()->with('error',"Echec lors de la surpression");
        }
    }
    public function register()
    {
        return view('register');
    }

    public function personalinfo()
    {
        $wishlist = DB::select(
            'SELECT * 
            FROM wishlist 
            WHERE customer_id =' . Auth::user()->id
        );
        $wishes = [];
        if (count($wishlist) > 0) {
            //$wishes = WishlistItems::where('wishlist_id', $wishlist[0]->wishlist_id)->orderBy('createdat')->get();
            $wishes = DB::select(
                'SELECT w.*, p.* 
                FROM wishlist_items w
                JOIN products p
                ON p.product_id = w.product_id
                WHERE w.wishlist_id =' . $wishlist[0]->wishlist_id
            );
            return json_decode(json_encode($wishes), true);
        } else {
            $wishes = WishlistItems::where('wishlist_id', null)->orderBy('createdat')->get();
            ;
            return $wishes->toArray();
        }
    }
    public function suscribeinfo()
    {
        $sus = DB::select(
            'SELECT ch.* 
            FROM subscribers s 
            JOIN channel ch 
            ON ch.id = s.channel
            WHERE s.user = ' . Auth::user()->id
        );
        return json_decode(json_encode($sus), true);
    }
    public function historystore($user, $article, $video)
    {
        $his = new History();
        $his->article = $article;
        $his->video = $video;
        $his->user = $user;
        $his->save();
    }
    public function logout(Request $request)
    {
        if (Session::has('user_id')) {
            Session::forget('user_id');
        } elseif (Session::has('admin_id')) {
            Session::forget('admin_id');
        }

        Auth::logout();
        return redirect()->route('login');
    }
}
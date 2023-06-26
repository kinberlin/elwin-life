<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use App\Models\Pubs;
use App\Models\Slide;
use App\Models\Users;
use App\Models\Channel;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Throwable;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function login()
    {
        return view('admin.pages-sign-in');
    }
    public function index()
    {
        return redirect('/admin/dashboard');
    }
    public function signup()
    {
        return view('customer.register');
    }
    public function signuppost(Request $request)
    {
        try {
            // Validate the incoming request
            $validatedData = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
                'name' => 'required'
            ]);

            DB::beginTransaction();
            Users::Create(["firsname" => $request->input('name'), "password" => bcrypt($request->input('password')), "email" => $request->input('email')]);
            DB::commit();
            $this->authenticate($request);
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de L'enregistrement");
        }


        return view('customer.register');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function channels()
    {
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
        return view('admin.pages-channels', ["channels" => $liste]);
    }
    public function channelpost(Request $request)
    {
        try {
            DB::beginTransaction();

            $name = $request->input('name');
            $description = $request->input('description');
            $image = $request->file('image');
            $cover_image = $request->file('cover_image');

            $filename = time() . '_' . $image->getClientOriginalName();
            $filename1 = time() . '_' . $cover_image->getClientOriginalName();

            $image->move(public_path('/uploads/blog/category'), $filename);
            $cover_image->move(public_path('/uploads/blog/category'), $filename1);

            Channel::Create([
                "name" => $name,
                "description" => $description,
                "image" => asset('/uploads/blog/category/' . $filename),
                "cover_image" => asset('/uploads/blog/category/' . $filename1)
            ]);
            DB::commit();
            return redirect('/admin/channels')->with('error', "Category successfully Added.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de l'ajout'");
        }
    }
    public function channelstatus($id)
    {
        try {
            DB::beginTransaction();
            $ch = Channel::find($id);
            $ch->etat = $ch->etat == 1 ? 2 : 1 ;
            $ch->save();
            DB::commit();
            return redirect()->back()->with('error', "Category successfully Added.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de l'ajout'");
        }
    }
    public function channelupdate(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $ch = Channel::find($id);
            $name = $request->input('name');
            $description = $request->input('description');
            $ch->name = $name;
            $ch->description = $description;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('/uploads/blog/category'), $filename);
                $this->deleteImage($ch->image, 'uploads/blog/category/');
                $ch->image = asset('/uploads/blog/category/' . $filename);
            }
            if ($request->hasFile('cover_image')) {
                $image = $request->file('cover_image');
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('/uploads/blog/category'), $filename);
                $this->deleteImage($ch->cover_image, '/uploads/blog/category/');
                $ch->cover_image = asset('/uploads/blog/category/' . $filename);
            }
            $ch->update();
            DB::commit();
            return redirect()->back()->with('error', "Category successfully Added.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de l'ajout'");
        }
    }
    public function channeldelete($id)
    {
        try {
            DB::beginTransaction();
            $ch = Channel::find($id);
            $this->deleteImage($ch->image, '/uploads/blog/category');
            $this->deleteImage($ch->cover_image, '/uploads/blog/category');
            $ch->delete();
            DB::commit();
            return redirect()->back()->with('error', "Channel successfully Deleted.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de la surpression");
        }
    }
    public function settings()
    {
        return view('admin.pages-settings');
    }
    public function settingpost(Request $request)
    {
        // try{
        $articlec = new ArticleController();
        $user = Auth::user();
        $user->firstname = $request->has('firstname') ? $request->input('firstname') : Auth::user()->firstname;
        $user->lastname = $request->has('lastname') ? $request->input('lastname') : Auth::user()->lastname;
        $user->phone = $request->has('phone') ? $request->input('phone') : Auth::user()->phone;
        $user->city = $request->has('city') ? $request->input('city') : Auth::user()->city;
        $user->adress = $request->has('address') ? $request->input('address') : Auth::user()->adress;
        $user->BP = $request->has('bp') ? $request->input('bp') : Auth::user()->BP;
        $user->country = $request->has('country') ? $request->input('country') : Auth::user()->country;
        $user->company = $request->has('company') ? $request->input('company') : Auth::user()->company;
        if ($request->hasFile('image')) {
            if ($request->file('image') !== null) {
                $user->image ? $articlec->deleteImage($user->image, 'uploads/user/') : null;
                $ima = $request->file('image');
                $filename = time() . '_' . $ima->getClientOriginalName();
                $user->image = asset('/uploads/user/' . $filename);
                $ima->move(public_path('/uploads/user'), $filename);
            }
        }
        if ($request->has('password')) {
            if (Hash::check(Auth::user()->password, $request->input('password'))) {
                $user->password = bcrypt($request->input('newpassword'));
            }
        }
        $user->update();
        return redirect('/admin/settings')->with('error',"succesfully updated");
        /*} catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de L'enregistrement");
        }*/
    }
    public function contact()
    {
        return view('customer.contact');
    }
    public function clients()
    {
        $users = Users::where('role', 2)->get();
        return view('admin.pages-clients', ["users" => $users]);
    }
    public function history()
    {
        return view('customer.history-page');
    }
    public function account()
    {
        return view('customer.account');
    }
    public function abonnements()
    {
        return view('customer.subscriptions');
    }
    public function shopcategorie()
    {
        $liste = DB::select(
            'SELECT c.*, COUNT(p.product_id) "no_produit" 
        from categories c 
        left join products p 
        on c.category_id = p.category_id 
        GROUP BY c.category_id, c.name,c.description, c.createdat;'
        );
        return view('admin.pages-categories', ["categories" => $liste]);
    }
    public function shopcategorie_post(Request $request)
    {
        try {
            DB::beginTransaction();
            Categories::Create(["name" => $request->input('name'), "description" => $request->input('description')]);
            DB::commit();
            return redirect('/admin/shop/categorie')->with('error', "Category successfully Added.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de L'enregistrement");
        }

    }
    public function shopcategorie_update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $categorie = Categories::find($id);
            $categorie->name = $request->input('name');
            $categorie->description = $request->input('description');
            $categorie->update();
            DB::commit();
            return redirect('/admin/shop/categorie')->with('error', "Category successfully Modified.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de la mise à Jour");
        }

    }
    public function shopcategorie_delete(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $categorie = Categories::find($id);
            $categorie->delete();
            DB::commit();
            return redirect('/admin/shop/categorie')->with('error', "Category successfully Deleted.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de la mise à Jour");
        }
    }
    public function shopproduit()
    {
        $liste = Categories::all();
        $listes = DB::select(
            'SELECT p.*, c.name "category"
            from products p 
            left join categories c
            on c.category_id = p.category_id 
            ORDER BY p.createdat DESC;'
        );
        $channels = Channel::all();
        return view('admin.pages-produits', ["categories" => $liste, "products" => $listes, "channels" => $channels]);
    }

    public function shopproduit_post(Request $request)
    {
        try {
            DB::beginTransaction();

            $name = $request->input('name');
            $category_id = $request->input('category_id');
            $delivery_period = $request->input('delivery_period');
            $description = $request->input('description');
            $image = $request->file('image');
            $image1 = $request->file('image1');
            $image2 = $request->file('image2');
            $image3 = $request->file('image3');
            $seller = $request->input('seller');
            $price = $request->input('price');

            $filename = time() . '_' . $image->getClientOriginalName();
            $filename1 = time() . '_' . $image1->getClientOriginalName();
            $filename2 = time() . '_' . $image2->getClientOriginalName();
            $filename3 = time() . '_' . $image3->getClientOriginalName();

            $image->move(public_path('/uploads/shop/photo'), $filename);
            $image1->move(public_path('/uploads/shop/photo'), $filename1);
            $image2->move(public_path('/uploads/shop/photo'), $filename2);
            $image3->move(public_path('/uploads/shop/photo'), $filename3);

            $products = new Products();
            $products->channel = $request->has('channel') ? $request->input('channel') : null;
            $products->name = $name;
            $products->description = $description;
            $products->category_id = $category_id;
            $products->delivery_period = $delivery_period;
            $products->seller = $seller;
            $products->price = $price;
            $products->image = asset('/uploads/shop/photo/' . $filename);
            $products->image1 = asset('/uploads/shop/photo/' . $filename1);
            $products->image2 = asset('/uploads/shop/photo/' . $filename2);
            $products->image3 = asset('/uploads/shop/photo/' . $filename3);
            $products->save();
            DB::commit();
            return redirect('/admin/shop/produit')->with('error', "Product successfully Added.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de l'ajout'");
        }

    }

    public function shopproduit_etat($id)
    {
        try {
            DB::beginTransaction();
            $product = Products::find($id);
            $product->etat === 1 ? $product->etat = 2 : $product->etat = 1;
            $product->update();
            DB::commit();
            return redirect('/admin/shop/produit')->with('error', "Product successfully Modified.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de la mise à Jour");
        }
    }

    public function pubshow()
    {
        $liste = Pubs::all();
        return view('admin.pages-pub', ["pub" => $liste]);
    }
    public function pub_post(Request $request)
    {
        try {
            DB::beginTransaction();
            $pub = new Pubs();
            $pub->begin = $request->input('begin');
            $pub->end = $request->input('end');
            $pub->description = $request->input('description');
            $image = $request->file('src');

            $filename = time() . '_' . $image->getClientOriginalName();

            $image->move(public_path('/uploads/pub'), $filename);
            $pub->image = asset('/uploads/pub/' . $filename);
            $pub->save();
            DB::commit();
            return redirect()->back()->with('error', "Pub successfully Added.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de l'ajout'");
        }

    }
    public function pub_update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $pub = Pubs::find($id);

            $pub->begin = $request->has('begin') ? $request->input('begin') : $pub->begin;
            $pub->end = $request->has('end') ? $request->input('end') : $pub->end;
            
            if ($request->hasFile('src')) {
                $src = $request->file('src');
                $filename = time() . '_' . $src->getClientOriginalName();
                $src->move(public_path('/uploads/pub'), $filename);
                $this->deleteImage($pub->image, 'uploads/pub/');
                $pub->image = asset('/uploads/pub/' . $filename);
            }
            $pub->update();
            DB::commit();
            return redirect()->back()->with('error', "Pub successfully updated.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de la modification'");
        }

    }
    public function pub_delete($id)
    {
        try {
            DB::beginTransaction();
            $pub = Pubs::find($id);
            $this->deleteImage($pub->image, 'uploads/pub/');
            $pub->delete();
            DB::commit();
            return redirect()->back()->with('error', "Pub successfully Deleted.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de la surpression");
        }
    }
    public function pub_state($id)
    {
        //try {
            DB::beginTransaction();
            $pub = Pubs::find($id);
            $pub->etat = $pub->etat === 1 ? 2 : 1;
            $pub->save();
            DB::commit();
            return redirect()->back()->with('error', "Pub successfully Deleted.");
        /*} catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de la surpression");
        }*/
    }
    public function slideshow()
    {
        $liste = Slide::all();
        return view('admin.pages-projects', ["slide" => $liste]);
    }
    
    public function slide_post(Request $request)
    {
        try {
            DB::beginTransaction();
            $slide = new Slide();
            $slide->min = $request->input('min');
            $slide->texte = $request->input('texte');;
            $image = $request->file('src');

            $filename = time() . '_' . $image->getClientOriginalName();

            $image->move(public_path('/uploads/slide'), $filename);
            $slide->src = asset('/uploads/slide/' . $filename);
            $slide->save();
            DB::commit();
            return redirect()->back()->with('error', "Slide successfully Added.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de l'ajout'");
        }

    }
    public function slide_update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $slide = Slide::find($id);

            $slide->min = $request->has('min') ? $request->input('min') : $slide->min;
            $slide->texte = $request->has('texte') ? $request->input('texte') : $slide->texte;
            
            if ($request->hasFile('src')) {
                $src = $request->file('src');
                $filename = time() . '_' . $src->getClientOriginalName();
                $src->move(public_path('/uploads/slide'), $filename);
                $this->deleteImage($slide->src, 'uploads/slide/');
                $slide->src = asset('/uploads/slide/' . $filename);
            }
            $slide->update();
            DB::commit();
            return redirect()->back()->with('error', "Slide successfully updated.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de la modification'");
        }

    }
    public function slide_delete($id)
    {
        try {
            DB::beginTransaction();
            $slide = Slide::find($id);
            $this->deleteImage($slide->src, 'uploads/slide/');
            $slide->delete();
            DB::commit();
            return redirect()->back()->with('error', "Slide successfully Deleted.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de la surpression");
        }
    }
    public function deleteImage($url, $paths)
    {
        /// Get the filename from the URL
        $filename = basename($url);

        // Get the full path to the file
        $path = public_path($paths . $filename);

        // Check if the file exists
        if (file_exists($path)) {
            // Delete the file
            unlink($path);

            // Return a success response
            return response()->json(['message' => 'File deleted successfully.']);
        } else {
            // Return an error response
            return response()->json(['message' => 'File not found.'], 404);
        }
    }
    public function shopproduit_update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $pro = Products::find($id);
            $name = $request->input('name');
            $category_id = $request->input('category_id');
            $delivery_period = $request->input('delivery_period');
            $description = $request->input('description');
            $seller = $request->input('seller');
            $price = $request->input('price');

            $pro->name = $name;
            $pro->channel = $request->has('channel') ? $request->input('channel') : null;
            $pro->category_id = $category_id;
            $pro->delivery_period = $delivery_period;
            $pro->description = $description;
            $pro->seller = $seller;
            $pro->price = $price;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('/uploads/shop/photo'), $filename);
                $this->deleteImage($pro->image, 'uploads/shop/photo/');
                $pro->image = asset('/uploads/shop/photo/' . $filename);
            }
            if ($request->hasFile('image1')) {
                $image = $request->file('image1');
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('/uploads/shop/photo'), $filename);
                $this->deleteImage($pro->image1, 'uploads/shop/photo/');
                $pro->image1 = asset('/uploads/shop/photo/' . $filename);
            }
            if ($request->hasFile('image2')) {
                $image = $request->file('image2');
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('/uploads/shop/photo'), $filename);
                $this->deleteImage($pro->image2, 'uploads/shop/photo/');
                $pro->image2 = asset('/uploads/shop/photo/' . $filename);
            }
            if ($request->hasFile('image3')) {
                $image = $request->file('image3');
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('/uploads/shop/photo'), $filename);
                $this->deleteImage($pro->image3, 'uploads/shop/photo/');
                $pro->image3 = asset('/uploads/shop/photo/' . $filename);
            }
            $pro->update();
            DB::commit();
            return redirect()->back()->with('error', "Product successfully updated.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de l'ajout'");
        }

    }
    public function shopproduit_delete(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $pro = Products::find($id);
            $this->deleteImage($pro->image, 'uploads/shop/photo/');
            $this->deleteImage($pro->image1, 'uploads/shop/photo/');
            $this->deleteImage($pro->image2, 'uploads/shop/photo/');
            $this->deleteImage($pro->image3, 'uploads/shop/photo/');
            $pro->delete();
            DB::commit();
            return redirect('/admin/shop/produit')->with('error', "Product successfully Deleted.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de la surpression");
        }
    }

    public function shopdetail()
    {
        return view('customer.welcome.shop-detail');
    }

    public function blog()
    {
        return view('customer.blog');
    }
    public function blog_article()
    {
        $liste = Channel::all();
        $cats = Categories::all();
        $articles = DB::select(
            'SELECT a.*, ch.name, c.name "cats", DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date 
            FROM article a 
            JOIN channel ch 
            ON ch.id = a.channel
            LEFT JOIN categories c
            ON c.category_id = a.category '
        );
        return view('admin.pages-article', ["categories" => $cats,"channels" => $liste, "articles" => $articles]);
    }

    public function blog_video()
    {

        $liste = Channel::all();
        $cats = Categories::all();
        $articles = DB::select(
            'SELECT v.*, ch.name, c.name "cats", DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date 
            FROM video v 
            JOIN channel ch 
            ON ch.id = v.channel
            LEFT JOIN categories c
            ON c.category_id = v.category; '
        );
        return view('admin.pages-video', ["categories" => $cats,"channels" => $liste, "videos" => $articles]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 2) {
                Session::put('user_id', Auth::user()->id);
                Session::put('firstname', Auth::user()->firstname);
                Session::put('role', Auth::user()->role);
                Session::put('image', Auth::user()->image);
                return redirect()->route('user.dashboard');
            } elseif (Auth::user()->role == 1) {
                Session::put('user_id', Auth::user()->id);
                Session::put('firstname', Auth::user()->firstname);
                Session::put('role', Auth::user()->role);
                Session::put('image', Auth::user()->image);
                return redirect()->route('admin.dashboard');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid login credentials');
        }
    }

    public function store(Request $request)
    {
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

    public function partnership()
    {
        $client = new ClientController();
         try {
            $liste = DB::select(
                'SELECT p.*, u.image, u.firstname,u.lastname, u.email "regemail", u.phone "tel", DATE_FORMAT(p.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date 
                FROM partnership p
                JOIN user u 
                ON u.id = p.user
                ORDER BY p.createdat DESC'
            );
        return view('admin.pages-partnership',["messages" => $liste]);
        } catch (Throwable $th) {
            return redirect()->back()->with('error',"Echec lors de la surpression");
        }
    }
}
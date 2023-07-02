<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function client() { return $client = new ClientController();}
    public function formations()
    {
        $ar = DB::select(
            'SELECT a.id, c.category_id "category", a.cover_image, a.titre,ch.name "authors",ch.id "channel", \'article\' as type, a.id,DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM article a
        JOIN channel ch
        ON ch.id = a.channel
        JOIN categories c
        ON c.category_id = a.category
        where ch.etat = 1
        and c.category_id = 5
        ORDER BY a.createdat DESC;'
        );
        $vd = DB::select(
            'SELECT  v.id,c.category_id "category", v.cover_image, v.titre, v.id, v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM video v
        JOIN channel ch
        ON ch.id = v.channel
        JOIN categories c
        ON c.category_id = v.category
        where ch.etat = 1
        and c.category_id = 5
        ORDER BY v.createdat DESC;'
        );
        $ara = collect($ar)->toArray();
        $vda = collect($vd)->toArray();
        $final = collect(array_merge($ara, $vda));
        $final = $final->shuffle();
        $final = $final->sortBy('fmt_date');

        $ch = \App\Models\Channel::where("etat", 1)->get();
        return view('customer.welcome.formations', ["welcome" => $this->client()->welcomeinfo(), "links" => $this->client()->welcomeinfolinks(),'final' => $final]);
    }
    public function entreprenariats()
    {
        $ar = DB::select(
            'SELECT a.id, c.category_id "category", a.cover_image, a.titre,ch.name "authors",ch.id "channel", \'article\' as type, a.id,DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM article a
        JOIN channel ch
        ON ch.id = a.channel
        JOIN categories c
        ON c.category_id = a.category
        where ch.etat = 1
        and c.category_id = 7
        ORDER BY a.createdat DESC;'
        );
        $vd = DB::select(
            'SELECT  v.id,c.category_id "category", v.cover_image, v.titre, v.id, v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM video v
        JOIN channel ch
        ON ch.id = v.channel
        JOIN categories c
        ON c.category_id = v.category
        where ch.etat = 1
        and c.category_id = 7
        ORDER BY v.createdat DESC;'
        );
        $ara = collect($ar)->toArray();
        $vda = collect($vd)->toArray();
        $final = collect(array_merge($ara, $vda));
        $final = $final->shuffle();
        $final = $final->sortBy('fmt_date');
        return view('customer.welcome.entrepreunariat', ["welcome" => $this->client()->welcomeinfo(), "links" => $this->client()->welcomeinfolinks(),'final' => $final]);
    }
    public function jeux()
    {
        $ar = DB::select(
            'SELECT a.id, c.category_id "category", a.cover_image, a.titre,ch.name "authors",ch.id "channel", \'article\' as type, a.id,DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM article a
        JOIN channel ch
        ON ch.id = a.channel
        JOIN categories c
        ON c.category_id = a.category
        where ch.etat = 1
        and c.category_id = 8
        ORDER BY a.createdat DESC;'
        );
        $vd = DB::select(
            'SELECT  v.id,c.category_id "category", v.cover_image, v.titre, v.id, v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM video v
        JOIN channel ch
        ON ch.id = v.channel
        JOIN categories c
        ON c.category_id = v.category
        where ch.etat = 1
        and c.category_id = 8
        ORDER BY v.createdat DESC;'
        );
        $ara = collect($ar)->toArray();
        $vda = collect($vd)->toArray();
        $final = collect(array_merge($ara, $vda));
        $final = $final->shuffle();
        $final = $final->sortBy('fmt_date');

        $ch = \App\Models\Channel::where("etat", 1)->get();
        return view('customer.welcome.jeux', ["welcome" => $this->client()->welcomeinfo(), "links" => $this->client()->welcomeinfolinks(),'final' => $final]);
    }
    public function sante()
    {
        $ar = DB::select(
            'SELECT a.id, c.category_id "category", a.cover_image, a.titre,ch.name "authors",ch.id "channel", \'article\' as type, a.id,DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM article a
        JOIN channel ch
        ON ch.id = a.channel
        JOIN categories c
        ON c.category_id = a.category
        where ch.etat = 1
        and c.category_id = 1
        ORDER BY a.createdat DESC;'
        );
        $vd = DB::select(
            'SELECT  v.id,c.category_id "category", v.cover_image, v.titre, v.id, v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM video v
        JOIN channel ch
        ON ch.id = v.channel
        JOIN categories c
        ON c.category_id = v.category
        where ch.etat = 1
        and c.category_id = 1
        ORDER BY v.createdat DESC;'
        );
        $ara = collect($ar)->toArray();
        $vda = collect($vd)->toArray();
        $final = collect(array_merge($ara, $vda));
        $final = $final->shuffle();
        $final = $final->sortBy('fmt_date');

        $ch = \App\Models\Channel::where("etat", 1)->get();
        return view('customer.welcome.sante', ["welcome" => $this->client()->welcomeinfo(), "links" => $this->client()->welcomeinfolinks(),'final' => $final]);
    }
    public function tradition()
    {
        $ar = DB::select(
            'SELECT a.id, c.category_id "category", a.cover_image, a.titre,ch.name "authors",ch.id "channel", \'article\' as type, a.id,DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM article a
        JOIN channel ch
        ON ch.id = a.channel
        JOIN categories c
        ON c.category_id = a.category
        where ch.etat = 1
        and c.category_id = 9
        ORDER BY a.createdat DESC;'
        );
        $vd = DB::select(
            'SELECT  v.id,c.category_id "category", v.cover_image, v.titre, v.id, v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM video v
        JOIN channel ch
        ON ch.id = v.channel
        JOIN categories c
        ON c.category_id = v.category
        where ch.etat = 1
        and c.category_id = 9
        ORDER BY v.createdat DESC;'
        );
        $ara = collect($ar)->toArray();
        $vda = collect($vd)->toArray();
        $final = collect(array_merge($ara, $vda));
        $final = $final->shuffle();
        $final = $final->sortBy('fmt_date');

        $ch = \App\Models\Channel::where("etat", 1)->get();
        return view('customer.welcome.tradition', ["welcome" => $this->client()->welcomeinfo(), "links" => $this->client()->welcomeinfolinks(),'final' => $final]);
    }

    public function humour()
    {
        $ar = DB::select(
            'SELECT a.id, c.category_id "category", a.cover_image, a.titre,ch.name "authors",ch.id "channel", \'article\' as type, a.id,DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM article a
        JOIN channel ch
        ON ch.id = a.channel
        JOIN categories c
        ON c.category_id = a.category
        where ch.etat = 1
        and c.category_id = 10
        ORDER BY a.createdat DESC;'
        );
        $vd = DB::select(
            'SELECT  v.id,c.category_id "category", v.cover_image, v.titre, v.id, v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM video v
        JOIN channel ch
        ON ch.id = v.channel
        JOIN categories c
        ON c.category_id = v.category
        where ch.etat = 1
        and c.category_id = 10
        ORDER BY v.createdat DESC;'
        );
        $ara = collect($ar)->toArray();
        $vda = collect($vd)->toArray();
        $final = collect(array_merge($ara, $vda));
        $final = $final->shuffle();
        $final = $final->sortBy('fmt_date');

        $ch = \App\Models\Channel::where("etat", 1)->get();
        return view('customer.welcome.humour', ["welcome" => $this->client()->welcomeinfo(), "links" => $this->client()->welcomeinfolinks(),'final' => $final]);
    }
    public function fable()
    {
        $ar = DB::select(
            'SELECT a.id, c.category_id "category", a.cover_image, a.titre,ch.name "authors",ch.id "channel", \'article\' as type, a.id,DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM article a
        JOIN channel ch
        ON ch.id = a.channel
        JOIN categories c
        ON c.category_id = a.category
        where ch.etat = 1
        and c.category_id = 11
        ORDER BY a.createdat DESC;'
        );
        $vd = DB::select(
            'SELECT  v.id,c.category_id "category", v.cover_image, v.titre, v.id, v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM video v
        JOIN channel ch
        ON ch.id = v.channel
        JOIN categories c
        ON c.category_id = v.category
        where ch.etat = 1
        and c.category_id = 11
        ORDER BY v.createdat DESC;'
        );
        $ara = collect($ar)->toArray();
        $vda = collect($vd)->toArray();
        $final = collect(array_merge($ara, $vda));
        $final = $final->shuffle();
        $final = $final->sortBy('fmt_date');

        $ch = \App\Models\Channel::where("etat", 1)->get();
        return view('customer.welcome.fable', ["welcome" => $this->client()->welcomeinfo(), "links" => $this->client()->welcomeinfolinks(),'final' => $final]);
    }
    public function bien_etre()
    {
        $ar = DB::select(
            'SELECT a.id, c.category_id "category", a.cover_image, a.titre,ch.name "authors",ch.id "channel", \'article\' as type, a.id,DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM article a
        JOIN channel ch
        ON ch.id = a.channel
        JOIN categories c
        ON c.category_id = a.category
        where ch.etat = 1
        and c.category_id = 12
        ORDER BY a.createdat DESC;'
        );
        $vd = DB::select(
            'SELECT  v.id,c.category_id "category", v.cover_image, v.titre, v.id, v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM video v
        JOIN channel ch
        ON ch.id = v.channel
        JOIN categories c
        ON c.category_id = v.category
        where ch.etat = 1
        and c.category_id = 12
        ORDER BY v.createdat DESC;'
        );
        $ara = collect($ar)->toArray();
        $vda = collect($vd)->toArray();
        $final = collect(array_merge($ara, $vda));
        $final = $final->shuffle();
        $final = $final->sortBy('fmt_date');

        $ch = \App\Models\Channel::where("etat", 1)->get();
        return view('customer.welcome.bien-etre', ["welcome" => $this->client()->welcomeinfo(), "links" => $this->client()->welcomeinfolinks(),'final' => $final]);
    }
    public function bien_nourrir()
    {
        $ar = DB::select(
            'SELECT a.id, c.category_id "category", a.cover_image, a.titre,ch.name "authors",ch.id "channel", \'article\' as type, a.id,DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM article a
        JOIN channel ch
        ON ch.id = a.channel
        JOIN categories c
        ON c.category_id = a.category
        where ch.etat = 1
        and c.category_id = 13
        ORDER BY a.createdat DESC;'
        );
        $vd = DB::select(
            'SELECT  v.id,c.category_id "category", v.cover_image, v.titre, v.id, v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM video v
        JOIN channel ch
        ON ch.id = v.channel
        JOIN categories c
        ON c.category_id = v.category
        where ch.etat = 1
        and c.category_id = 13
        ORDER BY v.createdat DESC;'
        );
        $ara = collect($ar)->toArray();
        $vda = collect($vd)->toArray();
        $final = collect(array_merge($ara, $vda));
        $final = $final->shuffle();
        $final = $final->sortBy('fmt_date');

        $ch = \App\Models\Channel::where("etat", 1)->get();
        return view('customer.welcome.bien-nourrir', ["welcome" => $this->client()->welcomeinfo(), "links" => $this->client()->welcomeinfolinks(),'final' => $final]);
    }
    public function bien_soigner()
    {
        $ar = DB::select(
            'SELECT a.id, c.category_id "category", a.cover_image, a.titre,ch.name "authors",ch.id "channel", \'article\' as type, a.id,DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM article a
        JOIN channel ch
        ON ch.id = a.channel
        JOIN categories c
        ON c.category_id = a.category
        where ch.etat = 1
        and c.category_id = 14
        ORDER BY a.createdat DESC;'
        );
        $vd = DB::select(
            'SELECT  v.id,c.category_id "category", v.cover_image, v.titre, v.id, v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM video v
        JOIN channel ch
        ON ch.id = v.channel
        JOIN categories c
        ON c.category_id = v.category
        where ch.etat = 1
        and c.category_id = 14
        ORDER BY v.createdat DESC;'
        );
        $ara = collect($ar)->toArray();
        $vda = collect($vd)->toArray();
        $final = collect(array_merge($ara, $vda));
        $final = $final->shuffle();
        $final = $final->sortBy('fmt_date');

        $ch = \App\Models\Channel::where("etat", 1)->get();
        return view('customer.welcome.bien-soigner', ["welcome" => $this->client()->welcomeinfo(), "links" => $this->client()->welcomeinfolinks(),'final' => $final]);
    }
    public function art()
    {
        $ar = DB::select(
            'SELECT a.id, c.category_id "category", a.cover_image, a.titre,ch.name "authors",ch.id "channel", \'article\' as type, a.id,DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM article a
        JOIN channel ch
        ON ch.id = a.channel
        JOIN categories c
        ON c.category_id = a.category
        where ch.etat = 1
        and c.category_id = 15
        ORDER BY a.createdat DESC;'
        );
        $vd = DB::select(
            'SELECT  v.id,c.category_id "category", v.cover_image, v.titre, v.id, v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM video v
        JOIN channel ch
        ON ch.id = v.channel
        JOIN categories c
        ON c.category_id = v.category
        where ch.etat = 1
        and c.category_id = 15
        ORDER BY v.createdat DESC;'
        );
        $ara = collect($ar)->toArray();
        $vda = collect($vd)->toArray();
        $final = collect(array_merge($ara, $vda));
        $final = $final->shuffle();
        $final = $final->sortBy('fmt_date');

        $ch = \App\Models\Channel::where("etat", 1)->get();
        return view('customer.welcome.art', ["welcome" => $this->client()->welcomeinfo(), "links" => $this->client()->welcomeinfolinks(),'final' => $final]);
    }
    public function musique()
    {
        $ar = DB::select(
            'SELECT a.id, c.category_id "category", a.cover_image, a.titre,ch.name "authors",ch.id "channel", \'article\' as type, a.id,DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM article a
        JOIN channel ch
        ON ch.id = a.channel
        JOIN categories c
        ON c.category_id = a.category
        where ch.etat = 1
        and c.category_id = 16
        ORDER BY a.createdat DESC;'
        );
        $vd = DB::select(
            'SELECT  v.id,c.category_id "category", v.cover_image, v.titre, v.id, v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM video v
        JOIN channel ch
        ON ch.id = v.channel
        JOIN categories c
        ON c.category_id = v.category
        where ch.etat = 1
        and c.category_id = 16
        ORDER BY v.createdat DESC;'
        );
        $ara = collect($ar)->toArray();
        $vda = collect($vd)->toArray();
        $final = collect(array_merge($ara, $vda));
        $final = $final->shuffle();
        $final = $final->sortBy('fmt_date');

        $ch = \App\Models\Channel::where("etat", 1)->get();
        return view('customer.welcome.musique', ["welcome" => $this->client()->welcomeinfo(), "links" => $this->client()->welcomeinfolinks(),'final' => $final]);
    }
    public function cinema()
    {
        $ar = DB::select(
            'SELECT a.id, c.category_id "category", a.cover_image, a.titre,ch.name "authors",ch.id "channel", \'article\' as type, a.id,DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM article a
        JOIN channel ch
        ON ch.id = a.channel
        JOIN categories c
        ON c.category_id = a.category
        where ch.etat = 1
        and c.category_id = 5
        ORDER BY a.createdat DESC;'
        );
        $vd = DB::select(
            'SELECT  v.id,c.category_id "category", v.cover_image, v.titre, v.id, v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
        FROM video v
        JOIN channel ch
        ON ch.id = v.channel
        JOIN categories c
        ON c.category_id = v.category
        where ch.etat = 1
        and c.category_id = 5
        ORDER BY v.createdat DESC;'
        );
        $ara = collect($ar)->toArray();
        $vda = collect($vd)->toArray();
        $final = collect(array_merge($ara, $vda));
        $final = $final->shuffle();
        $final = $final->sortBy('fmt_date');

        $ch = \App\Models\Channel::where("etat", 1)->get();
        return view('customer.welcome.cinema', ["welcome" => $this->client()->welcomeinfo(), "links" => $this->client()->welcomeinfolinks(),'final' => $final]);
    }

    public function iblog()
    {
        $ar = DB::select(
            'SELECT (SELECT COUNT(cm.id) from comments cm where cm.article = a.id) "comments",ca.name "cats", a.cover_image, a.titre,ch.name "authors",ch.id "channel", \'article\' as type, a.id,DATE_FORMAT(a.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
                FROM article a
                JOIN channel ch
                ON ch.id = a.channel
                JOIN categories ca 
            ON ca.category_id = a.category
            where ch.etat = 1
                ORDER BY a.createdat DESC;'
        );
        $vd = DB::select(
            'SELECT (SELECT COUNT(cm.id) from comments cm where cm.video = v.id) "comments",ca.name "cats",v.cover_image, v.titre, v.id, v.authors,ch.id "channel", \'video\' as type, DATE_FORMAT(v.createdat, \'%W %e, %M %Y %H:%i\') AS fmt_date
            FROM video v
            JOIN channel ch
            ON ch.id = v.channel
            JOIN categories ca 
            ON ca.category_id = v.category
            where ch.etat = 1
            ORDER BY v.createdat DESC;'
        );
        $ara = collect($ar)->toArray();
        $vda = collect($vd)->toArray();
        $final = collect(array_merge($ara, $vda));
        $final = $final->shuffle();
        $final = $final->sortBy('fmt_date');
        return view('customer.welcome.blog', ["welcome" => $this->client()->welcomeinfo(), "links" => $this->client()->welcomeinfolinks(),"final" => $final]);
    }

}
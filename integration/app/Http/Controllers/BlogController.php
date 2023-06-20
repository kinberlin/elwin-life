<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
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
        return view('customer.welcome.formations', ['final' => $final]);
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
        return view('customer.welcome.entrepreunariat', ['final' => $final]);
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
        return view('customer.welcome.jeux', ['final' => $final]);
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
        return view('customer.welcome.sante', ['final' => $final]);
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
        return view('customer.welcome.tradition', ['final' => $final]);
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
        return view('customer.welcome.humour', ['final' => $final]);
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
        return view('customer.welcome.fable', ['final' => $final]);
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
        return view('customer.welcome.bien-etre', ['final' => $final]);
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
        return view('customer.welcome.bien-nourrir', ['final' => $final]);
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
        return view('customer.welcome.bien-soigner', ['final' => $final]);
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
        return view('customer.welcome.art', ['final' => $final]);
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
        return view('customer.welcome.musique', ['final' => $final]);
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
        return view('customer.welcome.cinema', ['final' => $final]);
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
        return view('customer.welcome.blog', ["final" => $final]);
    }

}
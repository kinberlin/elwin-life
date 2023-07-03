<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categories;
use App\Models\Channel;
use App\Models\Products;
use App\Models\Video;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function client() { return $client = new ClientController();}
    public function index(Request $request)
    {
        $query = $request->input('query');
        $openchannel = Channel::where('etat',1)->pluck("id");

        $categories = Categories::where('name', 'like', "%$query%")
        ->orWhere('description', 'like', "%$query%")
        ->distinct()
        ->get()
        ->pluck("category_id");

        $tagvideo = Categories::where('name', 'like', "%$query%")
        ->distinct()
        ->get()
        ->pluck("video");

        $tagproduit = Categories::where('name', 'like', "%$query%")
        ->distinct()
        ->get()
        ->pluck("product");

        $tagarticle = Categories::where('name', 'like', "%$query%")
        ->distinct()
        ->get()
        ->pluck("article");

        $articles = Article::where(function ($res) use ($query,$tagarticle, $categories) {
            $res->orWhere('titre', 'like', "%$query%")
            ->orWhere('bloc1', 'like', "%$query%")
            ->orWhere('bloc2', 'like', "%$query%")
            ->orWhere('bloc3', 'like', "%$query%")
            ->whereIn('id', $tagarticle)
            ->whereIn('category', $categories);
        })
        ->whereIn('channel', $openchannel)
        ->orderBy('createdat')
        ->get();

        $videos = Video::where(function ($res) use ($query,$tagvideo, $categories) {
            $res-> orWhere('titre', 'like', "%$query%")
            ->orWhere('bloc1', 'like', "%$query%")
            ->whereIn('id', $tagvideo)
            ->whereIn('category', $categories);
        })
        ->whereIn('channel', $openchannel)
        ->orderBy('createdat')
        ->get();

        $produits = Products::where(function ($res) use ($query,$tagproduit, $categories) {
            $res->orWhere('name', 'like', "%$query%");
        })
        ->orderBy('createdat')
        ->get();

        $total = count($articles) + count($videos) + count($produits);
        return view('customer.welcome.search', [
            "welcome" => $this->client()->welcomeinfo(),
            "links" => $this->client()->welcomeinfolinks(),
            'articles' => $articles,
            'videos' => $videos,
            'produits' => $produits,
            'total' => $total
        ]);
    }
    public function customerindex(Request $request)
    {
        $query = $request->input('query');
        $openchannel = Channel::where('etat',1)->pluck("id");

        $categories = Categories::where('name', 'like', "%$query%")
        ->orWhere('description', 'like', "%$query%")
        ->distinct()
        ->get()
        ->pluck("category_id");

        $tagvideo = Categories::where('name', 'like', "%$query%")
        ->distinct()
        ->get()
        ->pluck("video");

        $tagproduit = Categories::where('name', 'like', "%$query%")
        ->distinct()
        ->get()
        ->pluck("product");

        $tagarticle = Categories::where('name', 'like', "%$query%")
        ->distinct()
        ->get()
        ->pluck("article");

        $articles = Article::where(function ($res) use ($query,$tagarticle, $categories) {
            $res->orWhere('titre', 'like', "%$query%")
            ->orWhere('bloc1', 'like', "%$query%")
            ->orWhere('bloc2', 'like', "%$query%")
            ->orWhere('bloc3', 'like', "%$query%")
            ->whereIn('id', $tagarticle)
            ->whereIn('category', $categories);
        })
        ->whereIn('channel', $openchannel)
        ->orderBy('createdat')
        ->get();

        $videos = Video::where(function ($res) use ($query,$tagvideo, $categories) {
            $res-> orWhere('titre', 'like', "%$query%")
            ->orWhere('bloc1', 'like', "%$query%")
            ->whereIn('id', $tagvideo)
            ->whereIn('category', $categories);
        })
        ->whereIn('channel', $openchannel)
        ->orderBy('createdat')
        ->get();

        $produits = Products::where(function ($res) use ($query,$tagproduit, $categories) {
            $res->orWhere('name', 'like', "%$query%");
        })
        ->orderBy('createdat')
        ->get();

        $total = count($articles) + count($videos) + count($produits);
        return view('customer.search', [
            "personal" => $this->client()->personalinfo(),
            "subinfo" => $this->client()->suscribeinfo(),
            'articles' => $articles,
            'videos' => $videos,
            'produits' => $produits,
            'total' => $total
        ]);
    }
}

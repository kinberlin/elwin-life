<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Products;
use App\Models\Video;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function client() { return $client = new ClientController();}
    public function index(Request $request)
    {
        $query = $request->input('query');

        $articles = Article::where('titre', 'like', "%$query%")
            ->orWhere('bloc1', 'like', "%$query%")
            ->orWhere('bloc2', 'like', "%$query%")
            ->orWhere('bloc3', 'like', "%$query%")
            ->distinct()
            ->get();

        $videos = Video::where('titre', 'like', "%$query%")
            ->orWhere('bloc1', 'like', "%$query%")
            ->distinct()
            ->get();

        $produits = Products::where('name', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->distinct()
            ->get();

        return view('customer.welcome.search', [
            "welcome" => $this->client()->welcomeinfo(),
            "links" => $this->client()->welcomeinfolinks(),
            'articles' => $articles,
            'videos' => $videos,
            'produits' => $produits,
        ]);
    }
}

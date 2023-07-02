<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $articles = Article::where('title', 'like', "%$query%")
            ->orWhere('bloc1', 'like', "%$query%")
            ->orWhere('bloc2', 'like', "%$query%")
            ->orWhere('bloc3', 'like', "%$query%")
            ->distinct()
            ->get();

        $videos = Article::where('title', 'like', "%$query%")
            ->orWhere('bloc1', 'like', "%$query%")
            ->distinct()
            ->get();

            $videos = Article::where('title', 'like', "%$query%")
            ->orWhere('bloc1', 'like', "%$query%")
            ->distinct()
            ->get();

        return view('search', [
            'articles' => $articles,
        ]);
    }
}

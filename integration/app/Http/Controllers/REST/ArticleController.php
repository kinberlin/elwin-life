<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //try{
        DB::beginTransaction();
        $ar = new Article();
        $ar->channel = $request->input('channel');
        $ar->titre = $request->input('titre');
        //update object bloc
        
        $ar->bloc1 = $request->has('bloc1') ? "true" :   $request->input('bloc1');
        $ar->bloc2 = $request->has('bloc2') ? $request->input('bloc2') :  null;
        $ar->bloc3 = $request->has('bloc3') ? $request->input('bloc3') :  null;
        //update object multimedia
        /*$request->hasFile('cover_image') ? $ar->cover_image = '/uploads/blog/article/' . time() . '_' . $request->file('cover_image')->getClientOriginalName() : $ar->cover_image = null;
        $request->hasFile('image1') ? $ar->image1 = '/uploads/blog/article/' . time() . '_' . $request->file('image1')->getClientOriginalName() : $ar->image1 = null;
        $request->hasFile('image2') ? $ar->image2 = '/uploads/blog/article/' . time() . '_' . $request->file('image2')->getClientOriginalName() : $ar->image2 = null;
        $request->hasFile('image3') ? $ar->image3 = '/uploads/blog/article/' . time() . '_' . $request->file('image3')->getClientOriginalName() : $ar->image3 = null;
        $request->hasFile('image4') ? $ar->image4 = '/uploads/blog/article/' . time() . '_' . $request->file('image4')->getClientOriginalName() : $ar->image4 = null;
        $request->hasFile('image5') ? $ar->image5 = '/uploads/blog/article/' . time() . '_' . $request->file('image5')->getClientOriginalName() : $ar->image5 = null;
        //move images
        $request->hasFile('cover_image') ? $request->file('cover_image')->move(public_path('/uploads/blog/article'), substr($ar->cover_image, 22)) : $ar->cover_image = null;
        $request->hasFile('image1') ? $request->file('image1')->move(public_path('/uploads/blog/article'), substr($ar->image1, 22)) : $ar->image1 = null;
        $request->hasFile('image2') ? $request->file('image2')->move(public_path('/uploads/blog/article'), substr($ar->image2, 22)) : $ar->image2 = null;
        $request->hasFile('image3') ? $request->file('image3')->move(public_path('/uploads/blog/article'), substr($ar->image3, 22)) : $ar->image3 = null;
        $request->hasFile('image4') ? $request->file('image4')->move(public_path('/uploads/blog/article'), substr($ar->image4, 22)) : $ar->image4 = null;
        $request->hasFile('image5') ? $request->file('image5')->move(public_path('/uploads/blog/article'), substr($ar->image5, 22)) : $ar->image5 = null;
        //$ar->save();
        */$newar = Article::Create($ar->toArray());
        DB::commit();/*
        $tags = $request->input('tag');
        if ($newar->id !== null) {
            foreach ($tags as $tag) {
                Tag::Create(["article" => $newar->id, "name" => $tag]);
            }
        }*/

        //return redirect('/admin/blog/article')->with('success', "Product successfully Added.");
        return response()->json("success", 200);
        /*} catch (Throwable $th) {
            return response()->json($th->getMessage(), 513);
            //return back()->withErrors("Echec lors de l'ajout'");
        }*/
    }


    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
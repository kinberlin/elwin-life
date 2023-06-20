<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Channel;
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
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            $channel = Channel::find($request->input("channel"));
            $category = $request->input("category");
            $title = $request->input("title");
            return view('customer.blog_detail_iframe', ["title" => $title, "category" => $category, "channel" => $channel]);
        } catch (Throwable $th) {
            return back()->withErrors("Echec de Navigation");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            DB::beginTransaction();
            $ar = new Article();
            $ar->channel = $request->input('channel');
            $ar->titre = $request->input('titre');
            $ar->category = $request->input('category');
            //update object bloc
            $ar->bloc1 = $request->has('bloc1') ? $request->input('bloc1') : null;
            $ar->bloc2 = $request->has('bloc2') ? $request->input('bloc2') : null;
            $ar->bloc3 = $request->has('bloc3') ? $request->input('bloc3') : null;
            //update object multimedia
            $ar->cover_image = $request->hasFile('cover_image') ? asset('/uploads/blog/article/' . time() . '_' . $request->file('cover_image')->getClientOriginalName()) : null;
            $ar->image1 = $request->hasFile('image1') ? asset('/uploads/blog/article/' . time() . '_' . $request->file('image1')->getClientOriginalName()) : null;
            $ar->image2 = $request->hasFile('image2') ? asset('/uploads/blog/article/' . time() . '_' . $request->file('image2')->getClientOriginalName()) : null;
            $ar->image3 = $request->hasFile('image3') ? asset('/uploads/blog/article/' . time() . '_' . $request->file('image3')->getClientOriginalName()) : null;
            $ar->image4 = $request->hasFile('image4') ? asset('/uploads/blog/article/' . time() . '_' . $request->file('image4')->getClientOriginalName()) : null;
            $ar->image5 = $request->hasFile('image5') ? asset('/uploads/blog/article/' . time() . '_' . $request->file('image5')->getClientOriginalName()) : null;
            //move images
            $request->hasFile('cover_image') ? $request->file('cover_image')->move(public_path('/uploads/blog/article'), substr($ar->cover_image, 22)) : null;
            $request->hasFile('image1') ? $request->file('image1')->move(public_path('/uploads/blog/article'), substr($ar->image1, 22)) : null;
            $request->hasFile('image2') ? $request->file('image2')->move(public_path('/uploads/blog/article'), substr($ar->image2, 22)) : null;
            $request->hasFile('image3') ? $request->file('image3')->move(public_path('/uploads/blog/article'), substr($ar->image3, 22)) : null;
            $request->hasFile('image4') ? $request->file('image4')->move(public_path('/uploads/blog/article'), substr($ar->image4, 22)) : null;
            $request->hasFile('image5') ? $request->file('image5')->move(public_path('/uploads/blog/article'), substr($ar->image5, 22)) : null;
            $ar->save();
            //$newar = Article::Create($ar->toArray());
            DB::commit();
            $tags = $request->input('tag');

            if ($ar->id !== null) {
                foreach ($tags as $tag) {
                    DB::insert('insert into tag (name, article) values (?, ?)', [$tag, $ar->id]);
                    ;
                    //Tag::Create(["article" => $ar->id, "name" => $tag, "product"=>null]);
                }
            }

            return redirect('/admin/blog/article')->with('success', "Product successfully Added.");
            //return response()->json("success", 200);
        } catch (Throwable $th) {
            return response()->json($th->getMessage(), 513);
            //return back()->withErrors("Echec lors de l'ajout'");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        try {
            $channel = Channel::find($request->input("channel"));
            $article = Article::find($request->input("id"));
            $category = $request->input("category");
            $title = $request->input("titre");
            $tag = DB::select(
                'SELECT t.* 
                FROM tag t 
                JOIN article a 
                on a.id = t.article 
                where a.id =' . $request->input("id")
            );
            return view('customer.blog_detail_iframe_update', ["title" => $title, "category" => $category, "channel" => $channel, "article" => $article, "tag" => $tag]);
        } catch (Throwable $th) {
            return back()->withErrors("Echec lors de la mise à Jour");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            DB::beginTransaction();
            $ar = Article::find($request->input('id'));
            $ar->category = $request->input('category');
            $ar->channel = $request->input('channel');
            $ar->titre = $request->input('titre');
            //update object bloc
            $ar->bloc1 = $request->has('bloc1') ? $request->input('bloc1') : null;
            $ar->bloc2 = $request->has('bloc2') ? $request->input('bloc2') : null;
            $ar->bloc3 = $request->has('bloc3') ? $request->input('bloc3') : null;
            //delete images
            $request->hasFile('cover_image') && $ar->cover_image !== null ? $this->deleteImage($ar->cover_image, 'uploads/blog/article/') : null;
            $request->hasFile('image1') && $ar->image1 !== null ? $this->deleteImage($ar->image1, 'uploads/blog/article/') : null;
            $request->hasFile('image2') && $ar->image2 !== null ? $this->deleteImage($ar->image2, 'uploads/blog/article/') : null;
            $request->hasFile('image3') && $ar->image3 !== null ? $this->deleteImage($ar->image3, 'uploads/blog/article/') : null;
            $request->hasFile('image4') && $ar->image4 !== null ? $this->deleteImage($ar->image4, 'uploads/blog/article/') : null;
            $request->hasFile('image5') && $ar->image5 !== null ? $this->deleteImage($ar->image5, 'uploads/blog/article/') : null;
            //update object multimedia
            $ar->cover_image = $request->hasFile('cover_image') ? asset('/uploads/blog/article/' . time() . '_' . $request->file('cover_image')->getClientOriginalName()) : $ar->cover_image;
            $ar->image1 = $request->hasFile('image1') ? asset('/uploads/blog/article/' . time() . '_' . $request->file('image1')->getClientOriginalName()) : $ar->image1;
            $ar->image2 = $request->hasFile('image2') ? asset('/uploads/blog/article/' . time() . '_' . $request->file('image2')->getClientOriginalName()) : $ar->image2;
            $ar->image3 = $request->hasFile('image3') ? asset('/uploads/blog/article/' . time() . '_' . $request->file('image3')->getClientOriginalName()) : $ar->image3;
            $ar->image4 = $request->hasFile('image4') ? asset('/uploads/blog/article/' . time() . '_' . $request->file('image4')->getClientOriginalName()) : $ar->image4;
            $ar->image5 = $request->hasFile('image5') ? asset('/uploads/blog/article/' . time() . '_' . $request->file('image5')->getClientOriginalName()) : $ar->image5;
            //move images
            $request->hasFile('cover_image') ? $request->file('cover_image')->move(public_path('/uploads/blog/article'), substr($ar->cover_image, 22)) : null;
            $request->hasFile('image1') ? $request->file('image1')->move(public_path('/uploads/blog/article'), substr($ar->image1, 22)) : null;
            $request->hasFile('image2') ? $request->file('image2')->move(public_path('/uploads/blog/article'), substr($ar->image2, 22)) : null;
            $request->hasFile('image3') ? $request->file('image3')->move(public_path('/uploads/blog/article'), substr($ar->image3, 22)) : null;
            $request->hasFile('image4') ? $request->file('image4')->move(public_path('/uploads/blog/article'), substr($ar->image4, 22)) : null;
            $request->hasFile('image5') ? $request->file('image5')->move(public_path('/uploads/blog/article'), substr($ar->image5, 22)) : null;

            $ar->save();
            //$newar = Article::Create($ar->toArray());
            DB::commit();
            if ($request->has('tag')) {
                $tags = $request->input('tag');
                DB::table('tag')->where('article', $ar->id)->delete();
                if ($ar->id !== null) {
                    foreach ($tags as $tag) {
                        DB::insert('insert into tag (name, article) values (?, ?)', [$tag, $ar->id]);
                        ;
                        //Tag::Create(["article" => $ar->id, "name" => $tag, "product"=>null]);
                    }
                }
            }

            return redirect('/admin/blog/article')->with('success', "Product successfully Added.");
            //return response()->json("success", 200);
        } catch (Throwable $th) {
            return response()->json($th->getMessage(), 513);
            //return back()->withErrors("Echec lors de l'ajout'");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $ar = Article::find($id);
            DB::table('tag')->where('article', $id)->delete();
            $ar->image1 !== null ? $this->deleteImage($ar->image1, 'uploads/blog/article/') : null;
            $ar->image2 !== null ? $this->deleteImage($ar->image2, 'uploads/blog/article/') : null;
            $ar->image3 !== null ? $this->deleteImage($ar->image3, 'uploads/blog/article/') : null;
            $ar->image4 !== null ? $this->deleteImage($ar->image4, 'uploads/blog/article/') : null;
            $ar->image5 !== null ? $this->deleteImage($ar->image5, 'uploads/blog/article/') : null;
            $ar->cover_image !== null ? $this->deleteImage($ar->cover_image, 'uploads/blog/article/') : null;
            $ar->delete();
            DB::commit();
            return redirect('/admin/blog/article')->with('success', "Channel successfully Deleted.");
        } catch (Throwable $th) {
            return back()->withErrors("Echec lors de la surpression");
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
}
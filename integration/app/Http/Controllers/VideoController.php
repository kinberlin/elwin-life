<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Video;
use DB;
use Illuminate\Http\Request;
use Throwable;

class VideoController extends Controller
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
            $title = $request->input("title");
            $authors = $request->input("authors");
            $category = $request->input("category");
            return view('customer.blog_detail_iframev', ["authors" => $authors,"category" => $category, "title" => $title, "channel" => $channel]);
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
            $vd = new Video();
            $vd->channel = $request->input('channel');
            $vd->titre = $request->input('titre');
            $vd->authors = $request->input('authors');
            $vd->duration = $request->input('duration');
            $vd->category = $request->input('category');
            $video = $request->file('video');
            //update object bloc
            $vd->bloc1 = $request->has('bloc1') ? $request->input('bloc1') : null;
            //update object multimedia
            $vd->cover_image = $request->hasFile('cover_image') ? asset('/uploads/blog/video/' . time() . '_' . $request->file('cover_image')->getClientOriginalName()) : null;

            $filename = $video->getClientOriginalName();
            $savename = time() . '_' . $filename;
            $vd->video = asset('/videos/' . $savename);
            //move images
            $request->hasFile('cover_image') ? $request->file('cover_image')->move(public_path('/uploads/blog/video'), substr($vd->cover_image, 20)) : null;
            $video->move(public_path('/videos/'), $savename);
            //move videos
            //$filepath = $video->storeAs('videos', $savename, 'public');
            $vd->save();
            //$newvd = Article::Create($vd->toArray());
            DB::commit();
            $tags = $request->input('tag');

            if ($vd->id !== null) {
                foreach ($tags as $tag) {
                    DB::insert('insert into tag (name, video) values (?, ?)', [$tag, $vd->id]);
                    ;
                }
            }

            return redirect('/admin/blog/video')->with('success', "Product successfully Added.");
        } catch (Throwable $th) {
            return response()->json($th->getMessage(), 513);
            //return back()->withErrors("Echec lors de l'ajout'");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
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
            $video = Video::find($request->input("id"));
            $title = $request->input("titre");
            $authors = $request->input("authors");
            $category = $request->input("category");
            $tag = DB::select(
                'SELECT t.* 
                FROM tag t 
                JOIN video v 
                on v.id = t.video 
                where v.id =' . $request->input("id")
            );
            return view('customer.blog_detail_iframev_update', ["title" => $title, "category" => $category, "authors" => $authors, "channel" => $channel, "video" => $video, "tag" => $tag]);
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
            $vd = Video::find($request->input('id'));
            $vd->titre = $request->input('titre');
            $vd->channel = $request->input('channel');
            $vd->category = $request->input('category');
            //update object bloc
            $vd->titre = $request->has('titre') ? $request->titre : null;
            $vd->bloc1 = $request->has('bloc1') ? $request->input('bloc1') : null;
            //delete images
            $request->hasFile('cover_image') && $vd->cover_image !== null ? $this->deleteImage($vd->cover_image, 'uploads/blog/video/') : null;
            $request->hasFile('video') && $vd->video !== null ? $this->deleteImage($vd->video, 'videos') : null;
            //update object multimedia
            $vd->cover_image = $request->hasFile('cover_image') ? asset('/uploads/blog/video/' . time() . '_' . $request->file('cover_image')->getClientOriginalName()) : $vd->cover_image;
            if ($request->hasFile('video')) {
                $video = $request->file('video');
                $filename = $video->getClientOriginalName();
                $savename = time() . '_' . $filename;
                $video->move(public_path('/videos/'), $savename);
                $vd->duration = $request->input('duration');
                $vd->video = asset('/videos/' . $savename);
            }
            //move images
            $request->hasFile('cover_image') ? $request->file('cover_image')->move(public_path('/uploads/blog/video'), substr($vd->cover_image, 20)) : null;
            $vd->save();
            //$newar = Article::Create($ar->toArray());
            DB::commit();
            if ($request->input('tag')) {
                $tags = $request->input('tag');
                DB::table('tag')->where('video', $vd->id)->delete();
                if ($vd->id !== null) {
                    foreach ($tags as $tag) {
                        DB::insert('insert into tag (name, video) values (?, ?)', [$tag, $vd->id]);
                        ;
                        //Tag::Create(["article" => $ar->id, "name" => $tag, "product"=>null]);
                    }
                }
            }

            return redirect('/admin/blog/video')->with('success', "Video successfully Updated.");
            //return response()->json("success", 200);
        } catch (Throwable $th) {
            return back()->withErrors("Echec lors de la mise a jour'");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            DB::table('tag')->where('video', $id)->delete();
            DB::beginTransaction();
            $ar = Video::find($id);
            $ar->video !== null ? $this->deleteImage($ar->video, '/videos/') : null;
            $ar->cover_image !== null ? $this->deleteImage($ar->cover_image, 'uploads/blog/article/') : null;
            $ar->delete();
            DB::commit();
            return redirect('/admin/blog/video')->with('success', "Channel successfully Deleted.");
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
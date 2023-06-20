<?php

namespace App\Http\Controllers;

use App\Models\comments;
use DB;
use Illuminate\Http\Request;
use Throwable;

class CommentController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        //try {
            DB::beginTransaction();
            $cid = DB::select(
                'SELECT id FROM comments WHERE user= '.$request->input('user').' and video ='.$id
            );
            $id = 0;
            if($cid[0]->id != null)
            {
                $id = $cid[0]->id;
            }
            $co = Comments::find($id);
            if(!$co)
            {$co = new Comments();}
            $co->message = $request->input('message');
            $co->user = $request->input('user');
            $co->video = $id;
            $co->save();
            DB::commit();
            return back()->with('success', "Product successfully Added.");
        /*} catch (Throwable $th) {
            return response()->json($th->getMessage(), 513);
            //return back()->withErrors("Echec lors de l'ajout'");
        }*/
    }

    /**
     * Display the specified resource.
     */
    public function show(comments $comments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comments $comments)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\info;
use DB;
use Illuminate\Http\Request;
use Throwable;

class InfoController extends Controller
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
        $info = info::find(1);
        $liste = DB::select(
            'SELECT c.*, COUNT(p.product_id) "no_produit" 
        from categories c 
        left join products p 
        on c.category_id = p.category_id 
        GROUP BY c.category_id, c.name,c.description, c.createdat;'
        );
        return view('admin.pages-info', ["info" => $info,"categories" => $liste]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $newi = Info::find(1);
            $newi->phone = $request->input('phone') ===null ? $newi->phone : $request->input('phone') ;
            $newi->email = $request->input('email') ===null ? $newi->email : $request->input('email');
            $newi->name = $request->input('name') ===null ?   $newi->name : $request->input('name');
            $newi->city = $request->input('city') ===null ?   $newi->city : $request->input('city');
            $newi->address = $request->input('address') ===null ? $newi->address : $request->input('address');
            $newi->lat = $request->input('lat') ===null ?     $newi->lat : $request->input('lat') ;
            $newi->lon = $request->input('lon') ===null ?     $newi->lon : $request->input('lon') ;
            $newi->country = $request->input('country') ===null ?     $newi->country : $request->input('country') ;
            $newi->save();
            DB::commit();
            return redirect()->back()->with('error', "Info successfully updated.");
        } catch (Throwable $th) {
            return  redirect()->back()->with('error',"Echec lors de la modification <br>".$th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(info $info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, info $info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(info $info)
    {
        //
    }
}
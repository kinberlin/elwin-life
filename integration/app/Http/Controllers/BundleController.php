<?php

namespace App\Http\Controllers;

use App\Models\BundleAdvantages;
use App\Models\BundleCategory;
use App\Models\Bundles;
use DB;
use Illuminate\Http\Request;
use Throwable;

class BundleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bc = BundleCategory::all();
        $bundles =DB::select(
            'SELECT b.id, b.price, bc.name, b.duration, b.category FROM bundles b JOIN bundle_category bc on b.category = bc.id'
        );
        $avantages = BundleAdvantages::all();
        return view("admin.pages-bundles", ["bundlecat"=>$bc, "bundles"=>$bundles, "avt"=>$avantages]);
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
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $bundle = new Bundles();
            $bundle->price = $request->input('price') ;
            $bundle->category = $request->input('category') ;
            $bundle->duration = $request->input('duration') ;
            $bundle->save();
            DB::commit();
            return redirect()->back()->with('error', "Bundle successfully added.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', "Echec lors de l'ajout " . $th->getMessage());
        }
    }
    public function avtstore(Request $request)
    {
        try {
            DB::beginTransaction();
            $bundle = new BundleAdvantages;
            $bundle->name = $request->input('name') ;
            $bundle->bundle = $request->input('bundle') ;
            $bundle->save();
            DB::commit();
            return redirect()->back()->with('error', "Advantage successfully added.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', "Echec lors de l'ajout " . $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(bundles $bundles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bundles $bundles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $bundle = Bundles::find($id);
            $bundle->price = $request->input('price') ;
            $bundle->category = $request->input('category') ;
            $bundle->duration = $request->input('duration') ;
            $bundle->save();
            DB::commit();
            return redirect()->back()->with('error', "Advantage successfully Updated.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', "Echec lors de la mise a jour " . $th->getMessage());
        }
    }
    public function avtupdate(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $bundle = BundleAdvantages::find($id);
            $bundle->name = $request->input('name') ;
            $bundle->bundle = $request->input('bundle') ;
            $bundle->save();
            DB::commit();
            return redirect()->back()->with('error', "Bundle successfully Updated.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', "Echec lors de la mise a jour " . $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $bundle = Bundles::find($id);
            $bundle->delete();
            DB::commit();
            return redirect()->back()->with('error', "Bundle successfully deleted.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', "Echec lors de la suppression " . $th->getMessage());
        }
    }
    public function avtdestroy(Request $request)
    {
        try {
            DB::beginTransaction();
            $bundle = BundleAdvantages::find($request->input("id"));
            $bundle->delete();
            DB::commit();
            return redirect()->back()->with('error', "Advantage successfully deleted.");
        } catch (Throwable $th) {
            return redirect()->back()->with('error', "Echec lors de la suppression " . $th->getMessage());
        }
    }
}

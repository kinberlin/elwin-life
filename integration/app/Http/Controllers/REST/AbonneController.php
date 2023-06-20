<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\Abonne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbonneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $abonne = Abonne::all();
        return response()->json($abonne, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            DB::beginTransaction();
            $this->validate(
                $request,
                [
                    'nom' => 'required|max:50',
                    'prenom' => 'required|max:50',
                    'sexe' => 'required',
                    'profession' => 'required|max:50',
                    'rue' => 'required|max:50',
                    'code_postal' => 'required|max:50',
                    'ville' => 'required',
                    'pays' => 'required|max:50',
                    'email' => 'required|max:50',
                    'telephone' => 'required|max:50',
                    'age' => 'required',
                    'motivation' => 'required',
                ]
            );
            $abonne = Abonne::create([
                'age' => $request->age,
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'sexe' => $request->sexe,
                'profession' => $request->profession,
                'rue' => $request->rue,
                'code_postal' => $request->code_postal,
                'ville' => $request->ville,
                'pays' => $request->pays,
                'email' => $request->email,
                'motivation' => $request->motivation,
                'telephone' => $request->telephone,
            ]);
            DB::commit();

            return response()->json($abonne, 200);
        } catch (\Throwable $th) {
            return response()->json('erreur sur le serveur', 500);
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Abonne $abonne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        try {
            DB::beginTransaction();
            $this->validate(
                $request,
                [
                    'nom' => 'required|max:50',
                    'prenom' => 'required|max:50',
                    'sexe' => 'required',
                    'profession' => 'required',
                    'rue' => 'required|max:50',
                    'code_postal' => 'required|max:50',
                    'ville' => 'required',
                    'pays' => 'required',
                    'email' => 'required|max:50',
                    'telephone' => 'required|max:50',
                    'age' => 'required',
                    'motivation' => 'required',
                ]
            );
            $abonne = Abonne::find($id);
            $abonne->update($request->all());
            DB::commit();
            return response()->json($abonne, 200);
        } catch (\Throwable $th) {
            return response()->json('erreur du serveur', 500);
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try {
            DB::beginTransaction();
            $abonne = Abonne::find($id);
            $abonne->delete();
            DB::commit();
            return response()->json('suppression effectue avec success', 200);
        } catch (\Throwable $th) {
            return response()->json('erreur de suppression', 500);
            //throw $th;
        }
    }
}
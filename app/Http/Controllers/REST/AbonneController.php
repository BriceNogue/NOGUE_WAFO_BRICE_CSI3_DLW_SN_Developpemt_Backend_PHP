<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Abonne;
use Illuminate\Support\Facades\DB;

class AbonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllAbonnes()
    {
        $liste = Abonne::all();
        return view('liste_region',compact('liste'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('formulaire_abonne');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function save(Request $validated)
        {

            $query = DB::table('abonne')->insert([
                'label' => $validated->input('label')
            ]);
            return view("formulaire_abonne")->with("Abonne enregistrée avec succès !");
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            DB::beginTransaction();
            $reg = Abonne::find($id);
            DB::commit();
            return view("update_abonne", compact("abo"));
        }catch(\Throwable $th){
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            Abonne::find($request->id)->update(['label'=> $request->label]);
            DB::commit();
            return redirect("/abonne_liste");
        }catch(\Throwable $th) {
            return back($th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       try {
        DB::beginTransaction();
        Abonne::find($id) -> delete();
        DB::commit();
        return redirect("/abonne_liste");
       }catch(\Throwable $th) {
        dd($th);
        return back();
       }
    }
}

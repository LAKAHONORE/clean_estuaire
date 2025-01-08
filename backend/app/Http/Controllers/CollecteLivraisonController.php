<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CollecteLivraison;

class CollecteLivraisonController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $collecte = CollecteLivraison::findOrFail($id);
        return view("collecte.update", compact("collecte"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $validateData = $request->validate([
                "text"=> "required",
                "description"=>"required",
            ]);
    
            CollecteLivraison::findOrFail($id)->update($validateData);
    
            return redirect()->back()->with("success","Opération effectuée avec  succès !");
        }catch (\Exception $e){
            return redirect()->back()->with("error", $e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

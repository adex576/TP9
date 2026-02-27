<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annonces = Annonce::all();
        return view('annonces.index', compact('annonces'));
    }


    public function create()
    {
        return view('annonces.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'ville' => 'required|string|max:255',
            'superficie' => 'required|integer',
            'neuf' => 'required|boolean',
            'prix' => 'required|numeric',
            'type' => 'required|in:Appartement,Maison,Villa,Magasin,Terrain',
        ]);

        Annonce::create($data);

        return redirect()->route('annonces.index')->with('success', 'Annonce créée avec succès.');
    }

    public function show(Annonce $annonce)
    {
        return view('annonces.show', compact('annonce'));
    }


    public function edit(Annonce $annonce)
    {
        return view('annonces.edit', compact('annonce'));
    }


    public function update(Request $request, Annonce $annonce)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'ville' => 'required|string|max:255',
            'superficie' => 'required|integer',
            'neuf' => 'required|boolean',
            'prix' => 'required|numeric',
            'type' => 'required|in:Appartement,Maison,Villa,Magasin,Terrain',
        ]);

        $annonce->update($validatedData);

        return redirect()->route('annonces.index')->with('success', 'Annonce mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Annonce $annonce)
    {
        $annonce->delete();

        return redirect()->route('annonces.index')->with('success', 'Annonce supprimée avec succès.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('utilisateur.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('utilisateur.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
    
        // Créer un nouvel utilisateur avec les données soumises
        // $request->all() contient les données soumises par le formulaire
        // Vous devrez adapter cette partie en fonction de votre logique de création d'utilisateur
        
        // Rediriger l'utilisateur vers une page appropriée après la création de l'utilisateur
        return redirect()->route('utilisateurs.index')->with('success', 'Utilisateur créé avec succès !');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

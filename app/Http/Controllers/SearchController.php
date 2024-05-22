<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = User::query();

        // Filtrer les utilisateurs par nom, prénom, téléphone, région ou email si une recherche est effectuée
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('name', 'like', "%$searchTerm%")
                ->orWhere('prenom', 'like', "%$searchTerm%")
                ->orWhere('telephone', 'like', "%$searchTerm%")
                ->orWhere('region', 'like', "%$searchTerm%")
                ->orWhere('email', 'like', "%$searchTerm%")
                ->orWhere('adresse', 'like', "%$searchTerm%")
                ->orWhere('ville', 'like', "%$searchTerm%");
                
        }
    
        // Paginer les résultats
        $users = $query->simplePaginate(9);
    
        // Retourner la vue avec les utilisateurs paginés
        return view('search', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('search');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
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

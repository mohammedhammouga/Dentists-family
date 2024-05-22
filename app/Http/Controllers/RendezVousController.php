<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RendezVous;
use Illuminate\Support\Facades\Validator;
use Dompdf\Dompdf;
use Dompdf\Options;


class RendezVousController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rendezvous = RendezVous::all();
        return view('rendezvous');
    }
   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rendezvous.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:rendezvous',
            'telephone' => 'required|unique:rendezvous',
            'time' => 'required|date_format:H:i',
            'date' => 'required|date_format:Y-m-d',
        ]);
    
        // Si la validation échoue, retourner en arrière avec les erreurs
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        // Concaténer la date avec l'heure pour former un format datetime
        $datetime = $request->input('date') . ' ' . $request->input('time');
    
        // Enregistrer le rendez-vous dans la base de données
        $rendezvous = new RendezVous();
        $rendezvous->name = $request->input('name');
        $rendezvous->prenom = $request->input('prenom');
        $rendezvous->email = $request->input('email');
        $rendezvous->telephone = $request->input('telephone');
        $rendezvous->time = $datetime;
        $rendezvous->date = $request->input('date');
        $rendezvous->save();
    
        // Générer le contenu HTML du PDF
        $html = view('rendezvous.pdf', compact('rendezvous'))->render();
    
        // Configuration de Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
    
        // Initialiser Dompdf avec les options
        $dompdf = new Dompdf($options);
    
        // Charger le contenu HTML dans Dompdf
        $dompdf->loadHtml($html);
    
        // Rendre le PDF
        $dompdf->render();
    
        // Télécharger le PDF
        $dompdf->stream("rendezvous.pdf");
    
        // Rediriger l'utilisateur avec un message de succès
        return redirect()->route('rendezvous')->with('success', 'Rendezvous created successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rendezvous = RendezVous::findOrFail($id);
        return view('rendezvous.show', compact('rendezvous'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rendezvous = RendezVous::findOrFail($id);
        return view('rendezvous.edit', compact('rendezvous'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'lineage' => 'required',
            'email' => 'required|email|unique:rendezvous,email,' . $id,
            'phone_number' => 'required',
            'time' => 'required|date_format:H:i',
            'date' => 'required|date_format:Y-m-d',
        ]);
        $rendezvous = RendezVous::findOrFail($id);
        $rendezvous->update($validatedData);
        return redirect()->route('rendezvous.index')->with('success', 'Rendezvous updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rendezvous = RendezVous::findOrFail($id);
        $rendezvous->delete();

        // Redirect the user after deleting the rendezvous
        return redirect()->route('rendezvous.index')->with('success', 'Rendezvous deleted successfully!');
    }
}
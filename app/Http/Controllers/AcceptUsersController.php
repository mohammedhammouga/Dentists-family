<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage; 
class AcceptUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.accept-users', ['users' => $users]);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) 
    {
        $request->validate([
            'name' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'region' => 'required',
            'ville' => 'required',
            'adresse' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'profile_photo.required' => 'Le champ photo de profil est requis.',
            'profile_photo.image' => 'La photo de profil doit être une image.',
            'profile_photo.mimes' => 'La photo de profil doit être de type : jpeg, png, jpg ou gif.',
            'profile_photo.max' => 'La taille maximale de la photo de profil est de 2 Mo.',
        ]);
        if ($request->hasFile('profile_photo')) {
            $profilePhotoPath = $request->file('profile_photo')->store('profile-photos', 'public');
        } else {
            $profilePhotoPath = 'default-profile-photo.jpg'; 
        }
        $hashedPassword = Hash::make($request->password);
        User::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'telephone' => $request->telephone,
            'region' => $request->region,
            'ville' => $request->ville,
            'adresse' => $request->adresse,
            'email' => $request->email,
            'profile_photo' => $profilePhotoPath,
            'password' => $hashedPassword,
        ]); 
        return redirect()->route('accept-users.index')->with('success', 'Nouvel utilisateur ajouté avec succès');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit-user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
   /**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    $user = User::findOrFail($id);

    $request->validate([
        'name' => 'required',
        'prenom' => 'required',
        'telephone' => 'required',
        'ville' => 'required',
        'adresse' => 'required',
        'email' => 'required|email|unique:users,email,'.$id,
        'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048|nullable',
    ]);

    // Mettez à jour les données de l'utilisateur, y compris la région
    $user->update([
        'name' => $request->name,
        'prenom' => $request->prenom,
        'telephone' => $request->telephone,
        'region' => $request->region,
        'ville' => $request->ville,
        'adresse' => $request->adresse,
        'email' => $request->email,
    ]);

    // Vérifiez si une nouvelle image de profil a été téléchargée
    if ($request->hasFile('profile_photo')) {
        // Supprimez l'ancienne image de profil si elle existe
        if ($user->profile_photo) {
            // Supprimez l'ancienne image de profil du stockage
            Storage::delete('public/' . $user->profile_photo);
        }

        // Téléchargez la nouvelle image de profil
        $profilePhotoPath = $request->file('profile_photo')->store('profile-photos', 'public');

        // Mettez à jour le chemin de l'image de profil dans la base de données
        $user->update([
            'profile_photo' => $profilePhotoPath,
        ]);
    }

    return redirect()->route('accept-users.index')->with('success', 'Utilisateur modifié avec succès');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    
        return redirect()->route('accept-users.index')->with('success', 'Utilisateur supprimé avec succès');
    }
}

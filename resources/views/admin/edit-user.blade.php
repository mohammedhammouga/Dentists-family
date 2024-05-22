@extends('admin.dashboard')

@section('content') 
    <div class="container mt-4">
        <h1>Modifier Utilisateur</h1>

        <form action="{{ route('accept-users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $user->prenom }}" required>
            </div>

            <div class="mb-3">
                <label for="telephone" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $user->telephone }}" required>
            </div>

            <div class="mt-4">
                <label for="region" class="form-label">Région</label>
                <select id="region" class="form-select" name="region" >
                    <option selected disabled value="">Choisir une région</option>
                    <option value="'Chaouia-Ouardigha">Chaouia-Ouardigha</option>
                    <option value="Doukkala-Abda">Doukkala-Abda</option>
                    <option value="Fès-Boulemane">Fès-Boulemane</option>
                    <option value="Gharb-Chrarda-Beni Hssen">Gharb-Chrarda-Beni Hssen</option>
                    <option value="Grand Casablanca">Grand Casablanca</option>
                    <option value="Guelmim-Es Semara">Guelmim-Es Semara</option>
                    <option value="Laâyoune-Boujdour-Sakia el Hamra">Laâyoune-Boujdour-Sakia el Hamra</option>
                    <option value="Marrakech-Tensift-Al Haouz">Marrakech-Tensift-Al Haouz</option>
                    <option value="Meknès-Tafilalet">Meknès-Tafilalet</option>
                    <option value="LOriental">LOriental</option>
                    <option value="Oued ed Dahab-Lagouira">Oued ed Dahab-Lagouira</option>
                    <option value="Rabat-Salé-Zemmour-Zaër">Rabat-Salé-Zemmour-Zaër</option>
                    <option value="Souss-Massa-Drâa">Souss-Massa-Drâa</option>
                    <option value="Tadla-Azilal">Tadla-Azilal</option>
                    <option value="Tanger-Tétouan">Tanger-Tétouan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="profile_photo" class="form-label">Nouvelle Photo de profil</label>
                @if($user->profile_photo)
                <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="Photo de profil actuelle" style="max-width: 200px;">
            @else
            @endif
                <input type="file" class="form-control" id="profile_photo" name="profile_photo">
            </div>

            <div class="mb-3">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville" value="{{ $user->ville }}" required>
            </div>

            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $user->adresse }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirmation du mot de passe</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>

            <button type="submit" class="btn btn-primary">Modifier Utilisateur</button>
        </form>
    </div>
    <style>
        /* Custom CSS for Admin Panel */
.container {
    max-width: 500px;
    margin: auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

.form-label {
    font-weight: bold;
}

.form-control {
    margin-bottom: 15px;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    color: #fff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

/* Optional: Style for form inputs when focused */
.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

    </style>
@endsection

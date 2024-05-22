@extends('admin.dashboard')
@section('content')
<div class="admin-content">
    <h1 style="text-align:center ; margin-top: 30px">Liste des utilisateurs</h1>
    <table class="table">
        <thead>
            <tr> 
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Région</th>
                <th scope="col">Ville</th>
                <th scope="col">Adresse</th>
                <th scope="col">Email</th>
                <th scope="col">Profil</th>
                <th scope="col">Date de création</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->prenom }}</td>
                    <td>{{ $user->telephone }}</td>
                    <td>{{ $user->region }}</td>
                    <td>{{ $user->ville }}</td>
                    <td>{{ $user->adresse }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if ($user->profile_photo)
                            <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="Profile Photo"
                                class="mt-2 img-fluid rounded-circle" style="max-width: 50px;">
                        @else
                            Aucune image
                        @endif
                    </td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <form action="{{ route('accept-users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btntab"
                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Supprimer</button>
                        </form>
                        <a href="{{ route('edit-user.edit', $user->id) }}" class="btn btn-primary btntab" >Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

    <div class="container mt-4">
        <h2> Ajouter Utilisateur</h2>
        <form action="{{ route('accept-users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" required>
            </div>
            <div class="mt-4">
                <x-input-label for="region" :value="__('Région')" />
                <select id="region" class="block mt-1 w-full" name="region" required autocomplete="region">
                    <option selected value="0">Région</option>
                    <option value="'Chaouia-Ouardigha">'Chaouia-Ouardigha</option>
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
                <label for="profile_photo" class="form-label">Photo de profil</label>
                <input type="file" class="form-control" id="profile_photo" name="profile_photo" required>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville" required>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mt-4">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" class="form-control" type="password" name="password" required
                    autocomplete="new-password">
            </div>
            <div class="mt-4">
                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation"
                    required autocomplete="new-password">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter Utilisateur</button>

        </form>
    </div>
    <style>
        .btntab  {
            display: block;
        }
        .admin-content{
            width: 100%;
        }

        .container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }


        /* Style pour le titre */
        h1 {
            color: #333;
            /* Couleur du texte */
            font-size: 24px;
            /* Taille de la police */
            margin-bottom: 20px;
            /* Marge en bas */
        }

        /* Style pour les tables */
        .table {
    
    border-collapse: collapse;
   margin-left:17% ;
    width: 20% !important;

  
}


        /* Style pour l'en-tête de la table */
        
        
       
        /* Style pour le formulaire */
        .form-label {
            font-weight: bold;
            /* Police en gras */
        }

        /* Style pour le formulaire */
        .form-label {
            font-weight: bold;
            /* Police en gras */
        }

        /* Style pour les champs de formulaire */
        .form-control {
            width: 100%;
            /* Largeur du champ */
            padding: 10px;
            /* Espacement intérieur */
            margin-bottom: 15px;
            /* Marge en bas */
            border: 1px solid #ddd;
            /* Bordure */
            border-radius: 5px;
            /* Bordure arrondie */
            box-sizing: border-box;
            /* Boîte de dimension inclut le remplissage et la bordure */
        }

        /* Style pour les images */
        .img-fluid {
            max-width: 100%;
            /* Largeur maximale de l'image */
            height: auto;
            /* Hauteur automatique */
            display: block;
            /* Affichage en bloc */
            margin: 0 auto;
            /* Marge automatique */
            border-radius: 50%;
            /* Bordure arrondie */
        }

        /* Style pour les messages de confirmation */
        .confirm-message {
            color: green;
            /* Couleur du texte */
            font-weight: bold;
            /* Police en gras */
        }

        /* Style pour les messages d'erreur */
        .error-message {
            color: red;
            /* Couleur du texte */
            font-weight: bold;
            /* Police en gras */
        }
    </style>
@endsection

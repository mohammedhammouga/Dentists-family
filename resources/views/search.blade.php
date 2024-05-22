@extends('welcome')
@section('content')
    <h1 class="mb-4 text-center">Liste des dentistes</h1>
    <div class="container">
        <form action="{{ route('search.index') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control rounded-pill"
                    placeholder="Rechercher par nom, prénom, téléphone ou email" value="{{ request()->input('search') }}">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary rounded-pill">Rechercher</button>
                </div>
            </div>
        </form>
        <div class="row">
            @foreach ($users as $user)
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <img src="{{ $user->profile_photo ? asset('storage/' . $user->profile_photo) : 'placeholder.jpg' }}"
                            class="card-img-top rounded-top" alt="Photo de profil">
                        <div class="card-body">
                            <h5 class="card-title">{{ $user->name }}</h5>
                            <p class="card-text">Prénom: {{ $user->prenom }}</p>
                            <p class="card-text">Téléphone: {{ $user->telephone }}</p>
                            <p class="card-text">Région: {{ $user->region }}</p>
                            <p class="card-text">Ville: {{ $user->ville }}</p>
                            <p class="card-text">Adresse: {{ $user->adresse }}</p>
                            <p class="card-text">Email: {{ $user->email }}</p>
                            
                            <a href="{{ route('rendezvous') }}" class="btn btn-primary rounded-pill">Prenez rendez-vous</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->

        {{ $users->links() }}







    </div>

    <style>
        /* Styles pour le formulaire de recherche */
        .form-control {
            height: 60px;
            font-size: 1.2rem;
            border-radius: 30px;
            padding: 20px;
        }

        .input-group-append .btn-primary {
            height: 60px;
            font-size: 1.2rem;
            border-radius: 30px;
            padding: 15px 30px;
        }

        /* Styles pour les cartes utilisateur */
        .card {
            border-radius: 20px;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            margin-bottom: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* Styles supplémentaires */
        .container {
            margin-top: 20px;
        }

        .row {
            margin-bottom: 20px;
        }
    </style>
@endsection

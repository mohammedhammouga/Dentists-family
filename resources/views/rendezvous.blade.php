@extends('welcome')

@section('content')
    
    <div class="container">
        <h1>rendez-vous</h1>
        <form action="{{ route('rendezvous.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telephone">Numéro de téléphone:</label>
                <input type="text" class="form-control" id="telephone" name="telephone" required>
            </div>
            <div class="form-group">
                <label for="time">Heure:</label>
                <input type="time" class="form-control" id="time" name="time" required>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <button type="submit" class="btn btn-primary">Prendre rendez-vous</button>
        </form>
    </div>
    

    <style>
        



        .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="time"],
input[type="date"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Style supplémentaire pour rendre le formulaire réactif */
@media (max-width: 768px) {
    .container {
        max-width: 100%;
    }
}

    </style>
@endsection

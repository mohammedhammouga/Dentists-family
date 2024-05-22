<!DOCTYPE html>
<html>
<head>
    <title>pdf.blade.php</title>
    <style>
        /* Vos styles CSS pour le PDF */
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Rendez-vous</h1>
    <p><strong>Nom :</strong> {{ $rendezvous->name }}</p>
    <p><strong>Prénom :</strong> {{ $rendezvous->prenom }}</p>
    <p><strong>Email :</strong> {{ $rendezvous->email }}</p>
    <p><strong>Numéro de téléphone :</strong> {{ $rendezvous->telephone }}</p>
    <p><strong>Heure :</strong> {{ $rendezvous->time }}</p>
    <p><strong>Date :</strong> {{ $rendezvous->date }}</p>
</body>
</html>

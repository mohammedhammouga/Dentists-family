@extends('admin.dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
    <style>
        /* Style pour le conteneur de la carte */
        .map-container {
            width: 86%;
            height: 0;
            padding-bottom: 50%; /* Ratio 1:2 pour créer un cadre plus petit */
            position: relative;
            border-radius: 10px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            margin-right: 0%; /* Ajoute une marge en bas pour l'esthétique */
        }

        /* Style pour la carte à l'intérieur du conteneur */
        #map {
            position: absolute;
            top: 0;
            left: 0;
            width:100%;
            height: 100%;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="map-container position-absolute end-0">
        <div id="map"></div> <!-- Set the map size to fit the container -->
    </div>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Initialize the map
        var map = L.map('map').setView([31.7917, -7.0926], 6); // Set initial position and zoom level for Morocco

        // Add base layer (OpenStreetMap)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Optionally, you can add markers or other map elements here
    </script>
</body>
</html>
@endsection
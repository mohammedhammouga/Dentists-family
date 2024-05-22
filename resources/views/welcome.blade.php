<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
    <link href="/path/to/bootstrap-icons.css" rel="stylesheet">
    <style>
        * {
            color: rgb(0, 0, 0) !important;
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        .logo {
            width: 200px;
            height: 150px;
            margin-right: 200px !important;


        }

        .nav-item:hover {
            text-decoration: underline;
            color: white;
            font-size: 23px;
        }

        .nav-item {
            transition: all 0.1ms;
            margin: 0% 20px;

        }

        .hader {
            height: 15vh;
            background-color: rgba(115, 196, 228, 0.797) !important;
            font-size: 20px;


        }

        /* Styles spécifiques au pied de page */
        .footer-Home {
            background-color: rgba(115, 196, 228, 0.797);
            width: 100%;
            height: 20vh;
            padding-bottom: 2%;

        }

        .footer-Home ul {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            height: 80%;
            /* width: 90%; */
            margin: auto;

        }

        .footer-Home ul li {
            list-style-type: none;
            display: flex;
            align-items: center;



        }

        .footer-Home ul li a {
            color: rgba(255, 255, 255, 0.87);
            font-size: 25px;
            text-decoration: none;
            margin-left: 5px;


        }

        .footer-Home ul li a:hover {
            text-decoration: underline;
            color: white;
        }

        .footer-Home h2 {
            text-align: center;
            color: white;
        }

        .icon-footer {
            width: 50px;
            height: 50px;

        }

        .tophome {
            height: 5vh;
            width: 100%;

        }

        .tophome ul {
            display: flex;

        }
    </style>
</head>

<body class="antialiased">
   
    <nav class="navbar navbar-expand-lg hader">
        <div class="container-fluid">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="">
                <img src="images/logona.png" alt="Image" class="logo">
            </a>
            <!-- Bouton de basculement pour les petits écrans -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Liens de navigation -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    @auth
                        <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a></li>
                    @else
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                        @if (Route::has('register'))
                            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Sin up</a></li>
                        @endif
                    @endauth
                    <li class="nav-item"><a href="{{ route('contact.create') }}" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="{{ route('home.index') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('search.index') }}" class="nav-link">Search</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section >
        @yield('content')
    </section>
    
    <br>



    <!-- Liens du pied de page -->
    <footer>
    <div class="footer-Home ">

        <div class="container col-8 py-3">
            <ul>

                @auth
                    <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                @else
                    <li><img src="images/loginf.png" class="icon-footer" alt=""><a
                            href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                        <li><img src="images/signupf.png" class="icon-footer" alt=""><a
                                href="{{ route('register') }}">Sin up</a></li>
                    @endif
                @endauth

                <li><img src="images/contactf.png" class="icon-footer" alt=""><a
                        href="{{ route('contact.create') }}">Contact</a></li>
                <li><img src="images/homef.png" class="icon-footer" alt=""><a
                        href="{{ route('home.index') }}">Home</a></li>
                <li><img src="images/searchf.png" class="icon-footer" alt=""><a
                        href="{{ route('search.index') }}">search</a></li>

            </ul>
            <h2 style="font-size: 15px; margin-top:30px"> <b>BY MED-HMG</b> &copy; 2024</h2>
        </div>
    </div>
</footer>


    <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
    <link href="/css/adminpanel.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Admin Panel</title>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <img src="images/admin.gif" alt="">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashadmin') }}"><img src="images/dashboard.png" alt="Dashboard"> Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/accept-users') }}"><img src="images/user.gif" alt="Users">Users</a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/message') }}"><img src="images/message.gif" alt="Messages">Messages</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('map.index') }}"><img src="images/map.gif" alt="Map">Map</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.events.index') }}"><img src="images/calendar.gif"
                        alt="calendar">calendar</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/notifications') }}"><img src="images/notification.gif"
                        alt="Notifications">Notifications</i></a>
            </li>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
    
                <button type="submit" >
                    {{ __('Log Out') }}
                </button>
            </form>



        </ul>
    </div>


    <!-- Content -->
    <div class="content">
        @yield('content')
    </div>

    <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>

    <style>
        .sidebar {
            width: 200px;
        }
    </style>

</body>

</html>

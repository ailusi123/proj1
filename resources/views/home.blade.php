<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="navbar navbar-expand-Ig navbar-dark bg-primary text-white">
        <div class="container">
            LUSSY SULISTIA
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" aria-label="toggle navigation" aria-controls="Navbar" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mynavbar">
                <div class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ url('/profil') }}" class="nav-link {{ Request::segment(1)=='profil'?'active':'' }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a href="project" class="nav-link {{ Request::segment(1)=='project'?'active':'' }}">Project</a>
                    </li>
                    <li class="nav-item">
                        <a href="user/logout" class="nav-link">Keluar</a>
                    </li>
                </div>
            </div>
        </div>
    </div>
        <div class="container mt-4">
            @yield('content')
        </div>
    </body>
</html>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
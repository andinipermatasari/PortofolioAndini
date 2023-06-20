<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project Portofolio</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="navbar navbar-expand-lg navbar-dark bg-primary text-white">
        <div class="container-fluid">
            Andini Permatasari
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" aria-controls="mynavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="profil" class="nav-link {{ Request::segment(1)=='profil'?'active':'' }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a href="portofolio" class="nav-link {{ Request::segment(1)=='portofolio'?'active':'' }}">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact" class="nav-link {{ Request::segment(1)=='contact'?'active':'' }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="user/logout" class="nav-link">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>
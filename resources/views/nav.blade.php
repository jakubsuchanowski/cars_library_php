<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka samochodów</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div fragment="navbar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('cars.list')}}">Biblioteka samochodów</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{route('cars.list')}}">Lista samochodów</a></li>
                </ul>
            </div>
            <div class="navbar-right">
                <ul class="navbar-nav">
                    <li><a href="{{route('cars.form')}}" class="btn btn-primary">Dodaj nowy</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<main>
    @yield('content')
</main>
</body>
</html>


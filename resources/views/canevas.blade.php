<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
        <h1>Série - Manga</h1>
    </header>
    <nav id="nav">
        <a href="/">Accueil</a>
        <a href="/serie/create">Nouvelle série</a>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        Auteur : Vervondel Thomas
    </footer>
</body>
</html>
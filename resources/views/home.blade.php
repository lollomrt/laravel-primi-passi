<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>
    <body>
        <header>
            <h1>prima esperienza laravel</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('Home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About us</a></li>
                    <li><a href="{{ route('contattaci') }}">Contattaci</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1>Hello World</h1>
            <p>Nome: {{ $data['nome'] }}</p>
            <p>Cognome: {{ $data['cognome'] }}</p>
            <p>Professione: {{ $data['professione'] }}</p>
            <p>Livello: {{ $data['livello'] }}</p>
        </main>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- SASS -->
    <link rel="stylesheet" href="css/app.css">
    <!-- JS -->
    <script src="js/app.js"></script>
</head>
<body>
    {{-- - pagamenti: in cui verranno listati tutti i pagamenti stampati con due colori diversi un colore per riga (come visto a lezione verde/rosso)
    - pagamentipending: in cui verranno listati con la stessa grafica precedente i soli pagamenti pending --}}
    
    <div class="container">
        @include('components.header')

        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
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

{{-- generare 3 rotte separate:
- home
- blog
- about
La struttura generale (header, footer, ecc) resta invariata per ogni pagina, cambia solo il contenuto che riportera' il solo titolo della pagina.--}}
    
    
    @include('components.header')
    

    <div class="content">

        @yield('contenuto')

    </div>

    @include('components.footer')

</body>
</html>
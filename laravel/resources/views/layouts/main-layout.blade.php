<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

{{-- sulla falsa riga della struttura vista a lezione (components, layouts, pages) generare 3 rotte separate:
- home
- blog
- about
La struttura generale (header, footer, ecc) resta invariata per ogni pagina, cambia solo il contenuto che riportera' il solo titolo della pagina.
Es:
Home:
header-comune
<h1>HOME</h1>
footer-comune --}}
    
    <header>
        HEADER
    </header>

    <div class="content">

        @yield('contenuto')

    </div>

    <footer>
        FOOTER
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Anne Noteboom</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="icon" type="image/png" href="/img/favicon.png" />
    </head>
    <body>

        <header>
            <div class="container">
                <a href="/" class="logo">
                    <img src="/img/logo.svg" alt="Logo Anne Noteboom">
                </a>
                <nav>
                    <a href="/about">Over mij</a>
                    <a href="/services">Diensten</a>
                    <a href="/projects">Projecten</a>
                    <a href="/contact" class="button">Contact</a>
                </nav>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </header>

        @yield('content')

        <footer>
            <div class="container">
                <div class='part-3'>
                    <div class="logo">
                        <img src="/img/logo.svg" alt="Logo Anne Noteboom">
                    </div>
                </div>
                <div class='part-5'>
                    <div class="container">
                        <div class="part-6">
                            <p><b>Pagina's</b></p>
                        </div>
                        <div class="part-6">
                            <p><b>Documenten</b></p>
                            <a href="/privacy">Privacy verklaring</a>
                            <a href="/cookies">Cookies</a>
                        </div>
                    </div>
                </div>
                <div class='part-3 right-content'>
                    <p><b>Contact</b></p>
                    <a href="mailto:info@annenoteboom.nl">info@annenoteboom.nl</a>
                </div>
            </div>
        </footer>
        
    </body>
</html>

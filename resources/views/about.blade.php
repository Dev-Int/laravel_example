<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About us | Hello City</title>
    </head>
    <body>
        <p>Built with &hearts; by Dev-Int.</p>
        <p><a href="/">Revenir à l'accueil</a></p>

        <footer>
            <p>&copy; Copyright {{ date('Y') }} &middot; <a href="/about-us">About us</a></p>
        </footer>
    </body>
</html>

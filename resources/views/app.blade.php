<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minha Aplicação</title>
    @vite(['resources/js/app.js']) <!-- Certifique-se que o Vite está configurado -->
    @inertiaHead
</head>
<body>
    @inertia
</body>
</html>

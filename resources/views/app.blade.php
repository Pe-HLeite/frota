<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/js/app.js', 'resources/css/app.css')
    @inertiaHead
    <!-- <link href="resource/css/app.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body style="height: 100vh; margin: 0;">
    @inertia
  </body>
</html>
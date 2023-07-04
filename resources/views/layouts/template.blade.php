<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <main>
        <div class="container py-4">
            @yield('content')
            <footer class="pt-3 mt-4 text-muted border-top">
                Códigos de porgramación
            </footer>
        </div>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DAPA</title>
    <script src='https://cdn.tailwindcss.com'></script>
</head>
<body>
    <x-header.header-in/>
    </header>
    <main class="min-h-screen">
        @yield('content')
    </main>
    <x-footer/>
</body>
</html>
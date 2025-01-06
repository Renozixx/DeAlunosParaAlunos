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
    <header className='header-container w-full h-14 md:h-20 block md:inline-flex shadow-sm'>
        <nav className='hidden md:inline-flex list-none'>
            <div className=' ml-7 mr-12 content-center text-2xl'>
              <a href="/">{{--<img src="png-logo_principal.png" className="logo" alt="logo" />--}}Home</a>
            </div>
            <hr />
            <div className='content-center w-full flex'>
              <ul className='header-links inline-flex gap-14 ml-7 mr-12 text-2xl'>
                <li><a href="/userpage">User Page</a></li>
              </ul>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
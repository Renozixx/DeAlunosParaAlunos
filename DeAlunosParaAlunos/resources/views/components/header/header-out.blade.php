<header class="bg-gray-800 text-white p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">Meu Aplicativo</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="{{ route('login') }}" class="hover:text-blue-400">Login</a></li>
                <li><a href="{{ route('register') }}" class="hover:text-blue-400">Registrar</a></li>
                <li><a href="" class="hover:text-blue-400">Política de Privacidade</a></li>
            </ul>
        </nav>
    </div>
</header>
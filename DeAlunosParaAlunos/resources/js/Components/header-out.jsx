export default function HeaderOut() {
    return (
        <div>
            <header className="bg-gray-800 text-white p-4 shadow-md">
                <div className="container mx-auto flex justify-between items-center">
                    <h1 className="text-2xl font-bold">Meu Aplicativo</h1>
                    <nav>
                        <ul className="flex space-x-4">
                            <li><a href="/login" className="hover:text-blue-400">Login</a></li>
                            <li><a href="/register" className="hover:text-blue-400">Registrar</a></li>
                            <li><a href="#" className="hover:text-blue-400">Política de Privacidade</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>
    )
}
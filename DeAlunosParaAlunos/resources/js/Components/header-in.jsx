export default function HeaderIn() {
    return (
        <div>
            <header className="bg-gray-800 text-white p-4 shadow-md">
                <div className="container mx-auto flex justify-between items-center">
                    <h1 className="text-2xl font-bold">Meu Aplicativo</h1>
                    <nav>
                        <ul className="flex space-x-4">
                            <li><a href="/profile" className="hover:text-blue-400">Perfil</a></li>
                            <li><a href="/" className="hover:text-blue-400">Home</a></li>
                            <li><a href="/logout" className="hover:text-blue-400">Sair</a></li>
                            <li><a href="#" className="hover:text-blue-400">Política de Privacidade</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>
    )
}
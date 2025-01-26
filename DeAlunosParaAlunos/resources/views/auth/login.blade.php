@extends('auth.layout')

@section('content')
    <div class="form-section w-full h-full flex justify-center items-center">
        <div class="form-container lg:w-1/3 mx-5 rounded-lg py-2 px-5  bg-zinc-600/75 text-white text-xl">
            <form action="" class="h-full" method="POST">
                <div class="form-body">
                    <div class="w-full justify-center items-center flex my-10">
                        <h3>Login</h3>
                    </div>
                    <div class="form-part w-full flex flex-col gap-y-2">
                        <label for="email">E-mail</label>
                        <input
                        class="py-2 px-5 rounded-md"
                        type="text" name='email'>
                    </div>
                    <div class="form-part mt-5 w-full flex flex-col gap-y-2">
                        <label for="email">Senha</label>
                        <input
                        class="py-2 px-5 rounded-md" type="password" name='password'>
                    </div>
                </div>
                <div class="lg:mt-20 my-3">
                    <div class="form-bottom w-full flex justify-between items-center my-5">
                        <div>
                            <span><button>Redefinir senha</button></span>
                        </div>
                        <div>
                            <input type="submit" value="Logar" class="py-2 px-5 rounded-md bg-blue-600/75"><br>
                        </div>
                    </div>
                    <div class="w-full flex justify-center">
                        <span>Ainda não possui login? <a href="./register">Registre-se</a></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
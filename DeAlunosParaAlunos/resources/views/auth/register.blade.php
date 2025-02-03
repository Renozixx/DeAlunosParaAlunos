@extends('auth.layout')

@section('content')
<div class="form-section w-full h-full flex justify-center items-center">
    <div class="form-container lg:w-1/3 mx-5 rounded-lg py-2 px-5 shadow-sm shadow-slate-400 bg-zinc-600/75 text-white text-xl">
        <form action="{{route('register.post')}}" class="h-full" method="POST">
            @csrf
            <div class="form-body">
                <div class="w-full justify-center items-center flex">
                    <img class="w-1/2" src="{{ asset('img/DAPA.png') }}" alt="">
                </div>
                <div class="form-part w-full flex flex-col gap-y-2">
                    <label for="email">Nome</label>
                    <input
                    class="py-1 px-3 rounded-md shadow-inner shadow-gray-600"
                    type="text" name='name'>
                </div>
                <div class="form-part w-full mt-3 flex flex-col gap-y-2">
                    <label for="email">E-mail</label>
                    <input
                    class="py-1 px-3 rounded-md shadow-inner shadow-gray-600"
                    type="text" name='email'>
                </div>
                <div class="form-part mt-3 w-full flex flex-col gap-y-2">
                    <label for="email">Senha</label>
                    <input
                    class="py-1 px-3 rounded-md shadow-inner shadow-gray-600" 
                    type="password" name='password'>
                </div>
                <div class="form-part mt-3 w-full flex flex-col gap-y-2">
                    <label for="email">Confirme sua Senha</label>
                    <input
                    class="py-1 px-3 rounded-md shadow-inner shadow-gray-600" 
                    type="password" name='c_password'>
                </div>
            </div>
            <input type="checkbox" name="termos"><label class="text-sm">Ao confirmar essa checkbox, eu aceito os
                termos e condições da <a href='./privace' class="text-blue-400">Politica de privacidade</a> proposta pela equipe do DAPA
            </label>
            <div class="lg:mt-4 my-3">
                <div class="form-bottom w-full flex justify-between items-center my-5">
                    <div>
                        <a href="./login" class=" text-blue-400">Logar</a>
                    </div>
                    <div>
                        <input type="submit" value="Registrar" class="py-2 px-5 rounded-md bg-blue-600/75"><br>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
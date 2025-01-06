@extends('layout.authmain')

@section('content')
    <div class="form-section w-1/3">
        <div class="form-container">
            <form action="" method="POST">
                <div class="form-body">
                    <h3>Login</h3>
                    <div class="form-part">
                        <label for="email">E-mail</label>
                        <input type="text" name='email'>
                    </div>
                    <div class="form-part">
                        <label for="email">Senha</label>
                        <input type="password" name='password'>
                    </div>
                </div>
                <div class="form-bottom">
                    <input type="submit" value="Logar"><br>
                    <span>Ainda não possui login? <a href="./register">Registre-se</a></span>
                </div>
            </form>
        </div>
    </div>
@endsection
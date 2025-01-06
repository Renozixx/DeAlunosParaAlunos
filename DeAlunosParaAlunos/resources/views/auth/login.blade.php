@extends('auth.layout')

@section('content')
<div>
    <div>
        <form class="md:w-1/3" method="POST" action="{{ route('login.post') }}">
            @csrf
            @isset($message)
                {{ $message }}
            @endisset
            @isset($email)
                {{ $email }}
            @endisset
            @isset($pass)
                {{ $pass }}
            @endisset
            <h2>Login</h2>
            <div class='styles-forms'>
                <input class='text-black' type="text" name='email'/>
                <input class='text-black' type="password" name='password'/>
                <input class="form-submit" type="submit" value="Submit" />
            </div>
        </form>
    </div>
</div>
@endsection
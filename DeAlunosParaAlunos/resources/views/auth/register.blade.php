@extends('auth.layout')

@section('content')
<div>
    <div>
        <form class="md:w-1/3" method="POST" action="{{ route('register.post') }}">
            @csrf
            <h2>Registro</h2>
            <div class='styles-forms'>
                <input class='text-black' type="text" name='name' placeholder='name'/>
                <input class='text-black' type="text" name='email' placeholder='email'/>
                <input class='text-black' type="password" placeholder='Password'/>
                <input class="form-submit" type="submit" value="Submit" />
            </div>
        </form>
    </div>
</div>
@endsection
@extends('layout')

@section('title', 'Gates - Signup')

@section('content')

Signup
<form method="POST" action="{{ route('signup') }}">
    @csrf

    <div>
        <label for="name">Name</label>

        <div>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

            @error('name')
            <span>
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div>
        <label for="email">Email</label>

        <div>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>

            @error('email')
            <span>
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div>
        <label for="password">Password</label>

        <div>
            <input id="password" type="password" name="password" required>

            @error('password')
            <span>
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div>
        <label for="password_confirmation">Confirm Password</label>

        <div>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>
    </div>

    <div>
        <div>
            <button type="submit">
                Register
            </button>
        </div>
    </div>
</form>


@endsection
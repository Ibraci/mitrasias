@extends('layouts.app')

@section('content')
    <span class="card-title">Sign In</span>
    <div class="row">
        <form class="col s12" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus>
                <label for="email">Email</label>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" name="password" type="password" class="validate">
                <label for="password">Password</label>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col s12">
                <input id="checkbox" name="checkbox" type="checkbox" class="validate" {{ old('remember') ? 'checked' : '' }}>
                <label for="checkbox">Remember Me</label>
            </div>

            <div class="col s12 right-align m-t-sm">
                <button class="waves-effect waves-light btn teal" name="sign_in" type="submit">sign in</button>
            </div>

            <div class="col s12 left-align m-t-sm">
                <a class="" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            </div>
        </form>
    </div>
@endsection

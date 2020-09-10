@extends('layouts.layout_login')

@section('content_login')
        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
           @csrf
            <span class="login100-form-title p-b-43">
                <img src='assets_login/images/output-onlinepngtools.png' width="120" >
            </span>
            <span class="login100-form-title p-b-43">
                Faça login para continuar
            </span>
            
            
            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <span class="focus-input100"></span>
                <span class="label-input100">Email</span>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            
            <div class="wrap-input100 validate-input" data-validate="Password is required">
                <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" id="password">
                <span class="focus-input100"></span>
                <span class="label-input100">Senha</span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="flex-sb-m w-full p-t-3 p-b-32">
                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="label-checkbox100" for="remember">
                        Lembre-me
                    </label>
                </div>

                <div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="txt1">
                        Esqueceu a senha?
                    </a>
                @endif
                </div>
            </div>
    

            <div class="container-login100-form-btn">
                <button class="login100-form-btn" type="submit">
                    Login
                </button>
            </div>
        </form>
@endsection

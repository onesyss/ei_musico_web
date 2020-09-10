@extends('layouts.layout_login')

@section('content_login')
    <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
      @csrf
        <span class="login100-form-title p-b-43">
            <img src='assets_login/images/output-onlinepngtools.png' width="120" >
        </span>
        <span class="login100-form-title p-b-43">
            Registro
        </span>
            
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input id="name" class="input100 @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
            <span class="focus-input100"></span>
            <span class="label-input100">Nome</span>            
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        
        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input id="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            <span class="focus-input100"></span>
            <span class="label-input100">Email</span>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password">
            <span class="focus-input100"></span>
            <span class="label-input100">Senha</span>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input id="password-confirm" class="input100" type="password" name="password_confirmation" required autocomplete="new-password">
            <span class="focus-input100"></span>
            <span class="label-input100">Confirmar senha</span>
        </div>


        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn" >
               Registrar
            </button>
        </div>
    </form>
@endsection

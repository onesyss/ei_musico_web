@extends('layouts.layout_login')

@section('content_login')
    <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
      @csrf
        <span class="login100-form-title p-b-43">
            <img src="{{ asset('assets_login/images/output-onlinepngtools.png') }}" width="120" >
        </span>
        <span class="login100-form-title p-b-43">
            Resetar senha
        </span>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input id="email" class="input100 @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <span class="focus-input100"></span>
            <span class="label-input100">Email</span>            
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn" >
               Enviar link de alteração de senha
            </button>
        </div>
    </form>
@endsection
@extends('layouts.app')



@section('content')


<section class="vh-100">


    <div class="container py-5 h-100">

        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-8 col-lg-7 d-none d-md-block h-100">
                            <img src=" {{ asset('/assets/img/cactus.png') }}" alt="login form" class="img-fluid h-100"
                                style="border-radius: 1rem 0 0 1rem;" />
                        </div>

                        <div class="col-md-4  align-items-center w-100">
                            <div class="card">
                                <div class="card-header">
                                    <h2
                                        style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color :white">
                                    </h2>
                                </div>

                                <div id="formulario" class="card-body p-4 p-lg-5 text-black w-100">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="row mb-2">
                                            <div class="col-md-12">

                                                <input id="email" type="email" placeholder="Id Usuario"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required
                                                    autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{
                                                __('Password') }}</label> --}}

                                            <div class="col-md-12">
                                                <input id="password" placeholder="Contraseña" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-md-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Recordarme') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-warning w-100"
                                                    style="color: white">
                                                    {{ __('Enrar') }}
                                                </button>

                                                {{-- @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                                @endif --}}
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>


                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p> IasaSoft, Todos los Derechos Reservados </p>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>
@endsection
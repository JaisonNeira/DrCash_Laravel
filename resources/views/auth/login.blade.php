@extends('layouts.app')

@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <figure>
                    <div class="capa">
                        <img src="img/slide.png" class="d-block colorimg" height="auto" width="100%" alt="...">
                        <div class="textol  d-md-block">
                            <h1>Inicio</h1>
                        </div>
                </figure>
                <div class="carousel-caption d-none d-md-block alr">
                    <a href="{{ route('inicio') }}" type="buttom" class="btn btn-primary"><i class="fa-solid fa-chevron-left"></i> Atrás</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card border-225">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Usuario') }}</label>

                                <div class="col-md-7">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                                <div class="col-md-7">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="carousel-tp d-none d-md-block">

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ingresar') }} <i class="fa-solid fa-chevron-right"></i>
                                </button>

                            </div>


                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>



    <div class="row mb-0">
        <div class="col-md-4 offset-md-4" style="display: flex;">

            @if (Route::has('password.request'))
                <div class="col-md-6">
                    <a class="btn btn-link" href="{{ route('register') }}">
                        {{ __('Registrarse') }}</a>

                </div>

                <div class="col-md-6">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Olvide mi contraseña') }}</a>
                        
                </div>
            @endif
        </div>
    </div>

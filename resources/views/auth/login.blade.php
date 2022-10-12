@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex">
                    <a href="{{ route('inicio') }}" type="buttom" class="btn btn-outline-primary"><i class="fa-solid fa-lock"
                            style="width: 1.04rem;"> </i>Atras</a>
                </form>
            </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slide.jpg" class="d-block w-100 colorimg" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Diagnostico financiero</h1>
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

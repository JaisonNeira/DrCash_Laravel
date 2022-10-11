@extends('layouts.app')

@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slide.jpg" class="d-block colorimg" height="auto" width="100%" alt="...">
                <div class="texto2 d-md-block">
                    <h1>Registro</h1>
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <a href="{{ route('login') }}" type="buttom" class="btn btn-primary"><i class="fa-solid fa-chevron-left"></i> Atrás</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mfr">
        <form method="POST" action="{{ url('registro') }}">
            @csrf
            <div class="row">
                <div class="col">

                        <label for="validationCustom01" class="form-label">Primer Nombre <b style="color: #000000">*</b></label>
                        <input type="text" class="form-control" id="validationCustom01" required name="USE_PRIMER_NOMBRE">
                        <div class="invalid-feedback">
                            campo obligatorio
                          </div>
                          <br>

                          <label for="validationCustom04" class="form-label">Tipo de Identificaccion <b style="color: #000000">*</b></label>
                          <select class="form-select" id="validationCustom04" required name="USE_TIPO_DOCUMENTO">
                            <option selected disabled value="">Seleccionar tipo</option>
                            <option value="CC">CC - Cedula de Ciuadania</option>
                          </select>
                          <div class="invalid-feedback">
                            Please select a valid state.
                          </div>
                          <br>

                          <label for="validationCustom04" class="form-label">Departamento <b style="color: #000000">*</b></label>
                          <select class="form-select" id="validationCustom04" required name="USE_DEPARTAMENTO">
                            <option selected disabled value="">Seleccionar tipo</option>
                            <option value="Atlantico">Atlantico</option>
                          </select>
                          <div class="invalid-feedback">
                            Please select a valid state.
                          </div>

                </div>

                <div class="col">

                        <label for="validationCustom01" class="form-label">Segundo Nombre</label>
                        <input type="text" class="form-control" id="validationCustom01" name="USE_SEGUNDO_NOMBRE">
                        <br>

                        <label for="validationCustom01" class="form-label">Numero de Identificaccion <b style="color: #000000">*</b></label>
                        <input type="text" class="form-control" id="validationCustom01" required name="USE_NUMERO_IDENTIFICACCION">
                        <div class="invalid-feedback">
                            campo obligatorio
                          </div>
                        <br>

                        <label for="validationCustom04" class="form-label">Municipio <b style="color: #000000">*</b></label>
                          <select class="form-select" id="validationCustom04" required name="USE_MUNICIPIO">
                            <option selected disabled value="">Seleccionar tipo</option>
                            <option value="Galapa">Galapa</option>
                          </select>
                          <div class="invalid-feedback">
                            campo obligatorio
                          </div>

                </div>

                <div class="col">

                        <label for="validationCustom01" class="form-label">Primer Apellido <b style="color: #000000">*</b></label>
                        <input type="text" class="form-control" id="validationCustom01"  required name="USE_PRIMER_APELLIDO">
                        <div class="invalid-feedback">
                            campo obligatorio
                          </div>

                        <br>

                        <label for="validationCustom01" class="form-label">Fecha de Nacimiento </label>
                        <input type="date" class="form-control" id="validationCustom01" name="USE_FECHA_NACIMIENTO">
                        <br>

                        <label for="validationCustom04" class="form-label">Tipo de zona</label>
                          <select class="form-select" id="validationCustom04" name="USE_TIPO_ZONA">
                            <option selected disabled value="">Seleccionar tipo</option>
                            <option value="Rural">Rural</option>
                          </select>


                </div>

                <div class="col">

                        <label for="validationCustom01" class="form-label">Segundo Apellido</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="USE_SEGUNDO_APELLIDO">
                        <br>

                        <label for="validationCustom04" class="form-label">Genero <b style="color: #010000">*</b></label>
                          <select class="form-select" id="validationCustom04" required name="USE_GENERO">
                            <option selected disabled value="">Seleccionar Genero</option>
                            <option value="Masculino">Masculino</option>
                          </select>
                          <div class="invalid-feedback">
                            Please select a valid state.
                          </div>
                        <br>

                        <label for="validationCustom04" class="form-label">Estado Civil</b></label>
                          <select class="form-select" id="validationCustom04" name="USE_ESTADO_CIVIL">
                            <option selected disabled value="">Seleccionar tipo</option>
                            <option value="Soltero">Soltero</option>
                          </select>

                </div>
            </div>
            <br>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Guardar y continuar" >
            </div>

        </form>
    </div>



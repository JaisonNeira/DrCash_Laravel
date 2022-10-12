@extends('layouts.main')

@section('contenido')
    <h1>Buscar</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Identificacion</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Identificacion</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>524515717</td>
                            <td>Ruby</td>
                            <td>Marzola</td>
                            <td></td>
                            <td>Femenino</td>
                            <td>
                                <a href="#" class="btn btn-success btn-circle" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Informacion de usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table" id="tables">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Salud</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">01</th>
                                <td>14/19/2022</td>
                                <td>Grave</td>
                                <td>
                                    <a href="#" class="btn btn-success btn-circle" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><i class="fas fa-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>


    <script>
        var dataTable = new dataTable('#tables')
    </script>
@endsection

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
                                <a href="#" class="btn btn-success btn-circle"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection

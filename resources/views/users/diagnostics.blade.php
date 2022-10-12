@extends('layouts.main')

@section('contenido')
<div class="row" style="Display: flex">
    <div class="col-md-10">
        <h1>Diagnosticos</h1>
    </div>
    <div class="col-md-2">

        <a href="{{ route('register') }}" type="buttom" class="btn btn-outline-primary"><i class="fas fa-plus"></i> Nuevo</a>
    </div>
</div>


    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Fecha</th>
                            <th>Salud</th>
                            <th>Gastos</th>
                            <th>Ahorro</th>
                            <th>Inversion</th>
                            <th>Educacion</th>
                            <th>Diversion</th>
                            <th>Donacion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>14/10/2022</td>
                            <td>Grave</td>
                            <td>40%</td>
                            <td>30%</td>
                            <td>0%</td>
                            <td>20%</td>
                            <td>12%</td>
                            <td>16%</td>
                            <td>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

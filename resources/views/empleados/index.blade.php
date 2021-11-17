@extends('layouts.plantillabaseClientes')
@extends('layouts.appClientes')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
@endsection

@section('contenido')
<table id="empleados" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="thead-dark text-black">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>

            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleados)
            <tr>
                <td>{{$empleados->id}}</td>
                <td>{{$empleados->nombre}}</td>
                <td>{{$empleados->apellido}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
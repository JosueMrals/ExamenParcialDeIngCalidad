@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
@endsection

@section('contenido')

<Form action="/clientes" method="POST">
    @csrf()

    <div class="mb-3">
        <label for="" class="form-label">Id</label>
        <input type="text" id="num_cedula" name="num_cedula" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombres</label>
        <input type="text" id="num_cedula" name="num_cedula" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input type="text" id="num_cedula" name="num_cedula" class="form-control" tabindex="4">
    </div>  
@endsection
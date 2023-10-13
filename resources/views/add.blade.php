@include('inc.header');

<form method="POST" action="{{ url('propietario/insert') }}">
    {{ csrf_field() }}
    <div class="modal-header">
        <h4 class="modal-title">Agregar Propietario</h4>
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
    </div>

    <div class="modal-body">
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Documento</label>
            <input type="text" name="documento" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Dirección</label>
            <input type="text" name="direccion" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Teléfono</label>
            <input type="text" name="telefono" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" required>
        </div>
    </div>
    <div class="modal-footer">
        <a href="{{ url('/home') }}" type="button" class="btn btn-default" data-dismiss="modal" value="cancel">Atras</a>
        <input type="submit" class="btn btn-success" value="Agregar">
    </div>
</form>

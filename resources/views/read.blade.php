<div style="margin: 50px 0">
    @include('inc.header')
</div>
{{-- <div class="container">

    <div class="card">
        <h5 class="card-header">Nombre</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $propietario->nombre }}</h5>

        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Documento</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $propietario->documento }}</h5>

        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Dirección</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $propietario->direccion }}</h5>

        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Teléfono</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $propietario->telefono }}</h5>

        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Email</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $propietario->email }}</h5>

        </div>
    </div>
    <div class="modal-footer">
        <a href="{{ url('/home') }}" type="button" class="btn btn-default" data-dismiss="modal"
            value="cancel">Atras</a>
    </div>
</div> --}}

<div style="font-family: 'Roboto', sans-serif;margin: 50px 0">
    <h2><b>ID</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $propietario->id }}</h4>
        <h4><b>Nombre</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $propietario->nombre }}</h4>
        <h4><b>Documento</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $propietario->documento }}</h4>
        <h4><b>Dirección</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $propietario->direccion }}</h4>
        <h4><b>Teléfono</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $propietario->telefono }}</h4>
        <h4><b>Email</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {{ $propietario->email }}</h4>

</div>
<div>
    <a href="{{ url('/home') }}" type="button" class="btn btn-info btn-lg float-left" data-dismiss="modal" value="cancel"
        style="width: 100%">Atras</a>
</div>

@include('inc.footer')

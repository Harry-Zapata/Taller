@include('inc.header')

@if (session('info'))
    <div class="alert alert-success">
        {{ session('info') }}
    </div>
@endif
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if (count($propietario) > 0)
            @foreach ($propietario->all() as $propietario)
            <tr>
                <td>{{ $propietario->nombre }}</td>
                <td>{{ $propietario->documento }}</td>
                <td>{{ $propietario->direccion }}</td>
                <td>{{ $propietario->telefono }}</td>
                <td>{{ $propietario->email }}</td>
                <td>
                    <a href='{{url("/read/{$propietario->id}")}}' class="material-icons read" data-toggle="tooltip" data-placement="tooltip" title="Read">&#xE86D;</a>
                    <a href='{{url("/edit/{$propietario->id}")}}' class="material-icons edit" data-toggle="tooltip" data-placement="tooltip" title="Update">&#xE254;</a>
                    <a href='{{url("/delete/{$propietario->id}")}}' class="material-icons delete" data-id="{{$propietario->id}}" data-toggle="tooltip" data-placement="tooltip" title="Delete">&#xE254;</a>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    </div>
</div>

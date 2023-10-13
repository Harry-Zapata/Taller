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
                    <td style="display: flex">
                        <a href='{{ url("/propietario/read/{$propietario->id}") }}' class="material-icons read"
                            data-toggle="tooltip" data-placement="tooltip" title="Read">&#xE86D;</a>
                        <a href='{{ url("/propietario/edit/{$propietario->id}") }}' class="material-icons edit"
                            data-toggle="tooltip" data-placement="tooltip" title="Update">&#xE254;</a>


                            <form method="POST" action="/propietario/borrar/{{$propietario->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <div class="d-inline">
                                    <button type="submit" data-id="{{ $propietario->id }}" data-toggle="tooltip" data-placement="tooltip"
                                        title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i></button>

                                </div>
                            </form>


                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
</div>
</div>

<div style="margin: 50px 0">
    @include('inc.header')
</div>

@if (session('info'))
    <div class="alert alert-success">
        {{ session('info') }}
    </div>
@endif
<table class="table table-striped table-hover" style="margin: 50px 0">
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
                        <a href='{{ url("/propietario/read/{$propietario->id}") }}' class="material-icons read"
                            data-toggle="tooltip" data-placement="tooltip" title="Read">&#xE86D;</a>
                        <a href='{{ url("/propietario/edit/{$propietario->id}") }}' class="material-icons edit"
                            data-toggle="tooltip" data-placement="tooltip" title="Update">&#xE254;</a>

                            <a href='{{ url("/propietario/borrar/{$propietario->id}") }}' data-id="{{$propietario->id}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        {{-- <a href='{{ url("/propietario/borrar/{$propietario->id}") }}' class="material-icons delete"
                            data-id="{{ $propietario->id }}" data-toggle="tooltip" data-placement="tooltip"
                            title="Delete">&#xE872;</a> --}}

                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
</div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="formDelete">
          <div class="modal-header">
            <h4 class="modal-title">Desea Eliminar Propietarios</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>

          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
            <input type="submit" class="btn btn-danger" value="Eliminar">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  {{-- <script src="/js/nombre.js"></script> --}}

  <script>
    $(document).ready(function(){

      $(".delete").click(function(){
        let id = $(this).attr('data-id');

        $("#deleteEmployeeModal").modal('show')
        $("#formDelete").attr('action', '/propietario/borrar/' + id)
      })
    })
  </script>

  @include('inc.footer')

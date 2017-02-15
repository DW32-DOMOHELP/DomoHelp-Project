@extends('layouts.app')

@section('content')

<a href="{{ route('items.create') }}" class="waves-effect waves-light btn">Añadir nuevo Dispositivo</a>
    <table class="striped centered responsive-table">
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="ip">IP</th>
              <th data-field="type">Tipo</th>
              <th data-field="description">Descripción</th>
              <th data-field="state">Estado</th>
              <th data-field="id_user">Usuario</th>
          </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item -> id_item }}</td>
                    <td>{{ $item -> ip }}</td>
                    <td>{{ $item -> type }}</td>
                    <td>{{ $item -> description }}</td>
                    <td>{{ $item -> state }}</td>
                    <td>{{ $item -> id_usuario }}</td>
                    <td>
                        <a href="{{ route('admin.items.edit', $item->id_item) }}" class="waves-effect waves-light btn"><i class="material-icons">mode_edit</i></a> 
                        <a href="{{ route('admin.items.destroy', $item->id_item) }}" onClick="return confirm('¿Seguro que quiere eliminar este dispositivo?')" class="waves-effect waves-light red darken-4 btn"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $items -> render() !!}
    
@endsection
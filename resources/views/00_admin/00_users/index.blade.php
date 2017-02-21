@extends('layouts.app')

@section('content')
    <a href="{{ route('users.create') }}" class="waves-effect waves-light btn">Registrar nuevo usuario</a>
    <table class="striped centered responsive-table">
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="name">Nombre</th>
              <th data-field="email">Correo Electrónico</th>
              <th data-field="phone">Teléfono</th>
              <th data-field="role_id">Grupo</th>
              <th data-field="action">Acción</th>
          </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user -> id_user }}</td>
                    <td>{{ $user -> name }}</td>
                    <td>{{ $user -> email }}</td>
                    <td>{{ $user -> telephone }}</td>
                    <td>
                        @if($user->group === 'admins')
                            <h5><span class="label label-success">{{ $user -> group }}</span></h5>
                        @elseif($user->group === 'clients')
                            <h5><span class="label label-primary">{{ $user -> group }}</span></h5>
                        @else
                            <h5><span class="label label-info">{{ $user -> group }}</span></h5>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user->id_user) }}" class="waves-effect waves-light btn"><i class="material-icons">mode_edit</i></a> 
                        <a href="{{ route('admin.users.destroy', $user->id_user) }}" onClick="return confirm('¿Seguro que quiere eliminar este usuario?')" class="waves-effect waves-light red darken-4 btn"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $users -> render() !!}
<a href="{{ url('/admin') }}" class="waves-effect waves-light btn">Regresar al Panel de Administración</a>       
@endsection
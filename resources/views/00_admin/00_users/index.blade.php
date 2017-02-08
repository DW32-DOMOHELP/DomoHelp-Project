@extends('layouts.app')

@section('content')
    
    <table>
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="name">Nombre</th>
              <th data-field="email">Correo Electrónico</th>
              <th data-field="phone">Teléfono</th>
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
                    <td><a href="" class="waves-effect waves-light btn">Editar</a> <a href="" class="waves-effect waves-light btn">Borrar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $users -> render() !!}
    
@endsection
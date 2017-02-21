@extends('layouts.app')

@section('content')
    
    <div>
        <h5 class="center-align">Panel de Administración</h5>
    </div>

    <table class="striped centered responsive-table">
        <tbody>
                <tr>
                    <td>Administrar Usuarios</td>
                    <td>
                        <a href="{{ url('/admin/users') }}" class="waves-effect waves-light btn"><i class="material-icons">contacts</i></a>
                    </td>
                </tr>
                <tr>
                    <td>Administrar Dispositivos</td>
                    <td>
                        <a href="{{ url('/admin/items') }}" class="waves-effect waves-light btn"><i class="material-icons">settings_input_hdmi</i></a>
                    </td>
                </tr>
        </tbody>
    </table>
    
@endsection
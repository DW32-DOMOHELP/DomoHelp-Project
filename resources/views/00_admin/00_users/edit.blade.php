@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo("Editar Usuario " .$user->name ) ?></div>
                <div class="panel-body">
                    {!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}
                    <form class="form-horizontal" role="form" method="PUT" action="{{ url('/admin/users/update') }}">
                        {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Nombre y Apellido</label>
                        <div class="col-md-7">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                                    
                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label for="address" class="col-md-2 control-label">Dirección</label>
                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control" name="address" value="{{ $user->address }}" required autofocus>
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <label for="pcod" class="col-md-1 control-label">C.P.</label>
                        <div class="col-md-2">
                            <input id="pcod" type="text" class="form-control" name="pcod" value="{{ $user->pcod }}" required autofocus>
                                @if ($errors->has('pcod'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pcod') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
            
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                                    
                    <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                        <label for="telephone" class="col-md-4 control-label">Teléfono</label>
                        <div class="col-md-6">
                            <input id="telephone" type="text" class="form-control" name="telephone" value="{{ $user->telephone }}" required autofocus>
                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="user_type" class="col-md-4 control-label">Tipo de Usuario</label>
                    <div class="input-field col-md-6">
                        <select id="user_type" class="form-control" name="user_type" required>
                            <option value="" disabled selected>Elija una opción</option>
                            <option value="1">Administrador</option>
                            <option value="2">Cliente</option>
                            <option value="3">Contacto</option>
                        </select>
                    </div>
            
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary amber darken-3">
                                Siguiente
                            </button>
                            
                            <a id="botonCancelar" class="btn red darken-3" href="{{ url('/admin/users') }}">Cancelar</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>        

@endsection
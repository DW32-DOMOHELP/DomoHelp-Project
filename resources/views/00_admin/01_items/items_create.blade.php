@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Dispositivo</div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'items.store', 'method' => 'POST']) !!}
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/items/store') }}">
                        {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('ip') ? ' has-error' : '' }}">
                        <label for="ip" class="col-md-4 control-label">IP</label>
                        <div class="col-md-8">
                            <input id="ip" type="text" class="form-control" name="ip" value="{{ old('ip') }}" required autofocus>
                            @if ($errors->has('ip'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('ip') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                                    
                    <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                        <label for="type" class="col-md-4 control-label">Nombre</label>
                        <div class="col-md-8">
                            <input id="type" type="text" class="form-control" name="type" value="{{ old('type') }}" required autofocus>
                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description" class="col-md-4 control-label">Descripción</label>
                        <div class="col-md-8">
                            <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    
                    <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                        <label for="state" class="col-md-4 control-label">Estado</label>
                        <div class="col-md-8">
                            <input id="state" type="text" class="form-control" name="state" value="OFF" required autofocus>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
            
                    <div class="form-group{{ $errors->has('userid') ? ' has-error' : '' }}">
                        <label for="id_usuario" class="col-md-4 control-label">Usuario</label>
                        <div class="col-md-6">
                            <input id="id_usuario" type="text" class="form-control" name="id_usuario" value="{{ old('id_usuario') }}" required>
                                @if ($errors->has('id_usuario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_usuario') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary amber darken-3">
                                Añadir
                            </button>
                            
                            <a id="botonCancelar" class="btn red darken-3" href="{{ url('/admin/items') }}">Cancelar</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>        

@endsection
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Dispositivo</div>
                <div class="panel-body">
                    {!! Form::open(['route' => ['items.update', $item], 'method' => 'PUT']) !!}
                    <form class="form-horizontal" role="form" method="PUT" action="{{ url('/admin/items/update') }}">
                        {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('ip') ? ' has-error' : '' }}">
                        <label for="ip" class="col-md-4 control-label">IP</label>
                        <div class="col-md-8">
                            <input id="ip" type="text" class="form-control" name="ip" value="{{ $item->ip }}" required autofocus>
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
                            <input id="type" type="text" class="form-control" name="type" value="{{ $item->type }}" required autofocus>
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
                            <input id="description" type="text" class="form-control" name="description" value="{{ $item->description }}" required autofocus>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
            
                    <div class="form-group{{ $errors->has('id_usuario') ? ' has-error' : '' }}">
                        <label for="id_usuario" class="col-md-4 control-label">Usuario</label>
                        <div class="col-md-6">
                            <input id="id_usuario" type="text" class="form-control" name="id_usuario" value="{{ $item->id_usuario }}" required>
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
                                Editar
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
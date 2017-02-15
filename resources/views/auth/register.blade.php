@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre y Apellido</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

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
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <label for="pcod" class="col-md-1 control-label">C.P.</label>

                            <div class="col-md-2">
                                <input id="pcod" type="text" class="form-control" name="pcod" value="{{ old('pcod') }}" required autofocus>

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
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                                <input id="telephone" type="text" class="form-control" name="telephone" value="{{ old('telephone') }}" required autofocus>

                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary amber darken-3">
                                    Siguiente
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer amber darken-3">
    <div class="container">
        <div class="row">
            <div class="col l6 s12 m6">
                <h5 class="white-text">Contacta con nosotros:</h5>
                <p class="grey-text text-lighten-4">Si tiene alguna duda o sugerencia, no dude en decírnoslo.</p>
                <p class="grey-text text-lighten-4">Telefono: 666 777 888</p>
                <p class="grey-text text-lighten-4">E-mail: domohelpproject@gmail.com</p>
            </div>
            <div class="col l4 offset-l2 s12 m6">
                <h5 class="white-text">Encuentranos en:</h5>
                <ul>
                    <li><a target="_blank" href="https://www.facebook.com/DomoHelp-1406899652667203/"><i class="mdi mdi-facebook-box mdi-36px"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/domo_help"><i class="mdi mdi-twitter-circle mdi-36px"></i></a></li>
                    <li><a target="_blank"href="https://plus.google.com/u/0/118116514461418291407"><i class="mdi mdi-google-plus-box mdi-36px"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright center">
        <div class="container">
            © 2016 Copyright DomoHelp
        </div>
    </div>
</footer>
@endsection

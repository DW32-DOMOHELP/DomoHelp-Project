@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Direccion e-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
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
                            <div class="col-md-6 col-md-offset-4">
                                <div>
                                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : ''}}>
                                    <label for="remember">Recuerdame</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <button type="submit" class="btn btn-primary amber darken-3">
                                    Login
                                </button>

                                <a class="btn btn-link amber darken-3" href="{{ url('/password/reset') }}">
                                    Olvidaste la contraseña?
                                </a>
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
                    <li><a target="_blank" href="https://www.facebook.com/DomoHelp-1406899652667203/"><i class="mdi mdi-facebook-box mdi-36px"></i></a>DomoHelp</li>
                    <li><a target="_blank" href="https://twitter.com/domo_help"><i class="mdi mdi-twitter-circle mdi-36px"></i></a>@domo_help</li>
                    <li><a target="_blank"href="https://plus.google.com/u/0/118116514461418291407"><i class="mdi mdi-google-plus-box mdi-36px"></i></a>Domo Help</li>
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

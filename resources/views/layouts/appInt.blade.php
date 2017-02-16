<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DomoHelp') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/interface.css" type="text/css" />
    <!--Import Google Icon Font-->
    <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <!--Import materialize.css-->
    <link rel="icon" href="/img/Logo_Oficial.png" type="image/png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/1.7.22/css/materialdesignicons.min.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    
    <!-- froga
    <link href="bower_components/mdi/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
    -->

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <!-- Scripts -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="//js.pusher.com/3.0/pusher.min.js"></script>
    <script>
        var pusher = new Pusher("{{env('PUSHER_KEY')}}");
        //subscribirse al canal
        var channel = pusher.subscribe('domohelp-channel');
        //bindearse al evento que queremos para recibir cada mensaje q se envie como ese evento
        channel.bind('actualizar-estado', function(data) {
            
            //coger el json e traducirlo a array de js
            datos=JSON.parse(data);
            if(datos["estado"]=="OFF"){
                //jquery cambiar los items
                $('#estado'+datos['id_item']).attr('value', 'OFF');
                $('#imagen'+ datos['id_item']).html('<img src="/img/Luz_Encendida.PNG">');
            }
            else{
                //jquery cambiar los items
                $('#estado'+datos['id_item']).attr('value', 'ON');
                $('#imagen'+ datos['id_item']).html('<img src="/img/Luz_Apagada.PNG">');
                 
                
            }
            
        });
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <img class="responsive-img" src="/img/Logo_Oficial_No_Text.png" width="80px" height="80px"></img>
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'DomoHelp') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}">
                                            <!--onclick="event.preventDefault();-->
                                            <!--         document.getElementById('logout-form').submit();">-->
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>


        
    </div>
   
    <div class="row">
        <div style="text-align:center" class="col s12 m12 l12"><h1>Bienvenido a tu interfaz</h1></div>
    </div>
        
        <div class="section">
            
            <!-- Hacer el codigo para cuando no haya ningun item, es decir cuando tenga el rol user-->
            @for ($i = 0; $i < count($items); $i++)
            @if ($i % 2 == 0 || $i == 0)
                <div class="row">
            @endif
            
            @if ($items[$i]->state == 'OFF')
            <div class="button col s12 m6 l6">
                <h3>{{$items[$i]->description}}</h3>
                <form id="{{$items[$i]->type}}" action="/interface/{{$items[$i]->id_usuario}}" method="POST">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <input type="hidden" name="item" value="{{$items[$i]->type}}"/>
                    <input id="estado{{$items[$i]->id_item}}" type="hidden" name="state" value="ON"/>
                    <a id="imagen{{$items[$i]->id_item}}" onClick="{{$items[$i]->type}}.submit()"><img src="/img/Luz_Apagada.PNG"></img></a>
                </form>
            </div>
            @else
            <div class="button col s12 m6 l6">
                <h3>{{$items[$i]->description}}</h3>
                <form id="{{$items[$i]->type}}" action="/interface/{{$items[$i]->id_usuario}}" method="POST">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <input type="hidden" name="item" value="{{$items[$i]->type}}"/>
                    <input id="estado{{$items[$i]->id_item}}" type="hidden" name="state" value="OFF"/>
                    <a id="imagen{{$items[$i]->id_item}}" onClick="{{$items[$i]->type}}.submit()"><img src="/img/Luz_Encendida.PNG"></img></a>
                </form>
            </div>
            @endif
            @if ($i % 2 != 0)
                </div>
            @endif
            @endfor
        </div>

    <script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
    </script>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
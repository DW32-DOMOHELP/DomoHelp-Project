  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
      <link rel="stylesheet" href="/css/style.css" type="text/css" />
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
    <script>
      //Cogemos la altura de la pantalla para darle ese height al parallax-container
      window.onload = function(){
      var pagina = document.getElementsByClassName("parallax-container");
      var alturaScreen = $(window).height();
      pagina[0].style.height = alturaScreen+"px";
      
      }
    </script>
    </head>

    <body class="grey lighten-3">
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
      <script type="text/javascript" src="/js/home.js"></script>
      
      <div id="index-banner" class="parallax-container">
        <div id="botonLogin">
            <!-- Modal Trigger -->
            <button class="waves-effect waves-light btn modal-trigger" data-target="modal1">Login</button>

            <!-- Modal Structure 
            <div id="modal1" class="modal">
              <div class="modal-content">
                  <div class="row">
                    <form class="col s12">
                      <div class="row modal-form-row">
                        <div class="input-field col s6">
                          <input id="dni" type="text" class="validate">
                          <label for="dni">DNI</label>
                        </div>
                        <div class="input-field col s6">
                          <input id="password" type="password" class="validate">
                          <label for="password">Password</label>
                        </div>
                      </div>
                    </form>
                  </div>
              </div>
              <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
              </div>
            </div>-->
        </div>
        
         <div class="parallax">
            <img class="valign-wrapper img-responsive" src="/img/Fondo.jpg"></img>
         </div>
         <img class="displayed img-responsive" src="/img/Logo_Oficial.png"></img>
         <p class="center">La vida en el hogar, mas sencilla</p>
         </br>
         </br>
         <h5 class="center">DomoHelp, es un proyecto realizado para facilitar la vida en el hogar de las personas, centrandonos en personas con movilidad reducida.</h5>
         
         
      </div>
      
      <div class="section grey lighten-3">
        
        <h3 class="center">Dispositivos que utilizamos:</h3>
          
          <div class="row">
            <div class="col l4 s12 m4">
              <div class="card horizontal small">
                <div class="card-image">
                  <img src="img/Personas.png">
                </div>
                <div class="card-stacked">
                  <div class="card-content">
                    <h5>¿Quienes somos?</h5>
                    <p>A traves de este dispositivo podremos controlar la bombilla que este conectada.</p>
                  </div>
                  <div class="card-action">
                    <a href="#">Mas Información</a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col l4 s12 m4">
              <div class="card horizontal small">
                <div class="card-image">
                  <img src="img/servicio.png">
                </div>
                <div class="card-stacked">
                  <div class="card-content">
                    <h5>¿Qué ofrecemos?</h5>
                    <p>A traves de este dispositivo podremos controlar la bombilla que este conectada.</p>
                  </div>
                  <div class="card-action">
                    <a href="#">Mas Información</a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col l4 s12 m4">
              <div class="card horizontal small">
                <div class="card-image">
                  <img src="img/tecnologias.png">
                </div>
                <div class="card-stacked">
                  <div class="card-content">
                    <h5>Tecnologias utilizadas</h5>
                    <p>A traves de este dispositivo podremos controlar la bombilla que este conectada.</p>
                  </div>
                  <div class="card-action">
                    <a href="#">Mas Información</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      
      <div class="section grey lighten-3">
        <div class="row">
            <div class="col l3 s3 m3">
            </div>
            <div class="col l6 s6 m6">
              
              <h3>¿Tienes alguna duda?</h3>
              
              <ul>
                  @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
              
              {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}
              
              <div class="form-group">
                  {!! Form::label('Nombre') !!}
                  {!! Form::text('name', null, 
                      array('required', 
                            'class'=>'form-control', 
                            'placeholder'=>'Nombre')) !!}
              </div>
              
              <div class="form-group">
                  {!! Form::label('Tu cuenta de E-mail') !!}
                  {!! Form::text('email', null, 
                      array('required', 
                            'class'=>'form-control', 
                            'placeholder'=>'Tu cuenta de E-mail')) !!}
              </div>
              
              <div class="form-group">
                  {!! Form::label('Tu mensaje') !!}
                  {!! Form::textarea('message', null, 
                      array('required', 
                            'class'=>'form-control', 
                            'placeholder'=>'Tu mensaje')) !!}
              </div>
              
              <div class="form-group">
                  {!! Form::submit('Enviar!', 
                    array('class'=>'btn btn-primary blue darken-3')) !!}
              </div>
              {!! Form::close() !!}
              
            </div>
        </div>
        <div class="col l3 s3 m3">
        </div>
      </div>
      
      <footer class="page-footer amber darken-3">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Contacta con nosotros:</h5>
              <p class="grey-text text-lighten-4">Si tiene alguna duda o sugerencia, no dude en decírnoslo.</p>
              <p class="grey-text text-lighten-4">Telefono: 666 777 888</p>
              <p class="grey-text text-lighten-4">E-mail: domohelpproject@gmail.com</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Encuentranos en:</h5>
              <ul>
                <li><a target="_blank" href="https://www.facebook.com/DomoHelp-1406899652667203/"><i class="mdi mdi-facebook-box mdi-36px"></i></a><a>DomoHelp</a></li>
                <li><a target="_blank" href="https://twitter.com/domo_help"><i class="mdi mdi-twitter-circle mdi-36px"></i></a><a>@domo_help</a></li>
                <li><a target="_blank"href="https://plus.google.com/u/0/118116514461418291407"><i class="mdi mdi-google-plus-box mdi-36px"></i></a><a>Domo Help</a></li>
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
    
    </body>
  </html>
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
      <link href="./bower_components/mdi/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script>
      //Cogemos la altura de la pantalla para darle ese height al parallax-container
      window.onload = function(){
      var pagina = document.getElementsByClassName("parallax");
      var alturaScreen = this.windowHeight;
      pagina[0].style.height = alturaScreen+"px";
      }
    </script>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
      <script type="text/javascript" src="/js/home.js"></script>
      
      <div id="index-banner" class="parallax-container">
        <div id="botonLogin">
          <a class="waves-effect waves-teal btn-flat right">Login</a>
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
      
      <div class="section grey lighten-2">
        <section id="funcionamiento">
          <h3>¿Cómo funciona?</h3>
          <img class="displayed" src="/img/Esquema_Funcionamiento.png"></img>
        </section>
        
        
        <h3>Dispositivos que utilizamos:</h3>
          
          <div class="row">
            <div class="col l4 s3 m3">
              <div class="card">
                <div class="card-image">
                  <img src="img/wall_plug.jpg">
                  <span class="card-title">Wall Plug</span>
                </div>
                <div class="card-content">
                  <p>Utilizando este dispositivo podremos controlar la luz de la bonbilla que este conectada a este enchufe.</p>
                </div>
                <div class="card-action">
                  <a href="#">Mas Información</a>
                </div>
              </div>
            </div>
            
            <div class="col l4 s3 m3">
              <div class="card">
                <div class="card-image">
                  <img src="img/multisensor.jpeg">
                  <span class="card-title">Multi Sensor</span>
                </div>
                <div class="card-content">
                  <p>A traves de este aparato recibiremos datos de la temperatura, humedad etc. del hogar.</p>
                </div>
                <div class="card-action">
                  <a href="#">Mas Información</a>
                </div>
              </div>
            </div>
            
            <div class="col l4 s3 m3">
              <div class="card">
                <div class="card-image">
                  <img src="img/z_stick.jpg">
                  <span class="card-title">Z-Stick</span>
                </div>
                <div class="card-content">
                  <p>Este USB nos permite acceder y controlar todos los dispositivos que hemos instalado.</p>
                </div>
                <div class="card-action">
                  <a href="#">Mas Información</a>
                </div>
              </div>
            </div>
        </div>
      </div>
      
      <footer class="page-footer">
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
                <li><a target="_blank" href="https://www.facebook.com/DomoHelp-1406899652667203/"><i class="mdi mdi-facebook-box mdi-36px"></i></a></li>
                <li><a target="_blank" href="https://twitter.com/domo_help"><i class="mdi mdi-twitter-circle mdi-36px"></i></a><a>@domo_help</a></li>
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
    
    </body>
  </html>
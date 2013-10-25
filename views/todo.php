<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="xhtml/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }

            .jumbotron{
              height: 280px;
            }

            .jumbotron .container {
            position: relative;
            z-index: 999999;
            background: rgba(51, 51, 51, 0.80);
            border-radius: 5px;
            width: 400px;
            color: #fff;
            font: 12px/1.5 "Helvetica Neue", Arial, Helvetica, sans-serif;
            }

            .smin {
            position: relative;
            z-index: 999999;
            background: rgba(51, 51, 51, 0.80);
            border-radius: 5px;
            width: 300px;
            color: #fff;
            float: right;
            padding: 8px;
            }

            .smin h1{
              font-size: 36px !important;
              text-align: center;
            }

            .smin h1 img{
              width: 10%;
            }

        </style>
        <link rel="stylesheet" href="xhtml/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="xhtml/css/main.css">
         <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.css" />
         <!--[if lte IE 8]>
             <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.ie.css" />
         <![endif]-->
        <script src="xhtml/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Reciclo</a>
        </div>
        <div class="navbar-collapse collapse menu">
          
        <?php
        if($data['menu']){
          include('hooks/menu.php');
        }


        if($data['login']){
          echo '<form class="navbar-form navbar-right">
                         <div class="form-group">
                         <input type="text" placeholder="Email" class="form-control" name="mail">
                         </div>
                         <div class="form-group">
                         <input type="password" placeholder="Password" class="form-control" name="pass">
                         </div>
                         <button type="submit" class="btn btn-success login">Sign in</button>
                         </form>'; 
        }

        ?>
      </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" id="mapse">
      <div class="container">
        <h1><img src="xhtml/img/re.png">  Reciclo</h1>
        <p>Reciclar, la practica mas bondadosa con nuestro medio ambiente que podemos realizar, legado de futuras generacion 
           para tener un mejor lugar donde vivir.</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Reducir</h2>
          <p>Enterate de como puedes darle un mejor futuro a tus hijos, nietos mediante la reduccion en la produccion 
            de materiales suceptibles a contaminacion, nuestros tips te seran de gran ayuda.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Reusar</h2>
          <p>Como poder reusar ese computador viejo que ya no utilizas, herramientas que no te sirven y celulares pasados de moda,
            para otros pueden ser utiles, encuentra quien necesita lo que tu no usas. </p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Reciclar</h2>
          <p>Convierte lo que no te sirve y dale nueva vida o busca quien le pueda dar una mejor utilidad, con nuestra aplicacion
            podras encontrar la plata de reciclaje mas cercana a tu localidad.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2013 - This website uses <a href="http://www.maxmind.com/en/javascript">GeoIP2 JavaScript from MaxMind</a>.</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="xhtml/js/vendor/bootstrap.min.js"></script>

        <script src="xhtml/js/main.js"></script>
        <script src="//j.maxmind.com/js/geoip.js" type="text/javascript" ></script>
        <script type="text/javascript">
      

        </script>

 
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];

            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
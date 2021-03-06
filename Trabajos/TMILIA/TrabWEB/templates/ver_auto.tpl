<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="dist/assets/ico/favicon.png">

    <title>Autos Olavarria</title>

    <!-- Bootstrap core CSS -->
     <link href="dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="dist/css/bootstrap.css" rel="stylesheet">
     <link href="dist/css/jquery.bxslider.css" rel="stylesheet">
     <script src="dist/js/bootstrap.js"></script>
     <script src="./js/jquery.bxslider.min.js"></script>
     <script src="./js/galeria.js"></script> 

   

    <!-- Custom styles for this template -->
    <link href="dist/css/offcanvas.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        
              <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav">                  
                  {if isset($smarty.session.mail)}
                  <li class="active"><a href="index.php">Home</a></li>                  
                  <li><a href="panel.php">Panel</a></li>
                  <li><a href="logout.php">Cerrar sesion</a></li>                  
                  {else}
                  <li class="active"><a href="index.php">Home</a></li>                  
                  <li><a href="login.php">Ingresar</a></li>
                  {/if} 
                </ul>>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">
     <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Consecionaria Tandil</h1>
            <p>Los mejores coches a tu alcance</p>
          </div>
          
              <div class="row-fluid">
                   <div class="span12">
                  
                            <h3>{$auto[0].titulo}</h3>
                          </p>
                          <ul>
                            <li>
                             <b>Valor:{$auto[0].valor}</b>
                            </li>
                            <li>
                              <b>Modelo:{$auto[0].modelo}</b>
                            </li>
                            <li>
                              <b>Año:{$auto[0].anio}</b>
                            </li>
                          </ul>
                          <dl>
                            <dt>
                              <b>Descripcion del auto</b>
                            </dt>

                            <dd>
                              {$auto[0].descripcion}
                            </dd>
                          </dl>

                          <div id="myCarousel" class="carousel">
                              <div class=""carousel-inner>
                                <div class="item active">
                                  
                                  {foreach $imagenes as $img}
                                     <div style="height:30%; width:30%; float: left; margin-right: 10px;">
                                        <img alt="320x240" src="{$img.path}" class="img-thumbnail" />
                                     </div>
                                   
                                  {/foreach}

                                  </div> 
                               </div>    
                          </div>

                       <div style="clear: both;"></div>
                       </br>
                        </br> 
                        <div class="span4 well">
                            <form accept-charset="UTF-8" id="coment"  method="POST">
                                <div class="form-group">
                                  <label name="nombre">Nombre</label>
                                  <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre">
                                </div>
                                <div class="form-group">
                                  <label  name="email">Email</label>
                                  <input type="text" class="form-control" name="email" placeholder="Ingrese su correo">
                                </div>
                                 <div class="form-group">
                                  <label  name="telefono">Telefono</label>
                                  <input type="text" class="form-control" name="telefono" placeholder="Ingresa tu numero de telefono">
                                </div>
                                <textarea class="span4" name="texto" placeholder="Ingrese su consulta" rows="5" cols="100">
                                </textarea>
                                <input type="hidden" name="id"  value="{$auto[0].id}">                                
                                </br>
                                </br>
                                <button class="btn btn-info" type="button" id="comentario">Enviar</button> 
                            </form>
                        </div>

                    <div class="span4 well" id="comentarios">
                 



                    </div>    
                         
 
                </div>
            </div>
       </div><!--/span-->
          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <div class="well sidebar-nav">
              <ul class="nav">
                <li>Categorias</li>
                {foreach $marcas as $marca}
                <li class="active" style="text-transform: capitalize;"><a href='index.php?marca={$marca.id}'>{$marca.nombre}</a></li>  
                 {/foreach}   
              </ul>
            </div><!--/.well -->
          </div><!--/span-->
      </div><!--/row-->
      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.container-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="dist/assets/js/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="offcanvas.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/comentario.js"></script>
    <script type="text/javascript">$('.carousel').carousel();</script>

    
    
  </body>
</html>
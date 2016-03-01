<?php	$URLSITE = Router::url('/', true);	?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo $URLSITE; ?>/img/favicon.ico">
    
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
	
		// Bootstrap core CSS 
		echo $this->Html->css('bootstrap');
		//El estilo adicional que se creara
		echo $this->Html->css('estilokaren');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<!-- HTML5 shim y Respond.js se usan para que Internet explorer 8 O inferior soporten Media Querys de css -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php //aqui va el menu principal ?>

<div role="navigation" class="navbar navbar-default navbar-static-top karenmenu">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo $URLSITE; ?>" class="navbar-brand">SCWC</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo $URLSITE; ?>">Inicio</a></li>
            <li><a href="<?php echo $URLSITE; ?>usuarios">Usuarios</a></li>
            <li><a href="<?php echo $URLSITE; ?>computadoras">Computadoras</a></li>
            <li><a href="<?php echo $URLSITE; ?>cargos">Servicios</a></li>
            <li><a href="<?php echo $URLSITE; ?>tipocargos">Tipo de servicios</a></li>
            <li><a href="<?php echo $URLSITE; ?>facturas">Facturas</a></li>
            
          </ul>
          
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo $URLSITE; ?>usuarios/logout">Cerrar sesi&oacute;n</a></li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </div>

<div class="container" style="margin-top:20px;">

<?php //Aqui se imprime el contenido principal?>
<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>
<?php 
// El SQL DUMP ES OPCIONAL MUESTRA LAS CONSULTAS SQL QUE SE ESTAN EJECUTANDO
//echo $this->element('sql_dump'); ?>

<footer><p>&copy; CyberGZ 2014</p></footer>


</div> <!-- /container -->


    <!-- El Nucleo de Bootstrap en Javascript
    ================================================== -->
    <!-- Se pone al final para que la pagina cargue mas rapido -->
    <script src="<?php echo $URLSITE; ?>js/jquery.min.js"></script>
    <script src="<?php echo $URLSITE; ?>/js/bootstrap.js"></script>
  </body>
</html>

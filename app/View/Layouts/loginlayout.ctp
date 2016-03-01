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


<div class="container" style="margin-top:20px;">

<?php //Aqui se imprime el contenido principal?>
<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>
<?php 
// El SQL DUMP ES OPCIONAL MUESTRA LAS CONSULTAS SQL QUE SE ESTAN EJECUTANDO
//echo $this->element('sql_dump'); ?>



</div> <!-- /container -->


    <!-- El Nucleo de Bootstrap en Javascript
    ================================================== -->
    <!-- Se pone al final para que la pagina cargue mas rapido -->
    <script src="<?php echo $URLSITE; ?>js/jquery.min.js"></script>
    <script src="<?php echo $URLSITE; ?>/js/bootstrap.js"></script>
  </body>
</html>

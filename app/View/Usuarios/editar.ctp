<?php	$URLSITE = Router::url('/', true);	?>

<div class="row">
<div class="col-md-3">

     <a href="<?php echo $URLSITE; ?>usuarios" class="btn btn-info" style="width:100%;">Mostrar Usuarios</a> <br/>
     <div class="clearfix"><br/></div>
     <a href="<?php echo $URLSITE; ?>usuarios/agregar" class="btn btn-info " style="width:100%;">Agregar Usuarios</a> 

</div>

<div class="col-md-9">


<?php echo $this->Form->create('Usuario',array('action' => 'editar', 'id' => 'formulario', 'role' => 'form')); ?>
	
<div class="panel panel-primary">

      <div class="panel-heading">
        <h3 class="panel-title">Editar Usuario</h3>
      </div>
      <div class="panel-body">
		
			<label>Nombres</label>
			<?php echo $this->Form->input('Usuario.nombre',array('label'=>false,'placeholder'=>'Nombre', 'required'=>"required", 'class'=>'form-control')); ?>			 
			
			<label>Apellidos	</label>
			<?php echo $this->Form->input('Usuario.apellidos',array('label'=>false,'placeholder'=>'Apellidos', 'required'=>"required", 'class'=>'form-control')); ?>			 
				
			<label>Username</label>
			<?php echo $this->Form->input('Usuario.username',array('label'=>false,'placeholder'=>'username', 'class'=>'form-control')); ?>			 
		
	
			<label>Password</label>
			<?php echo $this->Form->input('Usuario.password',array('label'=>false,'placeholder'=>"Password", 'required'=>"required", 'class'=>'form-control')); ?>
			
			<label>Descripcion</label>
			<?php echo $this->Form->input('Usuario.descripcion',array('label'=>false,'placeholder'=>'Descripcion', 'required'=>"required", 'class'=>'form-control')); ?>			 
		
			<br/>
			<?php	echo $this->Form->end(array('label' => 'Editar Usuario','class' =>  'btn btn-success')); ?>


</div>
</div>

</div>

</div>


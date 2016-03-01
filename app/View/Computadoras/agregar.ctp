<?php	$URLSITE = Router::url('/', true);	?>

<div class="row">
<div class="col-md-3">

     <a href="<?php echo $URLSITE; ?>computadoras" class="btn btn-info" style="width:100%;">Mostrar Computadoras</a> <br/>
     <div class="clearfix"><br/></div>
     <a href="<?php echo $URLSITE; ?>computadoras/agregar" class="btn btn-info " style="width:100%;">Agregar Computadoras</a> 

</div>

<div class="col-md-9">


<?php echo $this->Form->create('Computadora',array('action' => 'agregar', 'id' => 'formulario', 'role' => 'form')); ?>
	
<div class="panel panel-primary">

      <div class="panel-heading">
        <h3 class="panel-title">Agregar Computadora</h3>
      </div>
      <div class="panel-body">
		
			<label>ID</label>
			<?php echo $this->Form->input('Computadora.id',array('label'=>false,'placeholder'=>'ID', 'required'=>"required", 'class'=>'form-control')); ?>			 
			
			<label>Numero</label>
			<?php echo $this->Form->input('Computadora.numero',array('label'=>false,'placeholder'=>'Numero', 'required'=>"required", 'class'=>'form-control')); ?>			 
				
			<label>Estado</label>
			<?php echo $this->Form->input('Computadora.estadoid',array('label'=>false,'placeholder'=>'Estado', 'class'=>'form-control')); ?>			 
		
	
			<label>Descripcion</label>
			<?php echo $this->Form->input('Computadora.descripcion',array('label'=>false,'placeholder'=>"Descripcion", 'required'=>"required", 'class'=>'form-control')); ?>
			
			<label>Activo</label>
			<?php echo $this->Form->input('Computadora.activo',array('label'=>false,'placeholder'=>'Activo', 'required'=>"required", 'class'=>'form-control')); ?>			 
		
			<br/>
			<?php	echo $this->Form->end(array('label' => 'Guardar Computadora','class' =>  'btn btn-success')); ?>

</div>
</div>

</div>

</div>


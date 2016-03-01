<?php	$URLSITE = Router::url('/', true);	?>

<div class="row">
<div class="col-md-3">

     <a href="<?php echo $URLSITE; ?>cargos" class="btn btn-info" style="width:100%;">Mostrar Servicios</a> <br/>
     <div class="clearfix"><br/></div>
     <a href="<?php echo $URLSITE; ?>cargos/agregar" class="btn btn-info " style="width:100%;">Agregar Servicios</a> 

</div>

<div class="col-md-9">


<?php echo $this->Form->create('Cargo',array('action' => 'agregar', 'id' => 'formulario', 'role' => 'form')); ?>
	
<div class="panel panel-primary">

      <div class="panel-heading">
        <h3 class="panel-title">Agregar Cargo</h3>
      </div>
      <div class="panel-body">
		
			<label>ID</label>
			<?php echo $this->Form->input('Cargo.id',array('label'=>false,'placeholder'=>'Id', 'required'=>"required", 'class'=>'form-control')); ?>			 
			
			<label>Id de Tipo de Cargo</label>
			<?php echo $this->Form->input('Cargo.idtipocargo',array('label'=>false,'placeholder'=>'Id tipo de servicio', 'required'=>"required", 'class'=>'form-control')); ?>			 
				
			<label>Existencia</label>
			<?php echo $this->Form->input('Cargo.existencia',array('label'=>false,'placeholder'=>'Existencia', 'class'=>'form-control')); ?>			 		
	
			<label>Activo</label>
			<?php echo $this->Form->input('Cargo.activo',array('label'=>false,'placeholder'=>"Activo", 'required'=>"required", 'class'=>'form-control')); ?>
			
			<label>Descripcion</label>
			<?php echo $this->Form->input('Cargo.descripcion',array('label'=>false,'placeholder'=>'Descripcion', 'required'=>"required", 'class'=>'form-control')); ?>			 
		
		    <label>Nombre</label>
			<?php echo $this->Form->input('Cargo.nombre',array('label'=>false,'placeholder'=>'Nombre', 'required'=>"required", 'class'=>'form-control')); ?>
			
			<label>Unidada Minima</label>
			<?php echo $this->Form->input('Cargo.unidadminima',array('label'=>false,'placeholder'=>'Unidad Minima', 'required'=>"required", 'class'=>'form-control')); ?>
			
			<label>Precio</label>
			<?php echo $this->Form->input('Cargo.precio',array('label'=>false,'placeholder'=>'Descripcion', 'Precio'=>"required", 'class'=>'form-control')); ?>
			
			<label>Precio Money</label>
			<?php echo $this->Form->input('Cargo.preciomoney',array('label'=>false,'placeholder'=>'Descripcion', 'Precio Money'=>"required", 'class'=>'form-control')); ?>
			<br/>
			<?php	echo $this->Form->end(array('label' => 'Guardar Servicio','class' =>  'btn btn-success')); ?>


</div>
</div>

</div>

</div>


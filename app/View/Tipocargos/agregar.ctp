<?php	$URLSITE = Router::url('/', true);	?>

<div class="row">
<div class="col-md-3">

     <a href="<?php echo $URLSITE; ?>tipocargos" class="btn btn-info" style="width:100%;">Mostrar tipo Servicios</a> <br/>
     <div class="clearfix"><br/></div>
     <a href="<?php echo $URLSITE; ?>tipocargos/agregar" class="btn btn-info " style="width:100%;">Agregar tipo Servicios</a> 

</div>

<div class="col-md-9">


<?php echo $this->Form->create('Tipocargo',array('action' => 'agregar', 'id' => 'formulario', 'role' => 'form')); ?>
	
<div class="panel panel-primary">

      <div class="panel-heading">
        <h3 class="panel-title">Agregar tipoCargo</h3>
      </div>
      <div class="panel-body">
		

			<label>Id de Tipo de Cargo</label>
			<?php echo $this->Form->input('Tipocargo.id',array('label'=>false,'placeholder'=>'Id tipo de servicio', 'required'=>"required", 'class'=>'form-control')); ?>			 
				
		    <label>Nombre</label>
			<?php echo $this->Form->input('Tipocargo.nombre',array('label'=>false,'placeholder'=>'Nombre', 'required'=>"required", 'class'=>'form-control')); ?>
			
			<br/>
			<?php	echo $this->Form->end(array('label' => 'Guardar Tipo Servicio','class' =>  'btn btn-success')); ?>


</div>
</div>

</div>

</div>


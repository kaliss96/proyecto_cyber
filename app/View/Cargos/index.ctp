<?php	$URLSITE = Router::url('/', true);	?>

<div class="row">
<div class="col-md-3">

     <a href="<?php echo $URLSITE; ?>cargos" class="btn btn-info" style="width:100%;">Mostrar Cargos</a> <br/>
     <div class="clearfix"><br/></div>
     <a href="<?php echo $URLSITE; ?>cargos/agregar" class="btn btn-info " style="width:100%;">Agregar Cargos</a>
     
</div>

<div class="col-md-9">


<table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Id tipo de cargo</th>
          <th>Existencia</th>
          <th>Activo</th>
          <th>Descripcion</th>
          <th>Nombre</th>
          <th>Unidad Minima</th>
          <th>Precio</th>
          <th>Precio Money</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($CargosArray as $car){	?>
        <tr>
          <td><?php echo $car['Cargo']['id']; ?></td>
          <td><?php echo $car['Cargo']['idtipocargo']; ?></td>
          <td><?php echo $car['Cargo']['existencia']; ?></td>
          <td><?php echo $car['Cargo']['activo']; ?></td>
          <td><?php echo $car['Cargo']['descripcion']; ?></td>
          <td><?php echo $car['Cargo']['nombre']; ?></td>
          <td><?php echo $car['Cargo']['unidadminima']; ?></td>
          <td><?php echo $car['Cargo']['precio']; ?></td>
          <td><?php echo $car['Cargo']['preciomoney']; ?></td>
          
          <td>
          
            <?php
			      echo " | ";
			      echo $this->Html->image("icon/edit.gif", array("title" => "Editar",'url' => array('controller' => 'Cargos', 'action' => 'editar', $car['Cargo']['id'])));
			      echo " | ";
				  echo $this->Form->postLink('<img src="' . $URLSITE . 'img/icon/delete.gif" title="Eliminar" />',
			                                   array('action' => 'admindelete', $car['Cargo']['id']),
			                                   array('escape'=>false, 'confirm' => 'Desea Eliminar el Servicio'));    										
			   	  echo " | ";   
			  ?>

          
          </td>
          
        </tr>
        <?php	}//fin del foreach	?>
      </tbody>
    </table>



</div>
</div>
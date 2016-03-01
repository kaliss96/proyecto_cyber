<?php	$URLSITE = Router::url('/', true);	?>

<div class="row">
<div class="col-md-3">

     <a href="<?php echo $URLSITE; ?>computadoras" class="btn btn-info" style="width:100%;">Mostrar Computadoras</a> <br/>
     <div class="clearfix"><br/></div>
     <a href="<?php echo $URLSITE; ?>computadoras/agregar" class="btn btn-info " style="width:100%;">Agregar Computadoras</a>
     
</div>

<div class="col-md-9">


<table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Numero</th>
          <th>Estado</th>
          <th>Descripcion</th>
          <th>Activo</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($ComputadorasArray as $pc){	?>
        <tr>
          <td><?php echo $pc['Computadora']['id']; ?></td>
          <td><?php echo $pc['Computadora']['numero']; ?></td>
          <td><?php echo $pc['Computadora']['estadoid']; ?></td>
          <td><?php echo $pc['Computadora']['descripcion']; ?></td>
          <td><?php echo $pc['Computadora']['activo']; ?></td>
          
          <td>
          
            <?php
			      echo " | ";
			      echo $this->Html->image("icon/edit.gif", array("title" => "Editar",'url' => array('controller' => 'Computadoras', 'action' => 'editar', $pc['Computadora']['id'])));
			      echo " | ";
				  echo $this->Form->postLink('<img src="' . $URLSITE . 'img/icon/delete.gif" title="Eliminar" />',
			                                   array('action' => 'admindelete', $pc['Computadora']['id']),
			                                   array('escape'=>false, 'confirm' => 'Desea Eliminar esta Computadora'));    										
			   	  echo " | ";   
			  ?>

          
          </td>
          
        </tr>
        <?php	}//fin del foreach	?>
      </tbody>
    </table>
</div>
</div>
<?php	$URLSITE = Router::url('/', true);	?>

<div class="row">
<div class="col-md-3">

     <a href="<?php echo $URLSITE; ?>tipocargos" class="btn btn-info" style="width:100%;">Mostrar tipoCargos</a> <br/>
     <div class="clearfix"><br/></div>
     <a href="<?php echo $URLSITE; ?>tipocargos/agregar" class="btn btn-info " style="width:100%;">Agregar tipoCargos</a>
     
</div>

<div class="col-md-9">


<table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          </tr>
      </thead>
      <tbody>
      <?php foreach($TipocargosArray as $tip){	?>
        <tr>
          <td><?php echo $tip['Tipocargo']['id']; ?></td>
          <td><?php echo $tip['Tipocargo']['nombre']; ?></td>
                   
          <td>
          
            <?php
			      echo " | ";
			      echo $this->Html->image("icon/edit.gif", array("title" => "Editar",'url' => array('controller' => 'Tipocargos', 'action' => 'editar', $tip['Tipocargo']['id'])));
			      echo " | ";
				  echo $this->Form->postLink('<img src="' . $URLSITE . 'img/icon/delete.gif" title="Eliminar" />',
			                                   array('action' => 'admindelete', $tip['Tipocargo']['id']),
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
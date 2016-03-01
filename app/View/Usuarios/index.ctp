<?php	$URLSITE = Router::url('/', true);	?>

<div class="row">
<div class="col-md-3">

     <a href="<?php echo $URLSITE; ?>usuarios" class="btn btn-info" style="width:100%;">Mostrar Usuarios</a> <br/>
     <div class="clearfix"><br/></div>
     <a href="<?php echo $URLSITE; ?>usuarios/agregar" class="btn btn-info " style="width:100%;">Agregar Usuarios</a>
     
</div>

<div class="col-md-9">


<table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Username</th>
          <th>Descripcion</th>
          <th>opciones</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($UsuariosArray as $usr){	?>
        <tr>
          <td><?php echo $usr['Usuario']['id']; ?></td>
          <td><?php echo $usr['Usuario']['nombre']; ?></td>
          <td><?php echo $usr['Usuario']['apellidos']; ?></td>
          <td><?php echo $usr['Usuario']['username']; ?></td>
          <td><?php echo $usr['Usuario']['descripcion']; ?></td>
          
          <td>
          
            <?php
			      echo " | ";
			      echo $this->Html->image("icon/edit.gif", array("title" => "Editar",'url' => array('controller' => 'Usuarios', 'action' => 'editar', $usr['Usuario']['id'])));
			      echo " | ";
				  echo $this->Form->postLink('<img src="' . $URLSITE . 'img/icon/delete.gif" title="Eliminar" />',
			                                   array('action' => 'admindelete', $usr['Usuario']['id']),
			                                   array('escape'=>false, 'confirm' => 'Desea Eliminar el usuario'));    										
			   	  echo " | ";   
			  ?>

          
          </td>
          
        </tr>
        <?php	}//fin del foreach	?>
      </tbody>
    </table>



</div>
</div>
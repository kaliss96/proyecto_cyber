<div class="container" style="">






      <?php echo $this->Form->create('Usuario',array('action' => 'login', 'id' => 'slick-login', 'role' => 'form', 'class' => 'form-signin', 'style' => 'margin: 0 auto;max-width: 330px;padding: 15px;' ));  ?>
      
      
      
      
        <h2 class="form-signin-heading">Iniciar sesi&oacute;n</h2>
         
        <?php echo $this->Form->input('Usuario.username',array ('label'=>false,'placeholder'=>"username", 'required'=>"required", 'class'=>'form-control') ); ?>
		<?php echo $this->Form->input('Usuario.password',array('label'=>false,'placeholder'=>"password", 'required'=>"required", 'class'=>'form-control')); ?>
       
        
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Recordarme </label>
       <!--  <button type="submit" class="btn btn-lg btn-primary btn-block">Conectarse</button> -->
      
      <?php echo $this->Form->end(__('Login')); ?>

    </div>
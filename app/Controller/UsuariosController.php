<?php
class UsuariosController extends AppController {

	public $name = 'Usuarios';
	public $helpers = array('Html','Form');
	public $components = array('RequestHandler','Session');


	//________________________Before Filter ______________________________________
	
	public function beforeFilter() {
		parent::beforeFilter();
			Security::setHash('md5');
			$this->Auth->allow('logout', 'login', 'agregar');
			$this->Auth->fields = array('username' => 'username',
            							'password' => 'password');
    }


	//Funcion Index
	public function index() {
		$todosUsuarios = $this->Usuario->find('all');
		 $this->set('UsuariosArray', $todosUsuarios);
	}//Fin de la funcion Index
	
	
	//funcion para agregar usuarios
	public function agregar() {

		//si la solicitud es de un post
		if($this->request->is('post')) {
			$this->Usuario->create(); //Se crea el usuario
				//Se guarda el usuario con los valores del request data								
				if ($this->Usuario->save($this->request->data)) {
					//se imprime un mensaje que dice que se creo el usuario
					$this->Session->setFlash('El usuario ha sido creado satisfactoriamente','flash_custom');
					//se redirige al index
					$this->redirect(array('action' => 'index'));
				} else {
					//en caso de que no se manda un mensaje de que fue error
					$this->Session->setFlash('El Usuario no pudo ser creado Intente nuevamente', 'flash_error');
				}
		}

		
		
	}//Fin dela funcion agregar

//funcion para Editar usuarios
public function editar($id = null) {

		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid Usuario'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('El Usuario ha sido actualizado','flash_custom'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Usuario no puede ser actualizado. Intente otra vez.', 'flash_error'));
			}
		} else {
			$this->request->data = $this->Usuario->read(null, $id);
		}
	}//Fin dela funcion editar 
	
//funcion para Eliminar usuarios	
	public function admindelete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Usuario no valido'));
		}
		if ($this->Usuario->delete()) {
			$this->Session->setFlash(__('Usuario eliminado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El Usuario no fue eliminado'));
		$this->redirect(array('action' => 'index'));
	}//Fin dela funcion eliminar


	//Funcion paraIniciar Sesion
	public function login() {
		$this->layout = 'loginlayout';		
		if ($this->request->is('post')) {
		        if ($this->Auth->login()) {
				$username = $this->Auth->request->data['Usuario']['username'];
				$id = $this->encontrarid($username);
				$name = $this->encontrarNombre($id);
				$this->Session->write('Usuario.id', $id);
				$this->Session->write('Usuario.NombreU', $name);
	            $this->redirect($this->Auth->redirect());
		   } else {
		        $this->Session->setFlash(__('Usuario o Contrase&ntilde;a Invalido. Intentelo de nuevo'));
	        }
	    }	

	}//Funcion de la funcion
	
//para cierre de secion
function logout() { $this->redirect($this->Auth->logout()); }

function encontrarid($username){
	  $this->Usuario->recursive = 2; 
		if(!empty($username)){
	  		$this->Usuario->username = $username;  	
		  	$UsuarioArray = $this->Usuario->find('all',array('conditions'=>array('Usuario.username' => $username)));	
		  	$this->Usuario->id = $UsuarioArray[0]['Usuario']['id'];
		  	return $this->Usuario->id; 
		  }    
	}
	
	
	function encontrarNombre($id){
	  if(!empty($id)){
	  	$this->Usuario->id = $id;  
	  	$readreser = $this->Usuario->read();    
	    $role = $readreser['Usuario']['nombre'];
	  	return $role; 
	  	}
	}
	
	public function adminadd(){
	} 

}//Fin de la clase Usuarios
?>
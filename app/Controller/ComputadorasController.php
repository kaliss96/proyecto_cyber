<?php
class ComputadorasController extends AppController {

	public $name = 'Computadoras';
	public $helpers = array('Html','Form');
	public $components = array('RequestHandler','Session');


	//Funcion Index
	public function index() {
		$todasComputadoras = $this->Computadora->find('all');
		 $this->set('ComputadorasArray', $todasComputadoras);
	}//Fin de la funcion Index
	
	
	//funcion para agregar computadoras
	public function agregar() {

		//si la solicitud es de un post
		if($this->request->is('post')) {
			$this->Computadora->create(); //Se crea la computadora
				//Se guarda la Computadora con los valores del request data								
				if ($this->Computadora->save($this->request->data)) {
					//se imprime un mensaje que dice que se creo el computadora
					$this->Session->setFlash('LaComputadora ha sido creada satisfactoriamente','flash_custom');
					//se redirige al index
					$this->redirect(array('action' => 'index'));
				} else {
					//en caso de que no se manda un mensaje de que fue error
					$this->Session->setFlash('La Computadora no pudo ser creada Intente nuevamente', 'flash_error');
				}
		}

		
		
	}//Fin dela funcion agregar

//funcion para Editar Computadoras
public function editar($id = null) {

		$this->Computadora->id = $id;
		if (!$this->Computadora->exists()) {
			throw new NotFoundException(__('Invalid Computadora'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Computadora->save($this->request->data)) {
				$this->Session->setFlash(__('La Computadora ha sido actualizado','flash_custom'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La Computadora no puede ser actualizado. Intente otra vez.', 'flash_error'));
			}
		} else {
			$this->request->data = $this->Computadora->read(null, $id);
		}
	}//Fin dela funcion editar 
	
//funcion para Eliminar Computadoras	
	public function admindelete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Computadora->id = $id;
		if (!$this->Computadora->exists()) {
			throw new NotFoundException(__('Computadora no vÃƒÂ¡lida'));
		}
		if ($this->Computadora->delete()) {
			$this->Session->setFlash(__('Computadora eliminada'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('La Computadora no fue eliminada'));
		$this->redirect(array('action' => 'index'));
	}//Fin dela funcion eliminar

}//Fin de la clase Computadoras
?>
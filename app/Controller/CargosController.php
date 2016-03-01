<?php
class CargosController extends AppController {

	public $name = 'Cargos';
	public $helpers = array('Html','Form');
	public $components = array('RequestHandler','Session');


	//Funcion Index
	public function index() {
		$todosCargos = $this->Cargo->find('all');
		 $this->set('CargosArray', $todosCargos);
	}//Fin de la funcion Index
	
	
	//funcion para agregar Cargos	
	
	//funcion para agregar Cargos
	public function agregar() {

		//si la solicitud es de un post
		if($this->request->is('post')) {
			$this->Cargo->create(); //Se crea el Cargo
				//Se guarda el Cargo con los valores del request data								
				if ($this->Cargo->save($this->request->data)) {
					//se imprime un mensaje que dice que se creo el Cargo
					$this->Session->setFlash('El Servicio ha sido creado satisfactoriamente','flash_custom');
					//se redirige al index
					$this->redirect(array('action' => 'index'));
				} else {
					//en caso de que no se manda un mensaje de que fue error
					$this->Session->setFlash('El Cargo no pudo ser creado Intente nuevamente', 'flash_error');
				}
		}

		
		
	}//Fin dela funcion agregar

//funcion para Editar Cargos
public function editar($id = null) {

		$this->Cargo->id = $id;
		if (!$this->Cargo->exists()) {
			throw new NotFoundException(__('Invalid Cargo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cargo->save($this->request->data)) {
				$this->Session->setFlash(__('El Servicio ha sido actualizado','flash_custom'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Servicio no puede ser actualizado. Intente otra vez.', 'flash_error'));
			}
		} else {
			$this->request->data = $this->Cargo->read(null, $id);
		}
	}//Fin dela funcion editar 
	
//funcion para Eliminar Cargos	
	public function admindelete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Cargo->id = $id;
		if (!$this->Cargo->exists()) {
			throw new NotFoundException(__('Servicio no valido'));
		}
		if ($this->Cargo->delete()) {
			$this->Session->setFlash(__('Servicio eliminado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El Servicio no fue eliminado'));
		$this->redirect(array('action' => 'index'));
	}//Fin dela funcion eliminar
}//Fin de la clase Cargos
?>
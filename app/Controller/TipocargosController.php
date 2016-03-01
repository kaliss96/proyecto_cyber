<?php
class TipocargosController extends AppController {

	public $name = 'Tipocargos';
	public $helpers = array('Html','Form');
	public $components = array('RequestHandler','Session');


	//Funcion Index
	public function index() {
		$todosTipocargos = $this->Tipocargo->find('all');
		 $this->set('TipocargosArray', $todosTipocargos);
	}//Fin de la funcion Index
	
	
	//funcion para agregar Tipocargos	
	
	//funcion para agregar Tipocargos
	public function agregar() {

		//si la solicitud es de un post
		if($this->request->is('post')) {
			$this->Tipocargo->create(); //Se crea el Tipocargo
				//Se guarda el Cargo con los valores del request data								
				if ($this->Tipocargo->save($this->request->data)) {
					//se imprime un mensaje que dice que se creo el Tipocargo
					$this->Session->setFlash('El Servicio ha sido creado satisfactoriamente','flash_custom');
					//se redirige al index
					$this->redirect(array('action' => 'index'));
				} else {
					//en caso de que no se manda un mensaje de que fue error
					$this->Session->setFlash('El Tipocargo no pudo ser creado Intente nuevamente', 'flash_error');
				}
		}

		
		
	}//Fin dela funcion agregar

//funcion para Editar Cargos
public function editar($id = null) {

		$this->Tipocargo->id = $id;
		if (!$this->Tipocargo->exists()) {
			throw new NotFoundException(__('Invalid Cargo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tipocargo->save($this->request->data)) {
				$this->Session->setFlash(__('El Servicio ha sido actualizado','flash_custom'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Servicio no puede ser actualizado. Intente otra vez.', 'flash_error'));
			}
		} else {
			$this->request->data = $this->Tipocargo->read(null, $id);
		}
	}//Fin dela funcion editar 
	
//funcion para Eliminar Tipocargos	
	public function admindelete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Tipocargo->id = $id;
		if (!$this->Tipocargo->exists()) {
			throw new NotFoundException(__('Servicio no valido'));
		}
		if ($this->Tipocargo->delete()) {
			$this->Session->setFlash(__('Servicio eliminado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El Servicio no fue eliminado'));
		$this->redirect(array('action' => 'index'));
	}//Fin dela funcion eliminar
}//Fin de la clase Tipocargos
?>
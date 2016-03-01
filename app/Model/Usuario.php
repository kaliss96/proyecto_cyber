<?php
App::uses('AuthComponent', 'Controller/Component');
class Usuario extends AppModel {
	
//Esto el Nombre del Modelo 
public $name = 'Usuario';
	
//Estos para validaciones	
public $validate = array(
	'username' => array(
		'required' => array(
		'rule' => array('notEmpty'),
	'message' => 'A username is required')
		),
	'password' => array(
		'required' => array(
		'rule' => array('notEmpty'),
	'message' => 'A password is required')
		)
	);
		
//Este se utiliza para que Antes de guardar un dato se encripte la contraseña
public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
}	

}
?>
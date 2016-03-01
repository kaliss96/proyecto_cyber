<?php
App::uses('AuthComponent', 'Controller/Component');
class Cargo extends AppModel {
	
//Esto el Nombre del Modelo 
public $name = 'Cargo';
	
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
		
//Este se utiliza para que Antes de guardar un dato se encripte la contraseÃƒÂ±a
public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
}	

}
?>
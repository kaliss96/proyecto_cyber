<?php

//App::uses('Controller', 'Controller');

class AppController extends Controller {

/* si se jode esta aqui el problma :D */

public $components = array(



    /*'DebugKit.Toolbar',*/

    'Session',

    'Auth' => array(

        'authenticate' => array(

            'Form' => array(

                'userModel' => 'Usuario',

                'fields' => array(

                    'username' => 'username',

                    'password' => 'password'

                 )

            )

        ),

        'loginRedirect' => array('controller' => 'Usuarios', 'action' => 'index'),

        'logoutRedirect' => array('controller' => 'pages', 'action' => 'index'),

        'loginAction' => array('controller' => 'Usuarios', 'action' => 'login'),

        'authError' => "<div class='sorry'>Login Failed</div>"

      )



);

     



    /* public function beforeFilter () {

         $this -> Auth -> allow ( 'login' );

     }*/

}


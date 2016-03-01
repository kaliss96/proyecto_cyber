<?php
App::uses('Controller', 'Controller');
class UsersController extends AppController {

public function beforeFilter () {
     parent :: beforeFilter ();
     // Allow users to register and logout.
     $this -> Auth ->autoRedirect=false;
 }

 public function login () {
     if ( $this -> request -> is ( 'post' )) {
         if ( $this -> Auth -> login ()) {
             return $this -> redirect ( $this -> Auth -> redirect ());
         }
         $this -> Session -> setFlash ( __ ( 'Invalid username or password, try again' ));
     }
 }

 public function logout () {
     return $this -> redirect ( $this -> Auth -> logout ());
 }
 }
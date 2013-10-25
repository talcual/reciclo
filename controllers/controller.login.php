<?php

class login extends Controller{
public static $mailengine;

 public function login(){
   $this->loadModel('users');
 }	
 
 public function index($data = ''){

 	$Slim = Controller::$slimx;

	$Slim::getView('login',function($route){
		include $route;
	});

 }

  public function auth(){
   	  $auth = json_decode(Controller::getModel('users')->validaUsario($_POST));
	  if(!$auth->error){
	    $_SESSION['u_session']['data'] = serialize($auth);
		$_SESSION['u_session']['pase'] = true;
		Controller::query('UPDATE usuarios_generales SET puntos = puntos + 1 WHERE id ='.$auth[0]->id);
		echo json_encode(array('access'=>'ok'));
	   }else{
	   	if($_SESSION['faceaccess']){
 		  //$_SESSION['u_session']['pase'] = true;
 		  //header('location: /user'); 
	   	}else{
		  header("Location: /");
	   	}
	   }
  }

  public function facec(){
	$app_id = "151047245091171";
	$app_secret = "39eb3e9ed262010661f9cd49cf07cd32";
	$post_login_url = "http://www.negociolocal.net/face/validating.php";
  }
 
 public function logout(){
    $_SESSION['u_session'] = NULL;
	unset($_SESSION['u_session']);
	
 }
 	

}
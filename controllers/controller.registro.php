<?php

class registro extends Controller{

 public function inicio(){

 }	
 
 public function index($data = ''){

 	$Slim = Controller::$slimx;

 	$data['categorias'] = self::query('SELECT * FROM categorias WHERE ESTADO = 1');
 	$data['ciudades'] 	= self::query('SELECT * FROM ciudades WHERE ESTADO = 1');
 	$data['arriendos'] 	= self::query('SELECT *,(SELECT nombre FROM ciudades WHERE id = arr.id_ciudad) AS ciudad FROM arriendos AS arr ORDER BY fecha DESC LIMIT 0,3');
			
    $Slim::getView('head',function($route){
		$project_name = 'HCPro';
		include $route;
	});
	$Slim::getView('registro',$data,function($route,$data){
		$data;
		include $route;
	});
	$Slim::getView('foot',function($route){
		include $route;
	});
 }

 public function reguser(){
 	if($_POST){
 		$data = $_POST;
 		$data = array_map('strtolower',$data);
 		$usuario = array(
 					'nombre'	=>$data['nombre'],
 					'apellido'	=>$data['apellido'],
 					'nick'		=>$data['username'],
 					'pass'		=>md5($data['password']),
					'email'		=>$data['email'],
 					'telefono'	=>$data['telefono'],
 					'celular'	=>$data['celular'],
 					'ciudad'	=>$data['ciudad'],
					'barrio'	=>$data['barrio']
				  );
 		$sqldata = array('tabla'=>'usuarios_generales','reg'=>$usuario);
 		$sql = self::insert($sqldata);
 		$datos_acceso = array('user'=>$data['username'],'pass' =>$data['password']);
 		$edata = array('email'=>$data['email'],'nombres' => $data['nombre'].' '.$data['apellido'],'daccess'=>$datos_acceso,'plantilla'=>'/home/negociol/www/xhtml/plantas/mail.html');
 		core::ARMail($edata);

 		if($sql){
 			header('location: /');
 		}		  
 	}
 }

 public function actualizar_datos(){
 	if($_POST){
 		$data = $_POST;
 		$data = array_map('strtolower',$data);
 		$sqldata = array('tabla'=>'usuarios_generales','reg'=>$data,'where' => array('id'=>$data['id']));
 		$sql = self::updata($sqldata);
 		if($sql){
 			header('location: /');
 		}		  
 	}
 }

 public function userVerify(){
 	  $data = $_POST;
 	  $data = array_map('strtolower',$data);
 	  $udata = array(
 	  			'tabla'	 => 'usuarios_generales',
 	  			'campos' =>  array(
 	  						   'nick'
 	  						 ),
 	  			'where'	 =>  array(
 	  				           'nick'=>"'".$data['nick']."'"
 	  				      	 )
 	  			);
 	  $ucom = self::select($udata);

	  if(count($ucom) == 0){
	  	echo json_encode(array('resp' => 'ok'));
	  }else{
	  	echo json_encode(array('resp' => 'error'));
	  }
 }
 	

}
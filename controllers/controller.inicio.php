<?php

class inicio extends Controller{

 public function inicio(){

 }	
 
 public function index($data = ''){

 	$Slim = Controller::$slimx;

 	if($_SESSION['u_session']['pase']){

 		$data['menu'] = true;
 		$data['login'] = false;
 	}else{
 		$data['login'] = true;
 	}

	$Slim::getView('todo',$data,function($route,$data){
		$data;
		include $route;
	});

 }

 public function menu($data = ''){

 	$Slim = Controller::$slimx;

	$Slim::getView('menu',$data,function($route,$data){
		$data;
		include $route;
	});

 }
 	

}
<?php 


/* 


ccToolkit
Grupo de herramientas y entorno para soluciones de CaribeCoders


*/

session_start();

include('core/utils.php');

// Load & Instancies Libraries
$libraries = array(
	'app'		=>'core',
	'orm'		=>'orm',
	'slimlab'	=>'Slimax',
	'controller'=>'Controller',
	'model' 	=> 'Model',
	'phpmailer'		=> 'PHPMailer'
	);
autoLoad($libraries);


// Config Zone
$config = array('errors' => true,'uri'=>'http://www.negociolocal.net/');
$app['app']::SQLConnect(array('host'=>'localhost','user'=>'caribeco_reci','pass'=>'@5]zEyu]uCFg','db'=>'caribeco_reciclo'));
$app['app']::settings($config);


// Routing Files
routing();

?>
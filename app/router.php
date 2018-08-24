<?php
use System\Router;
use System\Page;
use System\Config;

//DEFINIR AS ROTAS
//O sistema trabalha exibindo sempre a index

//GRUPO DE ROTAS PARA ADMIN
//****************************************
Router::group('admin', function() {

	Config::setDefaultRouter('admin');

	Router::any('usuarios', function(){
		echo 'lista de usuarios';
	});

	Router::any('pages', function(){
		echo 'lista das paginas';
		var_dump(Router::getURL(1));
	});		

	Router::any('ajax', function(){
		header('Content-Type: application/json; charset=utf-8');
		$teste[] = array(1, 2, 3, 4);
		echo json_encode($teste);
		exit();
	});	
	
});

//GRUPO DE ROTAS DEFAULT (SITE)
//****************************************
Router::any('pages', function(){
	Page::loads(Router::getURL(1));
});

Router::any('gcrud', function(){
	Page::loads(Router::getURL(1));
});
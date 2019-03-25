<?php
use System\Router;
use System\Page;
use System\Config;

//DEFINIR AS ROTAS
//O sistema trabalha exibindo sempre a index

//Config::setDefaultRouter('app');
//Adicionando o caminho ate a aplicao para
//nao interferir nas rotas - url[0]
//Router::setPrefix(['pasta_antes_do_sistemas']);

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
//Requisições ao arquivos modulo-actions
Router::any('pages', function(){
	//Page::loads(Router::getURL(1), Config::getDefaultRouter());
	var_dump(Router::getURL(1));
	Page::loads(Router::getURL(1));
});

//requisicoes ajax
Router::any('ajax', function(){
	Page::loads(Router::getURL(1));
	exit();	
});

// Router::any('relatorios', function(){
// 	Page::load('relatorios/index');
// 	exit();	
// });

// Router::any('print', function(){	
// 	Page::loads(Router::getURL(1));
// 	exit();
// });

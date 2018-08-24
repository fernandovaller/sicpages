<?php 
namespace System;

class Page {

	public static function load($path, $app_folder = '') {
		$file = APP_PATH .  $app_folder . $path . '.php';
		//var_dump($file);
		if(file_exists($file)){
			include $file;
		}else {
			var_dump($file);
		}
	}	

	//page format page-name-folder/page-name
	public static function loads($path, $app_folder = '') {
		$page_base = explode('-', $path);		
		$file = APP_PATH . $app_folder . $page_base[0] . DIRECTORY_SEPARATOR . $path . '.php';
		if(file_exists($file)){
			include $file;
		} else{
			include APP_PATH . $app_folder . '404.phtml';
		} 
	}

	//all pages in folder
	public static function loadin($path, $path_base, $app_folder = '') {		
		$file = APP_PATH . $app_folder . $path_base . DIRECTORY_SEPARATOR . $path . '.php';
		//var_dump($file);
		if(file_exists($file)){
			include $file;
		}
	}
    
}
<?php
namespace System;

//Class para auxiliar na manipulação de datas
class Database {

	//localhost
	public static function export(){		
		//remove o autoincremento
		//exec("mysqldump --no-data -u root -proot2017 ".DB_NAME." | sed 's/ AUTO_INCREMENT=[0-9]*//g' > ".APP_PATH."/database/".DB_NAME.".sql");
		exec("mysqldump --no-data -u root -proot2017 ".DB_NAME." > ".APP_PATH."/database/".DB_NAME.".sql");
	}

	//localhost
	public static function exportFakeData(){
		exec("mysqldump -u root -proot2017 ".DB_NAME." --no-create-info > ".APP_PATH."/database/".DB_NAME."FakeData.sql");
	}	

	public static function import(){
		exec("mysql -u ".DB_NAME." -p".DB_PWD." ".DB_NAME." < ".APP_PATH."/database/".DB_NAME.".sql");
	}		

	public static function importFakeData(){
		exec("mysql -u ".DB_NAME." -p".DB_PWD." ".DB_NAME." < ".APP_PATH."/database/".DB_NAME."FakeData.sql");
	}

}
<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'tropawork',
		'prefix' => '',

		
		//'encoding' => 'utf8',
	);

	public $tropawork = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => '127.0.0.1',
		'port' => 8889,
		'login' => 'root',
		'password' => 'root',
		'database' => 'tropawork',
	);

}
?>

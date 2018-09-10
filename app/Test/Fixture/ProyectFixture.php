<?php
/**
 * Proyect Fixture
 */
class ProyectFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'company' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'contact' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'phone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 13, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'mobile' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 13, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'manager' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'leader' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'responsible' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hrs_attempt' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'hrs_real' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'date_delivery' => array('type' => 'date', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'company' => 'Lorem ipsum dolor sit amet',
			'contact' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsum',
			'mobile' => 'Lorem ipsum',
			'email' => 'Lorem ipsum dolor sit amet',
			'manager' => 'Lorem ipsum dolor sit amet',
			'leader' => 'Lorem ipsum dolor sit amet',
			'responsible' => 'Lorem ipsum dolor sit amet',
			'hrs_attempt' => 1,
			'hrs_real' => 1,
			'date_delivery' => '2018-08-29',
			'created' => '2018-08-29 22:36:25',
			'modified' => '2018-08-29 22:36:25'
		),
	);

}

<?php
App::uses('Proyect', 'Model');

/**
 * Proyect Test Case
 */
class ProyectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.proyect',
		'app.order',
		'app.user',
		'app.task',
		'app.status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Proyect = ClassRegistry::init('Proyect');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Proyect);

		parent::tearDown();
	}

}

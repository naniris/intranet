<?php
App::uses('AppController', 'Controller');
/**
 * Orders Controller
 *
 * @property Order $Order
 * @property PaginatorComponent $Paginator
 */
class OrdersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Order->recursive = 0;
		$this->set('orders', $this->Paginator->paginate());
		$company = $this->Order->Proyect->find('all');
		$this->set('proyectos', $company);

		$order = $this->Order->find('all');
		$this->set('trabajo', $order);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

	public function ordenes($id){
		$order = $this->Order->find('all', array('conditions'=> array('Order.proyect_id'=>$id)));
		$this->set('ordenes', $order);
	}

	public function ver($id){
		$order = $this->Order->find('all', array('conditions'=> array('Order.id'=>$id)));
		$this->set('ordenes', $order);
	}

	public function view($id = null) {
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Orden inválida'));
		}
		$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
		$this->set('order', $this->Order->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Order->create();
			if ($this->Order->save($this->request->data)) {
				$this->Flash->success(__('Se registro la orden correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('No se registro la orden de trabajo.'));
			}
		}
		$users = $this->Order->User->find('list');
		$statuses = $this->Order->Status->find('list');
		$proyects = $this->Order->Proyect->find('list');
		$this->set(compact('users', 'statuses', 'proyects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Orden inválida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Order->save($this->request->data)) {
				$this->Flash->success(__('Datos actualizados.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('Datos no actualizados.'));
			}
		} else {
			$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
			$this->request->data = $this->Order->find('first', $options);
		}
		$users = $this->Order->User->find('list');
		$statuses = $this->Order->Status->find('list');
		$proyects = $this->Order->Proyect->find('list');
		$this->set(compact('users', 'statuses', 'proyects'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Orden inválida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Order->delete()) {
			$this->Flash->success(__('Se elimino la orden de trabajo.'));
		} else {
			$this->Flash->error(__('No se elimino la orden. Pruebe de nuevo!.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

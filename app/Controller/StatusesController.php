<?php
App::uses('AppController', 'Controller');
/**
 * Statuses Controller
 *
 * @property Status $Status
 * @property PaginatorComponent $Paginator
 */
class StatusesController extends AppController {

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
		$this->Paginator->settings = $this->paginate;
		$data = $this->Paginator->paginate('Status');
		$this->set('statuses', $data);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Status->exists($id)) {
			throw new NotFoundException(__('Status invalido'));
		}
		$options = array('conditions' => array('Status.' . $this->Status->primaryKey => $id));
		$this->set('status', $this->Status->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Status->create();
			if ($this->Status->save($this->request->data)) {
				$this->Flash->success(__('EL Status se guardo correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('No se registro correctamente. Intente de nuevo!.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Status->exists($id)) {
			throw new NotFoundException(__('Invalid status'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Status->save($this->request->data)) {
				$this->Flash->success(__('Se actualizo correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('No se actualizo correctamente. Intente de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Status.' . $this->Status->primaryKey => $id));
			$this->request->data = $this->Status->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Status->id = $id;
		if (!$this->Status->exists()) {
			throw new NotFoundException(__('Invalid status'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Status->delete()) {
			$this->Flash->success(__('Status elminado.'));
		} else {
			$this->Flash->error(__('No se pudo eliminar. Intente de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

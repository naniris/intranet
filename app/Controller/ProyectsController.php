<?php
App::uses('AppController', 'Controller');
/**
 * Proyects Controller
 *
 * @property Proyect $Proyect
 * @property PaginatorComponent $Paginator
 */
class ProyectsController extends AppController {

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
		$this->Proyect->recursive = 0;
		$this->set('proyects', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Proyect->exists($id)) {
			throw new NotFoundException(__('Proyecto inválido'));
		}
		$options = array('conditions' => array('Proyect.' . $this->Proyect->primaryKey => $id));
		$this->set('proyect', $this->Proyect->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proyect->create();
			if ($this->Proyect->save($this->request->data)) {
				$this->Flash->success(__('El proyecto ha sido guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('No se registro el proyecto. Intente de nuevo!'));
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
		if (!$this->Proyect->exists($id)) {
			throw new NotFoundException(__('Proyecto inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proyect->save($this->request->data)) {
				$this->Flash->success(__('El proyecto ha sido guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('No se pudo guardar el proyecto. Intente de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Proyect.' . $this->Proyect->primaryKey => $id));
			$this->request->data = $this->Proyect->find('first', $options);
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
		$this->Proyect->id = $id;
		if (!$this->Proyect->exists()) {
			throw new NotFoundException(__('Proyecto inválido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Proyect->delete()) {
			$this->Flash->success(__('El proyecto se elimino correctamente.'));
		} else {
			$this->Flash->error(__('No se pudo eliminar el proyecto. Intente de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

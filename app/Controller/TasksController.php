<?php
App::uses('AppController', 'Controller');
/**
 * Tasks Controller
 *
 * @property Task $Task
 * @property PaginatorComponent $Paginator
 */
class TasksController extends AppController {

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
		$this->Task->recursive = 0;
		$this->set('tasks', $this->Paginator->paginate());
		$user = $this->Task->User->find('all');
		$this->set('usuarios', $user);
	}


	public function tareas($id){
		$task = $this->Task->find('all', array('conditions'=>array('Task.user_id'=>$id)));
		$this->set('task', $task);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Task->exists($id)) {
			throw new NotFoundException(__('Tarea invalida'));
		}
		$options = array('conditions' => array('Task.' . $this->Task->primaryKey => $id));
		$this->set('task', $this->Task->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Task->create();
			if ($this->Task->save($this->request->data)) {
				$this->Flash->success(__('La tarea se registro correctamente'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('La tarea no se registro correctamente. Por favor, intente de nuevo!'));
			}
		}
		$users = $this->Task->User->find('list');
		$proyects = $this->Task->Proyect->find('list');
		$this->set(compact('users', 'proyects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Task->exists($id)) {
			throw new NotFoundException(__('Invalid task'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Task->save($this->request->data)) {
				$this->Flash->success(__('Datos actualizados.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('La tarea no se modifico correctamente. Por favor, intente de nuevo!'));
			}
		} else {
			$options = array('conditions' => array('Task.' . $this->Task->primaryKey => $id));
			$this->request->data = $this->Task->find('first', $options);
		}
		$users = $this->Task->User->find('list');
		$proyects = $this->Task->Proyect->find('list');
		$this->set(compact('users', 'proyects'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Task->id = $id;
		if (!$this->Task->exists()) {
			throw new NotFoundException(__('Invalid task'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Task->delete()) {
			$this->Flash->success(__('Tarea eliminada.'));
		} else {
			$this->Flash->error(__('La tarea no se elimino correctamente. Por favor, intente de nuevo!'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php


	class PrincipalsController extends AppController{

		var $uses = array('Task', 'User', 'Order', 'Note');



		public function index() {
        $tareas = $this->Task->find('all');
        $this->set('tasks', $tareas);
		$this->layout="principal";
		}


		public function delete($id = null) {
			$this->Task->id = $id;
			if (!$this->Task->exists()) {
				throw new NotFoundException(__('Invalid task'));
			}
			$this->request->allowMethod('post', 'delete');
			if ($this->Task->delete()) {
				$this->Flash->success(__('La tarea ha sido eliminada.'));
			} else {
				$this->Flash->error(__('The task could not be deleted. Please, try again.'));
			}
			return $this->redirect(array('action' => 'index'));
		}


		public function addo($proyect_id,$user_id,$task_id) {
			$proyectinfo=$this->Order->Proyect->findById($proyect_id);
			$this->set('proyectinfoadd',$proyectinfo);
			$userinfo=$this->Order->User->findById($user_id);
			$this->set('userinfoadd',$userinfo);
			$taskinfo=$this->Task->findById($task_id);
			$this->set('taskinfoadd',$taskinfo);


			if ($this->request->is('post')) {
				$this->Order->create();
				$texto = $this->request->data['Order']['description'];
				$this->request->data['Order']['description'];
				if ($this->Order->save($this->request->data)) {
					$this->Flash->success(__('The order has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Flash->error(__('The order could not be saved. Please, try again.'));
				}

			}

			$users = $this->Order->User->find('list');
			$statuses = $this->Order->Status->find('list');
			$proyects = $this->Order->Proyect->find('list');
			$this->set(compact('users', 'statuses', 'proyects'));
	    $this->layout="principal";
		}


		public function indexn(){
			$notas = $this->Note->find('all');
			$this->set('notes', $notas);

		   $this->layout="principal";
		}


		public function addn(){
			if ($this->request->is('post')) {
			$this->Note->create();
			$texto = $this->request->data['Note']['content'];
			$this->request->data['Note']['content']="<pre>".$texto."</pre>";
			if ($this->Note->save($this->request->data)) {
				$this->Flash->success(__('The note has been saved.'));
				return $this->redirect(array('action' => 'indexn'));
			} else {
				$this->Flash->error(__('The note could not be saved. Please, try again.'));
			}
			}
			$users = $this->Note->User->find('list');
			$this->set(compact('users'));

			$this->layout="principal";
		}

		public function deleten($id = null) {
		$this->Note->id = $id;
		if (!$this->Note->exists()) {
			throw new NotFoundException(__('Invalid note'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Note->delete()) {
			$this->Flash->success(__('La nota ha sido eliminada correctamente'));
		} else {
			$this->Flash->error(__('The note could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'indexn'));
	}

		

	}

?>
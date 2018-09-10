<?php

	class PrincipalsController extends AppController{

		var $users = ('Task');


		public function indexT() {

		$user = $this->Task->find('all');
		$this->set('tasks', $user);

		$this->layout="principal";
		}
		


		public function add(){

			if ($this->request->is('post')) {
				$this->Task->create();
				$texto = $this->request->data['Task']['description'];
				$this->request->data['Task']['description']="<pre>".$texto."</pre>";

				if ($this->Task->save($this->request->data)) {
					$this->Flash->success(__('The task has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Flash->error(__('The task could not be saved. Please, try again.'));
				}
			}

			$users = $this->Task->User->find('list');
			$proyects = $this->Task->Proyect->find('list');
			$this->set(compact('users', 'proyects'));
			$this->layout="principal";
		}

	}

?>

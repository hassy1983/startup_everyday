<?php
App::uses('AppController', 'Controller');
/**
 * Ideas Controller
 *
 * @property Idea $Idea
 */
class IdeasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
	    $this->paginate = array('order' => 'id DESC');
		$this->Idea->recursive = 0;
		$this->set('ideas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Idea->id = $id;
		if (!$this->Idea->exists()) {
			throw new NotFoundException(__('Invalid idea'));
		}
		$this->set('idea', $this->Idea->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('ajax')) {
			$this->Idea->create();
			if ($this->Idea->save($this->request->data)) {
				$this->Session->setFlash(__('The idea has been saved'), 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The idea could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
			}
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('ajax')) {
			throw new MethodNotAllowedException();
		}
		$this->Idea->id = $id;
		if (!$this->Idea->exists()) {
			throw new NotFoundException(__('Invalid idea'));
		}
		if ($this->Idea->delete()) {
		    $this->Session->setFlash(__('Idea deleted'), 'default', array('class' => 'alert alert-success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Idea was not deleted'), 'default', array('class' => 'alert alert-error'));
		$this->redirect(array('action' => 'index'));
	}
}

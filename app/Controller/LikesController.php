<?php
App::uses('AppController', 'Controller');
/**
 * Likes Controller
 *
 * @property Like $Like
 */
class LikesController extends AppController {

    var $layout = 'ajax';
    
/**
 * add method
 *
 * @return void
 */
	public function add($ideaId) {
	    $ideaId = intval($ideaId);
	    //if ($ideaId) return false;
		$this->log('add');
	    if ($this->request->is('ajax')) {
			$this->Like->create();
		    $this->request->data = array('idea_id' => $ideaId);
		    $this->log($this->request->data);
			if ($this->Like->save($this->request->data)) {
			    $this->log('like is saved ideaid:' . $ideaId);
			} else {
			    $this->log('like is NOT saved ideaid:' . $ideaId);
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
		$this->Like->id = $id;
		if (!$this->Like->exists()) {
			throw new NotFoundException(__('Invalid Like'));
		}
		if ($this->Like->delete()) {
		    $this->Session->setFlash(__('Like deleted'), 'default', array('class' => 'alert alert-success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Like was not deleted'), 'default', array('class' => 'alert alert-error'));
		$this->redirect(array('action' => 'index'));
	}
}

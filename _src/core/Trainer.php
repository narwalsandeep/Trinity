<?php

/**
 * Core_Trainer class.
 * 
 * @extends Core_I
 */
class Core_Trainer extends Core_I{

	/**
	 * init function.
	 * 
	 * @access public
	 * @return void
	 */
	public function init($checkLogin = true){
		
		$this->initI($checkLogin);
		
		// if admin send to admin module
		if($this->auth->id == '1'){
			$this->_redirect('/admin');
		}
		
		// if trainer send to trainer module
		if($this->auth->user_type == Model_DbTable_User::TRAINEE){
			$this->_redirect('/');
		}
		
		parent::layout('trainer');

		
	}
		
			
}

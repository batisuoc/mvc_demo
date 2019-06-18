<?php
/**
 * 
 */
class Error extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		//Hien ra trang error
		$this->view->render('error/index');
	}
}

?>
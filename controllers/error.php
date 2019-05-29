<?php
/**
 * 
 */
class Error extends Controller
{
	function __construct()
	{
		parent::__construct();
		echo "This is an ERROR !!!<br/>";
		$this->view->msg = "This page doesn't exists";
		$this->view->render('error/index');//Hien ra trang error
	}
}

?>
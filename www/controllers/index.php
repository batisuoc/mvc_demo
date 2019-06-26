<?php
/**
 * 
 */
class Index extends Controller
{
	function __construct()
	{
		parent::__construct();
		// echo "This is index controller.";
	}

	function index()
	{
		$this->view->render('index/index');
	}

	function details()
	{
		echo "THIS IS DETAILS FUNCTION";
		$this->view->render('index/index');
	}

}

?>
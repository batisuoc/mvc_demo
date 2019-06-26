<?php
/**
 * 
 */
class Login extends Controller
{
	function __construct()
	{
		parent::__construct();
		// echo "This is login controller.";
	}

	function index()
	{
		// echo Hash::create('md5', 'uoc', HASH_KEY);
		$this->view->render('login/index');
	}

	function run()
	{
		$this->model->run();
	}
}

?>
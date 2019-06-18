<?php
/**
 * 
 */
class Dashboard extends Controller
{
	function __construct()
	{
		parent::__construct();
		//Khoi tao phien session
		Session::init();
		//Kiem tra dang nhap
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			header('location: ../login');
			exit();
		}
	}

	function index()
	{
		$this->view->render('dashboard/index');
	}

	function logout()
	{
		Session::destroy();
		header('location: ../login');
		exit();
	}

}

?>
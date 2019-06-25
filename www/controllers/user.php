<?php
/**
 * 
 */
class User extends Controller
{
	function __construct()
	{
		parent::__construct();
		//Khoi tao phien session
		Session::init();
		//Kiem tra dang nhap va quyen cua user
        $logged = Session::get('loggedIn');
        $role = Session::get('role');

		if ($logged == false || $role != 'owner') {
			Session::destroy();
			header('location: ../login');
			exit();
		}
	}

	function index()
	{
        $this->view->userList = $this->model->userList();
        $this->view->render('user/index');
    }
    
    function create()
    {
        # code...
    }

    function edit($id)
    {
        # code...
    }

    function delete($id)
    {
        # code...
    }

}

?>
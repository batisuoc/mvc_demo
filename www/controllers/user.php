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
        $data = array();
        $data['username'] = $_POST['username'];
        $data['password'] = md5($_POST['password']);
        $data['role'] = $_POST['role'];
        
        $this->model->create($data);

        header('location: '.URL.'user');
    }

    function edit($id)
    {
        echo $id;
    }

    function delete($id)
    {
        echo $id;
    }

}

?>
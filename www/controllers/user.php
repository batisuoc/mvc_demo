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
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];
        
        $this->model->create($data);

        header('location: '.URL.'user');
    }

    function edit($id)
    {
        $this->view->user = $this->model->userSingleList($id);
        $this->view->render('user/edit');
    }

    function editSave($id)
    {
        $data = array();
        $data['id'] = $id;
        $data['username'] = $_POST['username'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];

        $this->model->editSave($data);
        header('location: '.URL.'user');
    }

    function delete($id)
    {
        $this->model->delete($id);
        header('location: '.URL.'user');
    }

}

?>
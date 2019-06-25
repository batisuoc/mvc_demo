<?php
/**
 * 
 */
class Login_Model extends Model {
	
	public function __construct() {
		parent::__construct();
	}

	public function run() {
		$stmt = $this->db->prepare("SELECT username, role FROM user WHERE username = :username AND password = MD5(:password)");
		$stmt->execute(array(
			'username' => $_POST['username'],
			'password' => $_POST['password'] 
		));
		$data = $stmt->fetch();

		$count =  $stmt->rowCount();
		if ($count > 0) {
			Session::init();
			//Neu da dang nhap thi gan mot bien session co gia tri bang true
			Session::set('role', $data['role']);
			Session::set('loggedIn', true);
			header('location: ../dashboard');
		} else {
			header('location: ../login');
		}
	}
}

?>
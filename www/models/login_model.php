<?php
/**
 * 
 */
class Login_Model extends Model {
	
	public function __construct() {
		parent::__construct();
	}

	public function run() {
		// $stmt = $this->db->prepare("SELECT username, role FROM user WHERE username = :username AND password = :password");
		// $stmt->execute(array(
		// 	'username' => $_POST['username'],
		// 	'password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY) 
		// ));
		$result = $this->db->select("SELECT username, role FROM user WHERE username = :username AND password = :password",
								    array(
										'username' => $_POST['username'],
										'password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY) 
								    ));

		// $count = $stmt->rowCount();
		if ($result != false) {
			Session::init();
			//Neu da dang nhap thi gan mot bien session co gia tri bang true
			Session::set('role', $result['role']);
			Session::set('loggedIn', true);
			header('location: ../dashboard');
		} else {
			header('location: ../login');
		}
	}
}

?>
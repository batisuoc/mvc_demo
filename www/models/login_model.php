<?php
/**
 * 
 */
class Login_Model extends Model {
	
	public function __construct() {
		parent::__construct();
		// echo md5('uoc');
	}

	public function run() {
		$stmt = $this->db->prepare("SELECT username FROM user WHERE username = :username AND password = MD5(:password)");
		$stmt->execute(array(
			'username' => $_POST['username'],
			'password' => $_POST['password'] 
		));
		// $data = $stmt->fetchAll();
		// print_r($data);
		// echo $stmt->rowCount();
		$count =  $stmt->rowCount();
		if ($count > 0) {
			Session::init();
			//Neu da dang nhap thi gan mot bien session co gia tri bang true
			Session::set('loggedIn', true);
			header('location: ../dashboard');
		} else {
			header('location: ../login');
		}
	}
}

?>
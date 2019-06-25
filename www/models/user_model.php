<?php
/**
 * 
 */
class User_Model extends Model {
	
	public function __construct() {
		parent::__construct();
	}

	public function userList() {
        $stmt = $this->db->prepare("SELECT id, username, role FROM user");
        $stmt->execute();
        return $stmt->fetchAll();
	}

	public function create($data) {
		$stmt = $this->db->prepare("INSERT INTO user(username, password, role) VALUES (:username, :password, :role)");
		$stmt->execute(array(
			'username' => $data['username'],
			'password' => $data['password'],
			'role' => $data['role']
		));
	}
}

?>
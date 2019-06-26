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

	public function userSingleList($id)
	{
		$stmt = $this->db->prepare("SELECT id, username, role FROM user WHERE id = :id");
        $stmt->execute(array(
			'id' => $id
		));
        return $stmt->fetch();
	}

	public function create($data) {
		$stmt = $this->db->prepare("INSERT INTO user(username, password, role) VALUES (:username, :password, :role)");
		$stmt->execute(array(
			'username' => $data['username'],
			'password' => $data['password'],
			'role' => $data['role']
		));
	}

	public function editSave($data) {
		$stmt = $this->db->prepare("UPDATE user SET username = :username, password = MD5(:password), role = :role WHERE id = :id");
		$stmt->execute(array(
			'id' => $data['id'],
			'username' => $data['username'],
			'password' => $data['password'],
			'role' => $data['role']
		));
	}

	public function delete($id) {
		$stmt = $this->db->prepare("DELETE FROM user WHERE id = :id");
		$stmt->execute(array(
			'id' => $id
		));
	}
}

?>
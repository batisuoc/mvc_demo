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
		$this->db->insert('user', array(
			'username' => $data['username'],
			'password' => Hash::create('md5', $data['password'], HASH_PASSWORD_KEY),
			'role' => $data['role']
		));
	}

	public function editSave($data) {
		$postEditData = array(
			'username' => $data['username'],
			'password' => Hash::create('md5', $data['password'], HASH_PASSWORD_KEY),
			'role' => $data['role']
		);

		$this->db->update('user', "id = {$data['id']}", $postEditData);
	}

	public function delete($id) {
		$this->db->delete('user', "id = $id");
	}
}

?>
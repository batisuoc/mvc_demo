<?php
/**
 * 
 */
class User_Model extends Model {
	
	public function __construct() {
		parent::__construct();
	}

	public function userList() {
		return $this->db->select("SELECT id, username, role FROM user");
	}

	public function userSingleList($id)
	{
		return $this->db->select("SELECT id, username, role FROM user WHERE id = :id", array('id' => $id));
	}

	public function create($data) {
		$this->db->insert('user', array(
			'username' => $data['username'],
			'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
			'role' => $data['role']
		));
	}

	public function editSave($data) {
		$postEditData = array(
			'username' => $data['username'],
			'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
			'role' => $data['role']
		);

		$this->db->update('user', "id = {$data['id']}", $postEditData);
	}

	public function delete($id) {
		//Kiem tra quyen cua user dang dang nhap co phai la owner khong, neu la owner thi se khong duoc phep xoa accout cua chinh minh
		$data = $this->db->select("SELECT role FROM user WHERE id = :id", array('id' => $id));
		if ($data['role'] == 'owner') {
			return false;
		}

		$this->db->delete('user', "id = $id");
	}
}

?>
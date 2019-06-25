<?php
/**
 * 
 */
class User_Model extends Model {
	
	public function __construct() {
		parent::__construct();
	}

	public function userList() {
        $stmt = $this->db->prepare("SELECT * FROM user");
        $stmt->execute();
        return $stmt->fetchAll();
	}
}

?>
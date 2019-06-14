<?php
/**
 * 
 */
class Login_Model extends Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{
		try {
			$stmt = $this->db->prepare("SELECT id FROM user WHERE username = :username AND password = :password");
			$stmt->execute(array(
				'username' => $_POST['username'],
				'password' => $_POST['password'] 
			));
			$data = $stmt->fetchAll();
			print_r($data);
		} catch (PDOException $e) {
			die("ERROR: Could not able to execute $sql. ");
		}
	}
}

?>
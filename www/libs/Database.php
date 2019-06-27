<?php
/**
 * 
 */
class Database extends PDO {
	
	function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS) {
		try {
			parent::__construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME, $DB_USER, $DB_PASS);
		} 
		catch(PDOException $e) {
			die("ERROR: Could not connect. " . $e->getMessage());
		}
	}

	/**
	 * @param string $table A name of table to insert
	 * @param array $data An array of data we want to insert
	 */
	public function insert($table, $data)
	{
		//Noi cac key trong $data thanh mot chuoi nhat dinh
		$fieldNames = implode(',', array_keys($data));
		$fieldValues = ':' . implode(', :', array_keys($data));

		$stmt = $this->prepare("INSERT INTO user($fieldNames) VALUES ($fieldValues)");
		//Gan gia tri cua tung value vao key trong query
		foreach ($data as $key => $value) {
			$stmt->bindValue($key, $value);
		}
		
		$stmt->execute();
	}

	/**
	 * @param string $table A name of table to insert
	 * @param string $where The WHERE conditions
	 * @param array $data An array of data we want to insert
	 */
	public function update($table, $where, $data)
	{
		$fieldDetails = NULL;
		//Xu ly chuoi cho phan query UPDATE va SET
		foreach ($data as $key => $value) {
			$fieldDetails .= "$key = :$key, ";
		}
		$fieldDetails = rtrim($fieldDetails, ", ");

		$stmt = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
		
		foreach ($data as $key => $value) {
			$stmt->bindValue($key, $value);
		}
		
		$stmt->execute();
	}

	public function delete($table, $where)
	{
		$stmt = $this->prepare("DELETE FROM $table WHERE $where");
		$stmt->execute();
	}
}

?>
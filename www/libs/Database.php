<?php
/**
 * 
 */
class Database extends PDO
{
	
	function __construct()
	{
		try 
		{
			parent::__construct('mysql:host=mvcdemo_db_1;port:3306;dbname=mvc', 'user', 'test');
		} 
		catch(PDOException $e) 
		{
			die("ERROR: Could not connect. " . $e->getMessage());
		}
		
	}
}

?>
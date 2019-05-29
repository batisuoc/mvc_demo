<?php
/**
 * 
 */
class Controller
{	
	function __construct()
	{
		echo "This is controller parent class.<br/>";
		$this->view = new View();
	}
}

?>
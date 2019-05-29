<?php
/**
 * 
 */
class View
{
	
	function __construct()
	{
		echo "View class<br/>";
	}

	public function render($name)
	{
		require 'views/' . $name . '.php';
	}
}

?>
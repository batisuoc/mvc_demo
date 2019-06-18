<?php
/**
 * 
 */
class View
{
	
	function __construct()
	{
		# code ...
	}

	//Hien ra giao dien cua controller do
	public function render($name, $noInclude = false)
	{
		if ($noInclude == true) {
			require 'views/' . $name . '.php';
		}
		else {
			require 'views/header.php';
			require 'views/' . $name . '.php';
			require 'views/footer.php';	
		}
		
	}
}

?>
<?php
/**
 * 
 */
class Help extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		echo "This is help controller <br/>";
	}

	public function other($arg = false)
	{
		echo "function other in help controller. <br/>";
		echo "Option : " . $arg . " <br/>";

		require 'models/help_model.php';
		$model = new Help_Model();
	}
}

?>
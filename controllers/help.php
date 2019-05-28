<?php

/**
 * 
 */
class Help
{
	
	function __construct()
	{
		echo "This is help controller <br/>";
	}

	public function other($arg = false)
	{
		echo "function other in help controller. <br/>";
		echo "Option : " . $arg . " <br/>";
	}
}

?>
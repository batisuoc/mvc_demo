<?php
/**
 * 
 */
class Controller
{	
	function __construct()
	{
		// echo "This is controller parent class.<br/>";
		$this->view = new View();
	}

	public function loadModel($name)
	{
		//Kiem tra co file model do khong, neu co thi tao mot doi tuong model moi
		$path = 'models/' . $name . '_model.php';
		if (file_exists($path)) {
			require $path;
			$modelName = $name . '_Model';
			$this->model = new $modelName();
		}
	}
}

?>
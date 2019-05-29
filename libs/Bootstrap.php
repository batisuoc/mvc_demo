<?php
/**
 * 
 */
class Bootstrap
{
	
	function __construct()
	{
		$url = $_GET['url'];
		//Xoa khoang trang thua o ben phai chuoi
		$url = rtrim($url, '/');
		//Tach tung action trong chuoi thanh tung phan tu trong mang
		$url = explode('/', $url);
		// print_r($url);

		$file = 'controllers/' . $url[0] . '.php';
		if (file_exists($file)) {
			require $file;
		}
		else {
			// throw new Exception("The file : $file does not exist. ");
			require 'controllers/error.php';
			$controller = new Error();
			return false;//Hien thi trang error roi dung lai
		}

		$controller = new $url[0];

		if (isset($url[2])) {
			$controller->{$url[1]}($url[2]);	
		}
		else {
			if (isset($url[1])) {
				$controller->{$url[1]}();	
			}	
		}
	}
}

?>
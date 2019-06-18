<?php
/**
 * 
 */
class Bootstrap
{
	
	function __construct() {

		$url = isset($_GET['url']) ? $_GET['url'] : null;
		//Xoa khoang trang thua o ben phai chuoi
		$url = rtrim($url, '/');
		//Tach tung action trong chuoi thanh tung phan tu trong mang
		$url = explode('/', $url);

		//Neu khong co action nao thi chuyen ve trang index
		if (empty($url[0])) {
			require 'controllers/index.php';
			$controller = new Index();
			$controller->index();
			return false;
		}

		//Khoi tao controller theo phan tu thu nhat tren mang url
		$file = 'controllers/' . $url[0] . '.php';
		if (file_exists($file)) {
			require $file;
		}
		else {
			//Hien thi trang error roi dung lai
			$this->error();
		}
		//Khoi tao controller
		$controller = new $url[0];
		//Khoi tao model trong controller
		$controller->loadModel($url[0]);
		
		//Neu co param o url[2] thi truyen param vao function url[1] neu co
		if (isset($url[2])) {
			if (method_exists($controller, $url[1])) {
				$controller->{$url[1]}($url[2]);
			}
			else {
				$this->error();
			}
		}
		else {
			//Truy cap vao function url[1] cua controller url[0] neu co
			if (isset($url[1])) {
				if (method_exists($controller, $url[1])) {
					$controller->{$url[1]}();
				}
				else {
					$this->error();
				}
			}
			else {
				$controller->index();
			}	
		}
	}

	function error() {
		require 'controllers/error.php';
		$controller = new Error();
		$controller->index();
		return false;
	}
}

?>
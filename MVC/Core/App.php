<?php

class App{
	protected $controller="Home";
	protected $action="TrangChu";
	protected $params=[];
	function __construct(){
		$arr = $this->urlProcessor();
		//xử lý controller
		if(file_exists("./MVC/Controllers/".$arr[0].".php")){
			$this->controller=$arr[0];
			unset($arr[0]);
		}
		require_once "./MVC/Controllers/".$this->controller.".php";
		$this->controller = new $this->controller;  //khởi tạo đổi tượng để cho hàm Home.php có thể chạy được


		//xử lý action
		if(isset($arr[1])){
			if(method_exists($this->controller,$arr[1])){
				$this->action = $arr[1];
			}
			unset($arr[1]);
		}
		
		//xử lý params
		$this->params=$arr?array_values($arr):[];
		call_user_func_array([$this->controller,$this->action],$this->params); //goi ham de chay
	}

	function urlProcessor(){   //xử lý url: cắt từng phần tử đưa vào mảng
		if(isset($_GET["url"])){
			$url=filter_var(trim($_GET["url"],"/"));
			$url=explode("/", $url);
			return $url;
		}
	}
}
?>
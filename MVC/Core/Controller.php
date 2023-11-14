<?php
class Controller{
	public function model($model){
		require_once "./MVC/Models/".$model.".php";
		return new $model;
	}
	public function view($view,$data=[]){
        require_once "./MVC/views/".$view.".php";
    }
	public function phanquyen($controller,$data=[]){
        require_once "./MVC/Controllers/".$controller.".php";
    }
	public function view_dangnhap($view,$data=[]){
        require_once "./MVC/views/Pages/".$view.".php";
    }
}
?>
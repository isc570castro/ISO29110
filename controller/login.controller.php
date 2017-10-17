<?php
require_once 'model/login.php';
class LoginController{

	private $model;

	public function __CONSTRUCT(){
		$this->model = new Login();
	}

	public function Index(){
		require_once 'view/login.php';
	}

	public function Acceder(){
		$log = new Login();
		$log->usuario=$_POST['usuario'];
		$log->password=$_POST['password'];
		$consulta=$this->model->Comprueba($log);
		if($consulta==null){
			$error=true;
			$mensaje="Acceso incorrecto";
			require_once "view/login.php";
		}else{
			header("Location: index.php?c=inicio");
		}
	}
}
?>
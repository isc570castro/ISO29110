<?php
require_once 'model/usuario.php';
class UsuarioController{

	private $model;

	public function __CONSTRUCT(){
		$this->model = new Usuario();
	}

	public function Index(){
		$usuarios=true;
		$page="view/usuarios.php";
		require_once 'view/index.php';
	}

}
?>
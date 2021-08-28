<?php 
class MvcController{
	public function template(){
		include "views/user/template.php";
	}

	public function enlacesPaginasController(){
		if(isset($_GET["q"])){
			$enlaces = $_GET["q"];
			setcookie ("ult", $enlaces);
		}else{
			$enlaces = null;
		}
		if(isset($_GET["s"])){
			$s = $_GET["s"];
		}else{
			$s = null;
		}
		$response = EnlacesPaginas::enlacesPaginasModel($enlaces, $s);
		include $response;
	}
}
?>
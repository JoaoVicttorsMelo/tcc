<?php 
session_start();
if (isset($_SESSION['Logado'])) {
	header("Location: menu.php");
die();
}
include_once("conexao.php");
if ((isset($_POST["User"])) && (isset($_POST["senha"]))) {
	$Usuario= mysqli_real_escape_string($conn,$_POST['User']);
	$senha= mysqli_real_escape_string($conn,$_POST['senha']);
	$sql= "SELECT*FROM tcc WHERE Nome= '$Usuario' AND senha='$senha' LIMIT 1";
	$result= mysqli_query($conn,$sql);
	$resultado= mysqli_fetch_assoc($result);


	}else{
		$_SESSION['LoginErro']="Usuario ou senha inválido";
		header("location: index.php");
	}

	if (empty($resultado)) {
		$_SESSION['LoginErro']="Usuario ou senha inválido";
	header("location:index.php");

	}elseif (isset($resultado)) {

		$_SESSION['Logado']= true;
		header("location: menu.php");
	}else
	{
	$_SESSION['LoginErro']="Usuario ou senha inválido";
	header("location:index.php");
	}
	



 ?>
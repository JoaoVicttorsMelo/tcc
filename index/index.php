<?php 
session_start();

if (isset($_SESSION['Logado'])) {
	header("location: menu.php");
	die();
}
	 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>

	<link rel="stylesheet" type="text/css" href="styles/style.css">
 	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">

	<footer>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jav.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</footer>

</head>
<body>

	<div class="login-box">	
	<h1>Login</h1>

<form class="form-signin" action="validar.php" method="POST">


	<div class="textbox" id="btn_Logar">
		<i class="fa fa-user" aria-hidden="true"></i>
		<input type="text" name="User"  placeholder="Digite seu nome" id="user">
	</div>

	<div class="textbox">
	<i class="fa fa-building" aria-hidden="true"></i>
		<input type="text"   name="senha"   placeholder="Digite seu ID" id="senha">
	</div>
 <button type="submit" class="btn btn-transparent mb-2 text-light border border-warning" id="btn">Logar</button>

<p class="text-center text-danger">

	<?php 
if(isset($_SESSION['LoginErro'])){
	echo $_SESSION['LoginErro'];
   unset($_SESSION['LoginErro']);
}
	 ?>
</p>

</div>
</form>
</div>

</body>
</html>
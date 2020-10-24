<?php 
$servidor= "Localhost";
$usuario= "root";
$senha= "usbw";
$dbname= "tcc";

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

if(!$conn){
	die("falha na conexão:".mysqli_connect_error());
}else{

}
 ?>

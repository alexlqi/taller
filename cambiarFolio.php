<?php session_start(); 
var_dump($_SESSION);

if(isset($_POST["a"])){
$id=$_POST["id"];
	switch($_POST["a"]){
		case 'modif':
?>
<!--/*Modificar*/-->
<div></div>
<!--/*Modificar*/-->
<?php
		break;
		case 'del':
?>
<!--/*Eliminar*/-->


<!--/*Eliminar*/-->
<?php
		break;
	}
}
?>
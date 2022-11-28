<?php
session_start();    //Começa a sessão
if(!isset($_SESSION["Email"])){   //Se a Sessão Email não existir
	header('Location: index.php');  //Redirecionar para o index.php
}
?>

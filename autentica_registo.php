<?php
//Ligar a base de dados
include("conexao.php");
//Receber as variáveis do array superglobal POST)
$Username = $_POST['user'];
$Email = $_POST['email'];
$Senha = $_POST['senha'];
$Senha = MD5($Senha);
$Nome = $_POST['nome'];
$Idade = $_POST['idade'];
$GreenCoin = 0;
$Estado = 1;
$imagem = "user.png";

$sql = "SELECT Email FROM utilizador WHERE Email = '$Email' OR User = '$Username'";
//Query para verificar se o Email ou o user já existem

$ligaBD->next_result();
$resultado = mysqli_query($ligaBD,$sql);
$num_linhas = mysqli_num_rows($resultado);
//Guarda o nº de registos devolvidos

//Se forem devolvidos ZERO registos, então não existe registo igual na BD
if($num_linhas ==0){
	
	$sql = "INSERT INTO utilizador(`User`,`Email`,`Senha`,`Nome`,`Idade`,`Imagem`,`Greencoin`,`Criacao`,`Estado`)
	VALUES ('$Username','$Email','$Senha','$Nome','$Idade','$imagem','$GreenCoin',NOW(),'$Estado') ";
	//Query que vai inserir os dados de registo
	
	$faz_insere_registo = mysqli_query($ligaBD,$sql);
	$ligaBD->next_result();

	if (!$faz_insere_registo){
		echo "Erro a inserir registo!";
		exit;
	}
	else{

		session_start();
		$_SESSION['Email'] = $Email;
		header('Location: logout.php'); //Obriga o Utilizador a fazer login depois do registo
	}

}else{

	#header("Location: registar.php?erro=5"); //Mostra a mensagem de Erro 5 
}

?>

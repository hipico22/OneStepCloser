<?php
$User = $_POST["utilizador"];		//Recebe os valores do formulário de login
$Password = $_POST["senha"];
$Password = Md5 ($Password);  //Md5 encripta a senha

include("conexao.php"); //liga e escolhe base dados

$sql = "SELECT * From `utilizador` Where User ='".$User."' and Senha = '".$Password."'";
//Query à tabela utilizadores para verificar se existe o utilizador

//3 passo faz pergunta a tabela 'msqli_query server pa fazer pergunta'

$existe = mysqli_query($ligaBD,$sql);	//Executa a query
$nregistos=mysqli_num_rows($existe);	//Conta o número de registos devolvidos
$registos=mysqli_fetch_array($existe);	//Recebe o valor de cada campo

//Receber os valores da base de dados
$Email = $registos['Email'];
$ID = $registos['Id_Utilizador'];
$User = $registos['User'];

if ($nregistos==1){ //Se o utilizador existir

	session_start(); //Criar sessão para guardar o id até ao logout
	$_SESSION['Email'] = $Email;
	$_SESSION['Id_Utilizador'] = $ID;
	$_SESSION['User'] = $User;

	header('Location: main.php'); //Muda para a página main.php
}else{
	header('Location: index.php?erro=4'); //Muda para a página index.php com a mensagem de erro 4
	session_start();
	$_SESSION['erro'] = 4; //Criação da sessão erro 4
	echo 'Erro ao registar utilizador!';
}
?>
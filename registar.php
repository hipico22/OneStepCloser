<!DOCTYPE html>
<html lang="pt-pt">
<?php include 'php/head.php'?>
<?php include 'conexao.php'?>
<body>

<section class="fwh-slide" style="background-size: cover;background-repeat: no-repeat;background-image: url('img/bg1.jpg');">
<div class="slide1--registar">
<div class="slide1--titulo-registar">
<h1 style="font-family:verdana; color: white;text-align: center; font-size: 80px;">OneStepCloser</h1>
</div>
<form style="color:white;top:0px;" method="POST" action="autentica_registo.php">
        <label>Nome</label><br>
        <input type="text" id="nome" name="nome"><br>
        <label>User</label><br>
        <input type="text" id="user" name="user"><br>
        <label>Senha</label><br>
        <input type="text" id="senha" name="senha"><br>
        <label>Email</label><br>
        <input type="text" id="email" name="email"><br>
        <label>Idade</label><br>
        <input type="number" id="idade" name="idade"><br>  

        <div class="button-area3">
<button type="submit" class="button button3">Registar</button>
</div>
<nav class="voltar">
    <a href="index.php">Voltar</a>
</nav>  
    </form>

</div>
</section>
</body>
</html>

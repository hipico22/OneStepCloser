<!DOCTYPE html>
<html lang="pt-pt">
<?php include 'php/head.php'?>
<?php include 'conexao.php'?>
<body>

<section class="fwh-slide" style="background-size: cover;background-repeat: no-repeat;background-image: url('img/bg1.jpg');">
<div class="slide1--login">
<div class="slide1--titulo-registar">
<h1 style="font-family:verdana; color: white;text-align: center; font-size: 80px;">OneStepCloser</h1>
</div>
<form style="color:white;top:0px;" method="POST" action="autentica_login.php">
        <label>User</label><br>
        <input type="text" id="user" name="user"><br>
        <label>Senha</label><br>
        <input type="text" id="senha" name="senha"><br>

        <div class="button-area-login">
<button type="submit" class="button button3">Login</button>
</div>
<nav class="voltar--login">
    <a href="index.php">Voltar</a>
</nav>  
    </form>

</div>
</section>
</body>
</html>

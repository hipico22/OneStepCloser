<?php 
// Liga ao MySQL 'localhost','root'
$ligaBD = mysqli_connect('localhost','root');

if(!$ligaBD){
    echo "<br>Erro: Não foi possivel escolher ou estabelecer ligação com o MySQL";
  exit;
}
// Liga a BD
$escolhaBD = mysqli_select_db($ligaBD,'onestepcloser');
if (!$escolhaBD){
    echo "<br>Erro: Ao escolher a BD";
    exit;
  }
  mysqli_set_charset($ligaBD,"utf8");
?>
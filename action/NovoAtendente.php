<?php 
session_start();
require "Conexao.php";
$nomea = $_POST['nomea'];
$emaila = $_POST['emaila'];
$telefonea = $_POST['telefonea'];
$cpfa = $_POST['cpfa'];
$sexoa = $_POST['sexoa'];
$cepa = $_POST['cepa'];
$enderecoa = $_POST['enderecoa'];
$logina = $_POST['logina'];
$senhaa = $_POST['senhaa'];
$senha2a = $_POST['senha2a'];

if ($senha2a != $senhaa) {
    $_SESSION['msg'] = "Senhas não conferem!";
    header('Location: PaginaCadastroAtendente.php');
    die;
}
$sql = "INSERT INTO `atendente` (`nomea` ,`emaila`,`telefonea`,`cpfa`,`sexoa`,`cepa`,`enderecoa`,`logina`,`senhaa`) VALUES ('$nomea' ,'$emaila','$telefonea','$cpfa','$sexoa','$cepa','$enderecoa','$logina','$senhaa')";

if ($conexao->query($sql) === TRUE) {
    $_SESSION['msg'] = "Cadastro realizado com sucesso!";
    header('Location: PaginaCadastroAtendente.php');
    die;
} else {
    $_SESSION['msg'] = "Erro: " . $conexao->error;
    header('Location: PaginaCadastroAtendente.php');
    die;
}



?>
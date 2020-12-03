<?php 
session_start();
require "Conexao.php";
$nomee = $_POST['nomee'];


$sql = "INSERT INTO especializacao (`nomee` ) VALUES ('$nomee')";

if ($conexao->query($sql) === TRUE) {
    $_SESSION['msg'] = "Cadastro realizado com sucesso!";
    header('Location: PaginaCadastroEspecializacao.php');
} else {
    $_SESSION['msg'] = "Erro: " . $conexao->error;
    header('Location: PaginaCadastroEspecializacao.php');
}



?>
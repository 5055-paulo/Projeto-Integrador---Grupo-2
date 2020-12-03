<?php 
session_start();
require "Conexao.php";

global $conexao;

$login = $_POST['login'];
$senha = $_POST['senha'];

$sqlAtendente = "SELECT * FROM `atendente` WHERE `logina`='$login' AND `senhaa`='$senha'";
$sqlMedico = "SELECT * FROM `medico` WHERE `loginm`='$login' AND `senham`='$senha'";

$resultAtendente = $conexao->query($sqlAtendente);
$resultMedico = $conexao->query($sqlMedico);

if ($login == "administrador" && $senha == "adm123") {
    $_SESSION['login'] = $row['login'];
    $_SESSION['tipo'] = 'adm';
    $_SESSION['senha'] = $row['senha'];
    header('Location: PaginaAdministrador.php');
    die;
}

if ($resultAtendente->num_rows > 0) {
    // output data of each row
    while($row = $resultAtendente->fetch_assoc()) {
        $_SESSION['login'] = $row['logina'];
        $_SESSION['tipo'] = 'atendente';
        $_SESSION['senha'] = $row['senhaa'];
        header('Location: PaginaAtendente.php');
        die;
    }
}

if ($resultMedico->num_rows > 0) {
    // output data of each row
    while($row = $resultMedico->fetch_assoc()) {
        $_SESSION['login'] = $row['loginm'];
        $_SESSION['tipo'] = 'medico';
        $_SESSION['senha'] = $row['senham'];
        header('Location: PaginaMedico.php');
        die;
    }
}

$_SESSION['msg'] = "Senha ou Usuario incorreta";
header('Location: Login.php');

?>
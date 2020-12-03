<?php 
session_start();
require "Conexao.php";

$nomem = $_POST['nomem'];
$emailm = $_POST['emailm'];
$telefonem = $_POST['telefonem'];
$cpfm = $_POST['cpfm'];
$sexom = $_POST['sexom'];
$cepm = $_POST['cepm'];
$enderecom = $_POST['enderecom'];
$especializacaom = $_POST['especializacaom'];
$loginm = $_POST['loginm'];
$senham = $_POST['senham'];
$senha2m = $_POST['senha2m'];

if ($senha2m != $senham) {
    $_SESSION['msg'] = "Senhas não conferem!";
    header('Location: PaginaCadastroMedico.php');
    die;
}

$sql = "INSERT INTO medico (`nomem` ,`emailm`,`telefonem`,`cpfm`,`sexom`,`cepm`,`enderecom`,`especializacaom`,`loginm`,`senham`) VALUES ('$nomem' ,'$emailm','$telefonem','$cpfm','$sexom','$cepm','$enderecom','$especializacaom','$loginm','$senham')";

if ($conexao->query($sql) === TRUE) {
    $_SESSION['msg'] = "Cadastro realizado com sucesso!";
    header('Location: PaginaCadastroMedico.php');
} else {
    $_SESSION['msg'] = "Erro: " . $conexao->error;
    header('Location: PaginaCadastroMedico.php');
}



?>
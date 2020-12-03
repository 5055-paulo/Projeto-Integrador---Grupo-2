<?php 
session_start();
require "Conexao.php";
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$tplano = $_POST['tplano'];
$ncarteirinha = $_POST['ncarteirinha'];
$psaude = $_POST['psaude'];
$npagante = $_POST['npagante'];
$fpag = $_POST['fpag'];
$especializacao = $_POST['especializacao'];
$medico = $_POST['medico'];
$dataagend = $_POST['dataagend'];

$sql =  "INSERT INTO `agendamento` (`nome` ,`email`,`telefone`,`cpf`,`tplano`,`ncarteirinha`,`psaude`,`npagante`,`fpag`,`especializacao`,`medico`,`dataagend`) VALUES ('$nome' ,'$email','$telefone','$cpf','$tplano','$ncarteirinha','$psaude','$npagante','$fpag','$especializacao','$medico','$dataagend')";

if ($conexao->query($sql) === TRUE) {
    $_SESSION['msg'] = "Consulta Marcada com sucesso!";
    header('Location: PaginaAgendamento.php');
} else {
    $_SESSION['msg'] = "Erro: " . $conexao->error;
    header('Location: PaginaAgendamento.php');
}



?>
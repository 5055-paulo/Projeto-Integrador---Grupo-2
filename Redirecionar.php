<?php
switch ($_GET['acao']) {
    case 'cadastrarAgendamento':
        require 'action/NovoAtendimento.php';
        break;
    case 'cadastrarAtendente':
        require 'action/NovoAtendente.php';
        break;
    case 'cadastrarMedico':
        require 'action/NovoMedico.php';
        break;
    case 'cadastrarEspecializacao':
        require 'action/NovaEspecializacao.php';
    case 'login':
        require 'action/Login.php';
}
?>
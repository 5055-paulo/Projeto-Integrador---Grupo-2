<html>

<head>
<script src="https://kit.fontawesome.com/6ece2f8629.js" crossorigin="anonymous"></script>
<meta charset="UTF-8"/>
<title>ProjetoIntegrador</title>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
--primary-color: #D96AA7;
--secondary-color: #3BE4FF;
--complimentary-color: #88BFB5;
--contrast-color: #F2E527;
--light-color: #D2A9D9;
}

.container {
  background: #191919;
  min-height: 100vh;
  font-family: Montserrat, sans-serif;
}

nav a {
    font-size: 40px;
    color: #fff;
    text-decoration: none;
    padding: 20px;
    text-align: center;
}

nav {
    position: fixed;
    left: 0;
    z-index: 50;
    display: flex;
    justify-content: space-around;
    flex-direction: column;
    height: 100vh;
    background: var(--secondary-color);
}

section {
    position: absolute;
    top: 0;
    height: 100vh;
    width: 0;
    opacity: 0;
    transition: all ease-in .5s;
    display: flex;
    justify-content: center;
    align-items: center;
} 

section h1 {
    color: #fff;
    font-size: 50px;
    text-transform: uppercase;
    opacity: 0;
}

section:target {
    opacity: 1;
    position: absolute;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 10;
}

section:target h1 {
    opacity: 0;
    animation: 2s fadeIn forwards .5s;
}

@keyframes fadeIn {
    100% { opacity:1 }
}

</style>

</head>

<body>
<nav>
   <a href="PaginaAtendente.php"><i class="fas fa-home"></i></i></a>
   <a href="PaginaAgendamento.php"><i class="far fa-calendar-plus"></i></i></a>
   <a href="PaginaPesquisa.php"><i class="fas fa-search"></i></i></a>
   <a href="">___</i></a>
   <a href="PaginaSobre.php"><i class="fas fa-info-circle"></i></i></a>
   <a href="Login.php"><i class="fas fa-sign-out-alt"></i></i></a>
</nav>

<h1 style="text-align:center;font-family: Calibri;">SOBRE</h1>
<p style="text-align:center;font-family: Calibri;font-size: 20px;">
Projeto Integrador<br><br>
Alunos:<br><br>
Célio de Souza<br>
Erick Nunez<br>
Paulo Vinicius<br><br>
Versão Sistema: 1.1.0.0v
</p>
<br><br>
<center>
<div style="width: 500px;">
<h3 style="text-align:center;font-family: Calibri;">TERMOS DE USO</h3><br>
<p>1 Responsabilidade da empresa<br />&Eacute; responsabilidade da empresa fornecer os equipamentos necess&aacute;rios com os requisitos para a execu&ccedil;&atilde;o do sistema, buscando um melhor desempenho dentro de sua organiza&ccedil;&atilde;o, orientar os usu&aacute;rios a realizar o uso correto atrav&eacute;s do termo de usu&aacute;rio que ser&aacute; fornecido junto ao sistema sendo assim tornando cada usu&aacute;rio respons&aacute;vel por suas condi&ccedil;&otilde;es de uso.<br />1.1 Requisitos m&iacute;nimos <br />Os requisitos m&iacute;nimos para a execu&ccedil;&atilde;o deste sistema:<br /> Sistema Operacional: Windows 10, Linux, MacOS<br /> Mem&oacute;ria RAM para navegador: 4GB<br /> Acesso a internet com banda aproximada a 5MB;</p>
<p>2 Responsabilidade do Usu&aacute;rio<br />&Eacute; responsabilidade do usu&aacute;rio manter e zelar pelo acesso de sua conta corporativa, n&atilde;o fornecendo seus dados &aacute; terceiros, sua conta deve ser utilizada de forma consciente e que n&atilde;o afete os outros usu&aacute;rios, sendo sua utiliza&ccedil;&atilde;o voltada apenas para o uso corporativo e dentro das instala&ccedil;&otilde;es da empresa, seu acesso &eacute; apenas para a efetua&ccedil;&atilde;o de consultas e finaliza&ccedil;&atilde;o das mesmas.</p>
<p>3 Sobre as Contas<br />3.1 Atendente<br />Realizar&aacute; o cadastro de usu&aacute;rios ou pacientes cujo ir&atilde;o realizar suas consultas e exames no ambiente hospitalar, mantendo o sigilo dos dados do mesmo durante a elabora&ccedil;&atilde;o do formul&aacute;rio que ser&aacute; usado pelo cliente, a mesma dever&aacute; verificar a disponibilidade de hor&aacute;rio cujo ser&aacute; enviada pelo m&eacute;dico, buscando assim uma melhor experiencia para o cliente.<br />3.2 M&eacute;dico<br />O mesmo dever&aacute; avaliar o formul&aacute;rio enviado pela Atendente ou Recepcionista que estar&aacute; atuando no local, o mesmo ir&aacute; realizar o atendimento em seu consult&oacute;rio e finalizando a consulta o mesmo dever&aacute; finalizar e encerrar sua consulta no sistema. &Eacute; dever do m&eacute;dico informar a sua disponibilidade de hor&aacute;rio para a Atendente cujo ir&aacute; realizar os formul&aacute;rios.<br />3.3 Administrador <br />O administrador dever&aacute; respeitar a privacidade de todos os usu&aacute;rios cadastrados no sistema, dos clientes cujo possuem informa&ccedil;&otilde;es na base de dados cujo se encontra presente no sistema. &Eacute; dever do administrador realizar o cadastro de usu&aacute;rios, altera&ccedil;&otilde;es de senhas, visando manter a ordem e bom funcionamento do sistema, recebendo os relat&oacute;rios de poss&iacute;veis falhas, sugest&atilde;o de melhorias, informando ao time de desenvolvimento cujo elaborou o sistema.</p>
</div>
</body>
</html>
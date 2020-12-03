<?php
require 'mensagem.php';
?>
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
button{
    text-decoration: none;
    letter-spacing: 3.35px;
    font-size: 15px;
    color: #FFFFFF;
    font-family: font-family: "Arial Black", Gadget, sans-serif;;
    background: linear-gradient(to bottom, #28D6FF, #34D0CE);
    border: solid #7CAFFF 1px;
    border-radius: 5px;
    padding:15px;
    text-shadow: 0px 1px 2px #000000;
    box-shadow: 0px 1px 5px #0D2444;
    -webkit-transition: all 0.15s ease;
    -moz-transition: all 0.15s ease;
    -o-transition: all 0.15s ease;
    transition: all 0.15s ease;
}
button:hover{
    opacity: 0.9;
    background: linear-gradient(to bottom, #5A86FF, #335AD0);
    box-shadow: 0px 1px 2px #000000;
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

<h1 style="text-align:center;font-family: Calibri;">AGENDAMENTO</h1><br>
<center>
<form action="Redirecionar.php?acao=cadastrarAgendamento" method="post" style="">
    <fieldset class="principal" style="">
	</br></br>
		<h3 style="font-family: Calibri;">Dados do cliente</h3>
		</br>
		<div class="campo">
            <input type="text" id="nome" name="nome" style="width: 500px;height: 40px;font-size:17px;" value="" placeholder="Nome Completo">
            <input type="text" id="email" name="email" style="width: 500px;height: 40px;font-size:17px;" value="" placeholder="E-mail">
        </div>
		</br>
        <div class="campo">
            <input type="text" id="telefone" name="telefone" style="width: 500px;height: 40px;font-size:17px;" value="" placeholder="Telefone para contato">
            <input type="text" id="cpf" name="cpf" style="width: 500px;height: 40px;font-size:17px;" value="" placeholder="CPF">
        </div>
		</br>
		<div class="campo" style="">
		<h3 style="font-family: Calibri;">Pagamento/Plano</h3><br>
		<input type="radio" name="tplano"><p style="font-family: Calibri;font-size:17px;display : inline-flex ">Particular</p></input>
		<input type="radio" name="tplano"><p style="font-family: Calibri;font-size:17px;display : inline-flex">Plano de Saude</p></input>
		</div>
		</br>
		<div class="campo">
            <input type="text" id="ncarteirinha" name="ncarteirinha" style="width: 500px;height: 50px;font-size:20px;" value="" placeholder="Número Carteirinha">
                <select name="psaude" id="psaude" style="width: 500px;height: 50px;font-size:20px;" value="Plano de Saúde">
					<option value="">Plano de Saúde</option>
					<option value="amil">AMIL</option>
					<option value="notredame">NOTREDAME</option>
                </select>
            </div>
		</br>
		<div class="campo">
            <input type="text" id="npagante" name="npagante" style="width: 500px;height: 50px;font-size:20px;" value="" placeholder="Nome do Pagante">
                <select name="fpag" id="fpag" style="width: 500px;height: 50px;font-size:20px;" value="Plano de Saúde">
					<option value="">Forma de Pagamento</option>
					<option value="dinheiro">DINHEIRO</option>
					<option value="credito">CRÉDITO</option>
					<option value="debito">DÉBITO</option>
                </select>
            </div>
			</br>
		<h3 style="font-family: Calibri;">Especialização</h3>
		</br>
        <div class="campo">
            <select name="especializacao" id="especializacao" style="width: 500px;height: 50px;font-size:20px;" value="Plano de Saúde">
				<option value="">Especialização</option>
				<option value=""></option>
				<option value=""></option>
            </select>
            <select name="medico" id="medico" style="width: 500px;height: 50px;font-size:20px;" value="Plano de Saúde">
				<option value="">Médico</option>
				<option value=""></option>
				<option value=""></option>
            </select>
        </div>
		</br>
        <div class="campo">
		<h3 style="font-family: Calibri;">Data do agendamento</h3>
		<input type="date" id="dataagend" name="dataagend" style="width: 500px;height: 50px;font-size:20px;" value="" placeholder="Data Agendamento">
        </div>
		</br>		
			<br/><br/>
		<button type="reset" name="reset">Limpar</button>
        <button type="submit" name="submit">Agendar</button>
    </fieldset>
</form>




</form>

</body>
</html>
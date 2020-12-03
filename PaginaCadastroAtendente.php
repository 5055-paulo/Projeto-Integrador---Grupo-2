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
   <a href="PaginaAdministrador.php"><i class="fas fa-home"></i></i></a>
   <a href="PaginaCadastroMedico.php"><i class="fas fa-plus"></i></i></a>
   <a href="PaginaCadastroAtendente.php"><i class="fas fa-user-plus"></i></i></a>
   <a href="PaginaCadastroEspecializacao.php"><i class="far fa-plus-square"></i></i></a>
   <a href="">___</i></a>
   <a href="PaginaSobre.php"><i class="fas fa-info-circle"></i></i></a>
   <a href="Login.php"><i class="fas fa-sign-out-alt"></i></i></a>
</nav>

<h1 style="text-align:center;font-family: Calibri;">Cadastro Atendente</h1><br>
<center>
<form action="Redirecionar.php?acao=cadastrarAtendente" method="post" style="">
    <fieldset class="principal" style="">
	</br></br>
		<h3 style="font-family: Calibri;">Dados do Atendente</h3>
		</br>
		<div class="campo">
            <input type="text" id="nomea" name="nomea" style="width: 500px;height: 40px;font-size:17px;" value="" placeholder="Nome Completo">
            <input type="text" id="emaila" name="emaila" style="width: 500px;height: 40px;font-size:17px;" value="" placeholder="E-mail">
        </div>
		</br>
        <div class="campo">
            <input type="text" id="telefonea" name="telefonea" style="width: 500px;height: 40px;font-size:17px;" value="" placeholder="Telefone">
            <input type="text" id="cpfa" name="cpfa" style="width: 500px;height: 40px;font-size:17px;" value="" placeholder="CPF">
        </div>
		</br>
		<div class="campo" style="">
		<input type="radio" name="sexoa"><p style="font-family: Calibri;font-size:17px;display : inline-flex ">Masculino</p></input>
		<input type="radio" name="sexoa"><p style="font-family: Calibri;font-size:17px;display : inline-flex">Feminino</p></input>
		</div>
		</br>
		<div class="campo">
            <input type="text" id="cepa" name="cepa" style="width: 500px;height: 40px;font-size:17px;" value="" placeholder="CEP">
            <input type="text" id="endereçoa" name="endereçoa" style="width: 500px;height: 40px;font-size:17px;" value="" placeholder="Endereço">
        </div>
		</br>
		<h3 style="font-family: Calibri;">Dados Login</h3>
		</br>
		<div class="campo">
            <input type="text" id="logina" name="logina" style="width: 500px;height: 40px;font-size:17px;" value="" placeholder="Login">
            <input type="text" id="senhaa" name="senhaa" style="width: 500px;height: 40px;font-size:17px;" value="" placeholder="Senha">
        </div>
		<br>
		<div>
		<input type="text" id="senhaa" name="senha2a" style="width: 500px;height: 40px;font-size:17px;" value="" placeholder="Confirmar Senha">
		</div>
			<br/><br/>
		<button type="reset" name="reset">Limpar</button>
        <button type="submit" name="submit">Cadastrar</button>
    </fieldset>
</form>


</body>
</html>
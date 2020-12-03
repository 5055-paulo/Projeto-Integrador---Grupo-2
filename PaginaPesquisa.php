<?php
require 'action/Conexao.php';
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
.busca{
width: 500px;
height: 40px;
font-size: 17px;
border: 1px solid #3BE4FF;
border-radius: 5px;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 84%;
  position: relative;
  float: center;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3BE4FF;
  color: black;
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

<h1 style="font-family: Calibri;text-align:center;">PESQUISA</h1>
<br>
<center>
<form action="" method="GET">
  <div class="pesquisa">
    <input type="search" id="pesquisar" name="q" class="busca "placeholder="Pesquisa" style="">
    <button type="submit" style="width: 35px;height: 35px;"><i class="fas fa-search"></i></button>
  </div>

</form><br><br>
<table id="customers">
  <tr>
    <th>Nome Completo</th>
    <th>E-mail</th>
    <th>Telefone</th>
    <th>CPF</th>
    <th>Data agendamento</th>
    <th>Especialização</th>
    <th>Médico responsável</th>
  </tr>
  <?php require 'action/Pesquisar.php' ?>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>


</body>
</html>
<?php
require 'mensagem.php';
?>
<html>

<head>
<script src="https://kit.fontawesome.com/6ece2f8629.js" crossorigin="anonymous"></script>
<meta charset="UTF-8"/>
<title>ProjetoIntegrador</title>
<style>
body{
background-image: url("ImagemPaginaLogin.jpg");
}
div{
border: 2px solid black;
width: 400px;
height: 400px;
background: white;
}
button{
    text-decoration: none;
    letter-spacing: 3.35px;
    font-size: 15px;
    color: #FFFFFF;
    font-family: font-family: Calibri;
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
<center>
<br><br><br><br><br><br>
<div>
<h1 style="font-family: Calibri;">LOGIN</h1><br><br>
	<form action="Redirecionar.php?acao=login" method="POST">
        <input type="text" name="login" id="login" placeholder="Login" style="width: 230px;height: 30px;"></input><br><br>
        <input type="text" name="senha" id="senha" placeholder="Senha" style="width: 230px;height: 30px;"></input><br><br>
        <button type="submit" name="submit">Logar</button>
    </form>
</div>
</center>
</body>
</html>
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
<h3 style="font-family: Calibri;text-align:center;background:#3BE4FF;color:black:">Perfil Atendente | Projeto Integrador | 1.1.0.0v </h3>
<img class="imgprincipal" src="ImagemInicial.jpg" alt="some text" style="height:640; width:1350;">

</body>
</html>
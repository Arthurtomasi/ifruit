<?php

include_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="inicio.css"> 
    <link rel="stylesheet" href="ifruits.html">
    <link rel="stylesheet" href="macbook.html">
    <link rel="stylesheet" href="airpod.html">
    <link rel="stylesheet" href="watch.html">
    <link rel="icon" type="/images/favicon.ico" href="fotos/testebrabo-removebg-preview (2).png">
</head>
<body>
    <header>
        <div class="cointainer-logo">
        <div class="logo-texto"></div>
        <div class="logo-imagem"> <a href="index.html"><img src="fotos/logologo.png" alt=""></div></a>
        <div class="barra-pesquisa"> <input type="text" class="pesquisa-texto" placeholder="Pesquisar">
       <a href="#">
        <img src="fotos/lupa-imagem.png" alt="lupa" width="25px" height="25px"> 
       </a>
       </div>
        
     
       </div>    
       <div class="menu">
         <ul>  
         <li><a href="index.html">Home</a></li>
          <li><a href="macbook.html">MacBooks</a></li>
          <li><a href="ifruits.html">Ifruits</a></li>
          <li><a href="airpod.html">AirPods</a></li>
          <li><a href="watch.html">Watch</a></li>
         
         </ul>
       </div>
      
       <div class="usuario">
        <div class="usuimage"><img src="fotos/usu.png" alt=""></div>
        <a href="loginusuario.html" class="usuariologin">Login/Usuário</a>
      
    </header>
    <div id="login-container">
    <div class="tudocadastro">
                <br>
        <div>informe seus dados abaixo para criar uma conta</div>
        <div>
            <form action="cadastro_banco.php" method="post">   
               <input class="NomeCriarConta" type="text" placeholder="Nome" name="nome">
               <input class="SobrenomeCriarConta" type="text" placeholder="Sobrenome" name="sobrenome">
        </div>
            <div>      
                  <input class="CPFCriarConta" type="text" placeholder="CPF*" name="cpf">
                  <input class="RGCriarConta" type="text" placeholder="RG" name="rg">
               </div>
                  <input class="E-MailCriarConta" type="text" placeholder="E-mail*" name="email">
               <br>
                  <input class="SenhaCriarConta" type="text" placeholder="Senha" name="senha">
                  <a href="loginusuario.html">Voltar para o Login</a>
            <input type="submit" value="Criar Conta" name="cadastrar">
    <br>
            <a href="loginusuario.html">Voltar para o Login</a>
            </form>
            <br>   
         </div>
        
    </div>
    <footer>
        Copyright © 2022 Ifruit Inc. Todos os direitos reservados.
      </footer>
</body>
</html>
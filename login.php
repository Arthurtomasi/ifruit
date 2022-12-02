<?php
include_once('conexao.php');

$email=$_POST['email'];
$senha=$_POST['senha'];
$acessar=$_POST['acessar'];


if($acessar == "Acessar Conta"){
    $acessar = "SELECT email_conta,senha_conta FROM criar_conta WHERE email_conta='$email' AND senha_conta='$senha'";
    $logar = mysqli_query ($conexao, $acessar);

    header('location: index.html');
}
else{
    echo "Falha ao logar! E-Mail ou senha diferentes";
    header('location: loginusuario.html');
}

?>
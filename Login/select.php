<?php
//Importa o start-mysql para iniciar o banco de dados
include '../start-mysql.php';

//Inicia sessão
session_start();

//Recebe dados do login via POST
$email = $_POST["email"];
$senha = $_POST["senha"];


//Seleciona o usuário 
$usuario = $pdo->query("SELECT nome, email, senha FROM usuario WHERE email = '" . $email . "' AND senha = '" . $senha . "'");

$linha = $usuario->fetch(PDO::FETCH_ASSOC);

//Checagem de autenticação do login
if(isset($linha) && $linha){
    
    $userNome = $linha["nome"];

    $_SESSION["logado"] = true;
    $_SESSION["nome"] = $userNome;       
    header("Location: /Programa-Best-Minds/bem-vindo.php");
}
else
{
    $acesso = false;
    header("Location: /Programa-Best-Minds/Login/login.php?acesso=$acesso");
}

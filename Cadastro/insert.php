<?php
include '../start-mysql.php';

//Captura o post do usuário
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];     
$email = $_POST["email"];
$senha = $_POST["senha"];           

//Monta o comando de inscrição com bind value para impedir SQL Injection
$cmd = $pdo->prepare('INSERT INTO usuario(nome, cpf, email, senha ) VALUES(:nome, :cpf, :email, :senha)');

$cmd->bindValue(':nome' ,$nome);
$cmd->bindValue(':cpf', $cpf);
$cmd->bindValue(':email' ,$email);
$cmd->bindValue(':senha', $senha);

//Verifica se os campos foram preenchidos e executa o comando
$isInputEmpty = $nome && $email && $senha;

if($isInputEmpty){
    if($status = $cmd->execute())
    {
        $cadastrado = true;
        //Caso obtenha sucesso o usuário é redirecionado para tela de login com um aviso de sucesso ao cadastrar
        header("Location: /Programa-Best-Minds/Login/login.php?cadastrado=$cadastrado");
    }
    //Caso não execute o comando ou os campos estejam vazios vai para página de cadastro novamente com um alerta de erro
    else
    {
        $cadastrado = false;
        header("Location: /Programa-Best-Minds/Cadastro/cadastro.php?cadastrado=$cadastrado");
    }
} 
else{
    $cadastrado = false;
    header("Location: /Programa-Best-Minds/Cadastro/cadastro.php?cadastrado=$cadastrado");
}


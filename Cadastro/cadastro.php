<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Charlie Bookstore</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/Programa-Best-Minds/CSS/login.css">    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/0169495cc4.js" crossorigin="anonymous"></script>
    <!-- Font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
<body>
    <?php

        if(isset($_GET['cadastrado']))
        {
            $cadastrado = $_GET['cadastrado'];
        }
        
    ?>

    <section class="formulario">
        <!-- Login -->
        <div class="logo">
            <img src="/Programa-Best-Minds/imgs/logo.png" alt="" id="img-logo">
        </div>

        <form action="insert.php" method="POST">            
            <h1 class="login-title">Cadastre-se</h1>
            
            <?php
                //Alerta caso não tenha sido possível efetuar o cadastro
                if(isset($cadastrado) && !$cadastrado)
                {
                    echo '<div class="alert alert-danger" role="alert">
                        Erro, por favor tente novamente!
                    </div>';
                }
            ?> 
            
            <!-- Nome -->
            <div class="input-group mb-3 " style='margin-bottom:10px'>
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                <input name="nome" type="text" class="form-control" placeholder="Nome" required>
            </div>

            <!-- CPF -->
            <div class="input-group mb-3 " style='margin-bottom:10px'>
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-id-card"></i></span>
                <input name="cpf" type="text" class="form-control" placeholder="CPF" required>
            </div>

            <!-- Email -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                <input name="email" type="email" class="form-control"  placeholder="Email" required>
            </div>

            <!-- Senha -->            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                <input name="senha" type="password" class="form-control inputSenha"  placeholder="Senha" required>
            </div> 

            <i id='senha' class ="fa-solid fa-eye-slash"></i>                
            <input type="submit" value="Cadastrar" class="btn entrar btn-primary">

            <!-- Redirecionando o usuário ao login caso já possua -->
            <div class="cadastro">
                <p>Já tem cadastro? <a href='/Programa-Best-Minds/Login/login.php'>Faça login</a></p>
            </div>
        </form>
       
    </section>
    <script src="JavaScript/mostrar-senha.js"></script>
</body>
</html>
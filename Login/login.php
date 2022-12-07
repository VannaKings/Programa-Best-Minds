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

        if(isset($_GET['acesso']))
        {
            $acesso = $_GET['acesso'];
        }

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
        <form action="select.php" method="POST">            
            <h1 class="login-title">Login</h1>
            <?php
                //Aviso caso o acesso tenha sido inválido
                if(isset($acesso) && !$acesso)
                {
                    echo '<div class="alert alert-danger" role="alert">
                            Email ou senha inválidos
                         </div>';
                }
                //Aviso caso o cadastro tenha sido realizado com sucesso
                if(isset($cadastrado) && $cadastrado)
                {
                    echo '<div class="alert alert-success" role="alert">
                        Cadastro realizado com sucesso! Faça login
                        </div>';
            
                }
            ?>  
           
            <div class="input-group mb-3 " style='margin-bottom:10px'>
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                <input name="email" type="email" class="form-control" placeholder="Email" required>
            </div>          
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                <input name="senha" type="password" class="form-control"  placeholder="Senha" required>
            </div>                 
            <input type="submit" value="Entrar" class="btn entrar btn-primary">
            <div class="cadastro">
                <p>Novo por aqui? <a href='/Programa-Best-Minds/Cadastro/cadastro.php'>Inscreva-se</a></p>
            </div>
        </form>
       
    </section>
</body>
</html>
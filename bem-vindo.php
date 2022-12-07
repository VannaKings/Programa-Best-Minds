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
    <link rel="stylesheet" href="CSS/login.css">    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/0169495cc4.js" crossorigin="anonymous"></script>
    <!-- Font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
<body>
    <?php
        //Checando se o usuário está logado
        require_once "Login/autentica-login.php ";
        
    ?>

    <section class="formulario">
        <!-- Login -->
        <div class="logo">
            <img src="/Programa-Best-Minds/imgs/logo.png" alt="" id="img-logo">
        </div>

        <div class='container-home'>            
            <h1 class="login-title">Seja bem vindo(a), <?php echo $_SESSION["nome"]?>!</h1>

            <p>Se você chegou até aqui significa que deu tudo certo, muito obrigada por ter testado esse projeto :)</p>

            <div class="cadastro">
                <p>Deseja encerrar sessão? <a href='/Programa-Best-Minds/logout.php'>Saia por aqui</a></p>
            </div>
        </div>
       
    </section>
</body>
</html>
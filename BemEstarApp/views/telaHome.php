<?php

session_start();

if(!isset($_SESSION["user_id"])){
    header("location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/telaHomeStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />    
    <title>Home</title>

</head>
<body>
    <div class="user-logout">
    <?php 
        echo '<h4>Usuario Nº '.$_SESSION["user_id"].'</h4>';
        echo '<a href="../Logout.php" class="btn-logout">Logout</a>'
    ?>
    </div>
    <div class="container">
            <div class="box">
                <img alt="Logo do projeto Bem-Estar" src="img/thLogo.png" role="img">
            </div>  
    </div>

        <div class="buttons"> 
            <a class="btn-cad" href="telaCadastroPaciente.php">Cadastrar Paciente</a>
            <a class="btn-pes" href="telaCadastroExame.php">Cadastrar Exame</a>   
            <a class="btn-pes" href="telaPesquisa.php">Pesquisar / Editar</a>   
        </div>

<footer>
        <div class="footer-bottom">
            <p>Designed by <span>Pedro Eduardo Altran</span> </p>
            <ul class="socials">
                <li><a href="https://www.linkedin.com/in/pedroaltran/" target="_blank" rel="noopener noreferrer"><i class="fa fa-linkedin-square"></i></a></li>
                <li><a href="https://github.com/pedroaltran" target="_blank" rel="noopener noreferrer"><i class="fa fa-github-square"></i></a></li>
                <li><a href="https://instagram.com/pedrin_de_deus" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
</footer>

</body>
</html>

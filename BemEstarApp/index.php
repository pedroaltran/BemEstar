<?php 
    require_once('./configurations/Database.php');

    $database = new Database();
    $conexao = $database->conecta();

    $cursos = "SELECT * FROM curso";
    $query = mysqli_query($conexao, $cursos);


    session_start();
    error_reporting(0);

    if(isset($_SESSION["user_id"])){
        header("location: views/telaHome.php");
    }

    if (isset($_POST["btn_sign_in"])) {
        $database = new Database();
        $conexao = $database->conecta();
        

        $emailUsuario =            $_POST['sig_email'];
        $senhaUsuario =            $_POST['sig_password'];
        $senhaUser    =             md5($senhaUsuario);

        $checkUser = mysqli_query($conexao, "SELECT idUsuario FROM usuario WHERE emailUsuario= '$emailUsuario' AND senhaUsuario ='$senhaUser'");

        $num = mysqli_num_rows($checkUser);
        if ($num > 0){
            echo "<script>alert('Login feito com sucesso!');</script>";
            $row = mysqli_fetch_assoc($checkUser);
            $_SESSION["user_id"] = $row['idUsuario'];
            header("location: views/telaHome.php");
            }else{
                header("location: ./index.php");
                echo "<script>alert('Login incorreto');</script>";
                die;
            }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="views/css/indexstyle.css">
    <link rel="shortcut icon" href="views/img/favicon.ico" type="image/x-icon">

    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" class="sign-in-form" method="post">
                    <h2 class="title">Acessar conta</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email" name="sig_email" autocomplete="off" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" name="sig_password" autocomplete="off" required>
                    </div>
                    <input type="submit" value="Login" class="btn solid" name="btn_sign_in">
                </form>

                <form action="./controllers/usuarioController.php" class="sign-up-form" method="post">
                    <h2 class="title">Cadastre-se</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nome completo" name="sup_full_name" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email" name="sup_email" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" name="sup_senha" autocomplete="off"  minlength="6" required>
                        
                    </div>
                    
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirme a senha" name="sup_con_senha" autocomplete="off"  required>
                    </div>

                    <div class="input-calendar">
                        <i class="fa fa-calendar"></i>
                        <input type="date"  placeholder="Data de nascimento " name="sup_dta" required>
                    </div>

                    <div class="select-input-box">
                        <select name="idCurso" required>
                            <option selected disabled>Selecione o Curso</option>
                            <?php 
                        
                        foreach($query as $row){ ?>
                        <option value ="<?php echo $row["idCurso"]; ?>"><?php echo $row["nomeCurso"]; ?></option>
                        <?php }?>
                    </select>
                    </div>

                    <input type="submit" value="Sign up" class="btn solid" name="btn_sign_up">
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Novo aqui ?</h3>
                    <p>Bem vindo ! <br> Crie sua conta, é gratis e rápido.</p>
                    <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                </div>

                <br><img src="views/img/tiSignup.svg" class="image" alt="Sign up image">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Ja é um de nós ?</h3><br>
                    <button class="btn transparent" id="sign-in-btn">Login</button>
                </div>

                <img src="views/img/tiSignin.svg" class="image" alt="Sign in image">
            </div>
        </div>
    </div>
<script src="js/indexApp.js"></script>
</body>
</html>
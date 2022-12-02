<?php  

require_once(realpath(dirname(__FILE__) . '/../models/usuarioModel.php'));
require_once(realpath(dirname(__FILE__) . '/../DAO/usuarioDAO.php'));
require_once(realpath(dirname(__FILE__) . '/../configurations/Database.php'));
require_once(realpath(dirname(__FILE__) . '/../controllers/cursoController.php'));


class usuarioController {
    
    public function insere() {
        $conexao = new Database();

        
        $nome_Usuario            =   $_POST["sup_full_name"];
        $dta_Usuario             =   $_POST["sup_dta"];
        $email_Usuario           =   $_POST["sup_email"];

        $senha_Usuario           =   $_POST["sup_senha"];
        $confirmacaoSenhaUsuario =   $_POST["sup_con_senha"];
        $status_Usuario          =   TRUE;
        $idCurso                 =   $_POST["idCurso"];

        $checkEmail              =   mysqli_num_rows(mysqli_query(
            $conexao->conecta(), "SELECT emailUsuario FROM usuario WHERE emailUsuario='$email_Usuario'"));


        if($senha_Usuario == $confirmacaoSenhaUsuario){
            $senhaMd5            =   md5($senha_Usuario);   
        }else{
            echo "<script>alert('As senhas nao sao iguais. Tente novamente');</script>";
            die;
        }
        if($checkEmail > 0){
            echo "<script>alert('Email ja cadastrado. Tente novamente');</script>";
            die;
        }

        $usuario = new usuarioModel();
        
        $usuario->setId_Usuario(NULL);
        $usuario->setNome_Usuario($nome_Usuario);
        $usuario->setDta_Usuario($dta_Usuario);
        $usuario->setEmail_Usuario($email_Usuario);

        $usuario->setSenha_Usuario($senhaMd5);
        $usuario->setStatus_Usuario($status_Usuario);
        
        $usuario->setId_Curso($idCurso);

        $UsuarioDAO = new usuarioDAO();
        $UsuarioDAO->adiciona($conexao, $usuario);
        
    }
}
    
    $controllerUser = new usuarioController();
    $controllerUser->insere();

    session_start();

    if (isset($controllerUser)) {
        $database = new Database();
        $conexao = $database->conecta();
        

        $checkUser = mysqli_query($conexao, "SELECT MAX(idUsuario) FROM usuario");

        if ($checkUser == TRUE){
            $row = mysqli_fetch_assoc($checkUser);
            $_SESSION["user_id"] = $row['MAX(idUsuario)'];
            header("location: ../views/telaHome.php");
            }else{
                header("location: ../index.php");
                die;
            }
    }


?>





<?php  

require_once(realpath(dirname(__FILE__) . '/../models/usuarioModel.php'));
require_once(realpath(dirname(__FILE__) . '/../configurations/Database.php'));



class usuarioDAO {

    function adiciona(Database $conexao, usuarioModel $UsuarioModel) {

        $query = "INSERT INTO usuario (idCurso, nomeUsuario, emailUsuario, senhaUsuario, dtaUsuario, statusUsuario) 
        
        VALUES ( " . $UsuarioModel->getId_Curso()       .",  
                '" . $UsuarioModel->getNome_Usuario()   ."',
                '" . $UsuarioModel->getEmail_Usuario()  ."',
                '" . $UsuarioModel->getSenha_Usuario()  ."',
                '" . $UsuarioModel->getDta_Usuario()    ."',
                 " .($UsuarioModel->getStatus_Usuario() ? 1 : 0) . ")";
            mysqli_query($conexao->conecta(), $query);    
    }

    function getAll(Database $conexao){

        $select = "SELECT * FROM paciente";
        $resultQuery = mysqli_query($conexao->conecta(), $select);
        $row = mysqli_fetch_all($resultQuery);
    }
}

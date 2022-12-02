<?php  

require_once(realpath(dirname(__FILE__) . '/../models/ExameModel.php'));
require_once(realpath(dirname(__FILE__) . '/../configurations/Database.php'));

class exameDAO {

    function adiciona(Database $conexao, exameModel $ExameModel) {

        $query = "INSERT INTO exame (idPaciente, idUsuario, dtaExame, glicemiaExame, colesterolExame, 
        pesoExame, alturaExame, pressaoArterialExame, medicExame, obsExame)

        VALUES ( " . $ExameModel->getId_Paciente()              .",
                 " . $ExameModel->getId_Usuario()              .",
                '" . $ExameModel->getDta_Exame()                . "',
                '" . $ExameModel->getGlicemia_Exame()           . "',
                '" . $ExameModel->getColesterol_Exame()         . "',
                '" . $ExameModel->getPeso_Exame()               . "',
                '" . $ExameModel->getAltura_Exame()             . "',
                '" . $ExameModel->getPressaoArterial_Exame()    . "',
                '" . $ExameModel->getMedic_Exame()              . "',
                '" . $ExameModel->getObs_Exame()                . "')";                                
                
                if(mysqli_query($conexao->conecta(), $query) == TRUE){
                    header("Location: ../views/telaCadastroExame.php");
                }else{
                    echo 'Ops... Algo deu errado. ';
                    die;
                }
    }
}
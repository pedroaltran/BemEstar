<?php  

require_once(realpath(dirname(__FILE__) . '/../models/pacienteModel.php'));
require_once(realpath(dirname(__FILE__) . '/../configurations/Database.php'));

class pacienteDAO {

    function adiciona(Database $conexao, pacienteModel $PacienteModel) {

        $query = "INSERT INTO paciente (nomePaciente, emailPaciente, fonePaciente, sexoPaciente, dtaPaciente, 
        cepPaciente, cidadePaciente, ufPaciente, ruaPaciente, bairroPaciente, numPaciente, complementoPaciente, 
        pesoPaciente, alturaPaciente, hipertensaoPaciente, diabetesPaciente, fumaPaciente, cardiacoPaciente, 
        bebePaciente, outrasDoencasPaciente, medicPaciente)

        VALUES ('" . $PacienteModel->getNome_Paciente()                  . "',
                '" . $PacienteModel->getEmail_Paciente()                 . "',
                '" . $PacienteModel->getFone_Paciente()                  . "',
                '" . $PacienteModel->getSexo_Paciente()                  . "',
                '" . $PacienteModel->getDta_Paciente()                   . "',
                '" . $PacienteModel->getCep_Paciente()                   . "',
                '" . $PacienteModel->getCidade_Paciente()                . "',
                '" . $PacienteModel->getUf_Paciente()                    . "',
                '" . $PacienteModel->getRua_Paciente()                   . "',
                '" . $PacienteModel->getBairro_Paciente()                . "',
                '" . $PacienteModel->getNum_Paciente()                   . "',
                '" . $PacienteModel->getComplemento_Paciente()           . "',
                '" . $PacienteModel->getPeso_Paciente()                  . "',
                '" . $PacienteModel->getAltura_Paciente()                . "',
                "  .($PacienteModel->getHipertensao_Paciente() ? 1 : 0)  . ",
                "  .($PacienteModel->getDiabetes_Paciente()    ? 1 : 0)  . ",
                "  .($PacienteModel->getFuma_Paciente()        ? 1 : 0)  . ",
                "  .($PacienteModel->getCardiaco_Paciente()    ? 1 : 0)  . ",
                "  .($PacienteModel->getBebe_Paciente()        ? 1 : 0)  . ",
                '" . $PacienteModel->getOutrasDoencas_Paciente()         . "',
                '" . $PacienteModel->getMedic_Paciente()                 . "')";                                
                
                if(mysqli_query($conexao->conecta(), $query) == TRUE){
                    header("Location: ../views/telaCadastroPaciente.php");
                }else{
                    echo 'Ops... Algo deu errado. ';
                    die;
                }
    }

}
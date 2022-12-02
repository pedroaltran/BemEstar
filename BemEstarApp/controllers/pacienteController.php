<?php 

require_once(realpath(dirname(__FILE__) . '/../configurations/Database.php'));
require_once(realpath(dirname(__FILE__) . '/../dao/pacienteDAO.php'));
require_once(realpath(dirname(__FILE__) . '/../models/pacienteModel.php'));

class pacienteController {
    
    public function insere() {
        
        $conexao = new Database();

        $nome_Paciente              =   $_POST["nome_pac"];
        $email_Paciente             =   $_POST["email_pac"];
        $fone_Paciente              =   $_POST["fone_pac"];
        $sexo_Paciente              =   $_POST["sexo_pac"];
        $dta_Paciente               =   $_POST["data_pac"];
        $cep_Paciente               =   $_POST["cep_pac"];
        $cidade_Paciente            =   $_POST["localidade_pac"];
        $uf_Paciente                =   $_POST["uf_pac"];
        $rua_Paciente               =   $_POST["logradouro_pac"];
        $bairro_Paciente            =   $_POST["bairro_pac"];
        $num_Paciente               =   $_POST["numero_pac"];
        $complemento_Paciente       =   $_POST["complemento_pac"];

        $peso_Paciente              =   $_POST["peso_pac"];
        $pesofl_Paciente            =   str_replace(",", ".",$peso_Paciente);
        $altura_Paciente            =   $_POST["altura_pac"];
        $alturafl_Paciente          =   str_replace(",",".",$altura_Paciente);

        $hipertensao_Paciente       =   $_POST["hip_pac"];
        $diabetes_Paciente          =   $_POST["diab_pac"];
        $fuma_Paciente              =   $_POST["fuma_pac"];
        $cardiaco_Paciente          =   $_POST["cardiaco_pac"];
        $bebe_Paciente              =   $_POST["bebe_pac"];
        $outrasDoencas_Paciente     =   $_POST["outras_pac"];
        $medic_Paciente             =   $_POST["medic_pac"];


        $paciente = new pacienteModel();

        $paciente->setId_Paciente(NULL);
        $paciente->setNome_Paciente($nome_Paciente);
        $paciente->setEmail_Paciente($email_Paciente);
        $paciente->setFone_Paciente($fone_Paciente);
        $paciente->setSexo_Paciente($sexo_Paciente);
        $paciente->setDta_Paciente($dta_Paciente);
        $paciente->setCep_Paciente($cep_Paciente);
        $paciente->setCidade_Paciente($cidade_Paciente);
        $paciente->setUf_Paciente($uf_Paciente);
        $paciente->setRua_Paciente($rua_Paciente);
        $paciente->setBairro_Paciente($bairro_Paciente);
        $paciente->setNum_Paciente($num_Paciente);
        $paciente->setComplemento_Paciente($complemento_Paciente);

        if($pesofl_Paciente == TRUE){
            $paciente->setPeso_Paciente($pesofl_Paciente);
        }
        if($pesofl_Paciente == FALSE){
            $paciente->setPeso_Paciente($peso_Paciente);
        }
        if($alturafl_Paciente == TRUE){
            $paciente->setAltura_Paciente($alturafl_Paciente);
        }
        if($alturafl_Paciente == FALSE){
            $paciente->setAltura_Paciente($altura_Paciente);
        }

        $paciente->setHipertensao_Paciente($hipertensao_Paciente);
        $paciente->setDiabetes_Paciente($diabetes_Paciente);
        $paciente->setFuma_Paciente($fuma_Paciente);
        $paciente->setCardiaco_Paciente($cardiaco_Paciente);
        $paciente->setBebe_Paciente($bebe_Paciente);
        $paciente->setOutrasDoencas_Paciente($outrasDoencas_Paciente);
        $paciente->setMedic_Paciente($medic_Paciente);

        $PacienteDao = new pacienteDAO();
        $PacienteDao->adiciona($conexao, $paciente);
    }
    

}

$controller = new pacienteController();
$controller->insere();

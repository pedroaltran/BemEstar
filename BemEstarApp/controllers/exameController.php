<?php 

require_once(realpath(dirname(__FILE__) . '/../configurations/Database.php'));
require_once(realpath(dirname(__FILE__) . '/../dao/exameDAO.php'));
require_once(realpath(dirname(__FILE__) . '/../models/exameModel.php'));

class exameController {

    public function insere() {

        $conexao = new Database();

        session_start();
        $idUser = $_SESSION["user_id"];

        $id_Paciente             = $_POST["idPaciente"];
        $id_Usuario              = $idUser;
        $dta_Exame               = $_POST["data_exame"];
        $glicemia_Exame          = $_POST["glicemia_exame"];
        $colesterol_Exame        = $_POST["colesterol_exame"];

        $peso_Exame              = $_POST["peso_exame"];
        $pesofl_Exame            = str_replace(",", ".",$peso_Exame);
        $altura_Exame            = $_POST["altura_exame"];
        $alturafl_Exame          = str_replace(",",".",$altura_Exame);

        $pressaoArterial_Exame   = $_POST["pressao_exame"];
        $medic_Exame             = $_POST["medic_exame"];
        $obs_Exame               = $_POST["obs_exame"];

        $exame = new exameModel();

        $exame->setId_Exame(NULL);
        $exame->setId_Paciente($id_Paciente);
        $exame->setId_Usuario($id_Usuario);
        $exame->setDta_Exame($dta_Exame);
        $exame->setGlicemia_Exame($glicemia_Exame);
        $exame->setColesterol_Exame($colesterol_Exame);

        if($pesofl_Exame == TRUE){
            $exame->setPeso_Exame($pesofl_Exame);
        }
        if($pesofl_Exame == FALSE){
            $exame->setPeso_Exame($peso_Exame);
        }
        if($alturafl_Exame == TRUE){
            $exame->setAltura_Exame($alturafl_Exame);
        }
        if($alturafl_Exame == FALSE){
            $exame->setAltura_Exame($altura_Exame);
        }

        $exame->setPressaoArterial_Exame($pressaoArterial_Exame);
        $exame->setMedic_Exame($medic_Exame);
        $exame->setObs_Exame($obs_Exame);

        print_R($exame);
        $ExameDao = new exameDAO();
        $ExameDao->adiciona($conexao, $exame);
    }

}

$controller = new exameController();
$controller->insere();

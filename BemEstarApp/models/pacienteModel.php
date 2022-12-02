<?php

require_once(realpath(dirname(__FILE__) . '/../configurations/Database.php'));


class pacienteModel
{
    private $id_Paciente, $nome_Paciente, $email_Paciente, $fone_Paciente, $sexo_Paciente, $dta_Paciente, $cep_Paciente, $cidade_Paciente,
     $uf_Paciente, $rua_Paciente, $bairro_Paciente, $num_Paciente, $complemento_Paciente, $hipertensao_Paciente, 
     $diabetes_Paciente, $fuma_Paciente, $cardiaco_Paciente, $bebe_Paciente, $outrasDoencas_Paciente,
     $medic_Paciente;

     private float $peso_Paciente, $altura_Paciente;

     function getAllPacientes()
     {
          $conexao = new Database();
          $select = $conexao->conecta()->query("SELECT * FROM paciente");
          $resultQuery = $select->fetch_all();
          return $resultQuery;
     }

     public function getId_Paciente()
     {
         return $this->id_Paciente;
     }
 
     public function setId_Paciente($id_Paciente)
     {
         $this->id_Paciente = $id_Paciente;
 
         return $this;
     }

     public function getNome_Paciente()
     {
          return $this->nome_Paciente;
     }

     public function setNome_Paciente($nome_Paciente)
     {
          $this->nome_Paciente = $nome_Paciente;

          return $this;
     }

     public function getEmail_Paciente()
     {
          return $this->email_Paciente;
     }

     public function setEmail_Paciente($email_Paciente)
     {
          $this->email_Paciente = $email_Paciente;

          return $this;
     }

     public function getFone_Paciente()
     {
          return $this->fone_Paciente;
     }

     public function setFone_Paciente($fone_Paciente)
     {
          $this->fone_Paciente = $fone_Paciente;

          return $this;
     }

     public function getSexo_Paciente()
     {
          return $this->sexo_Paciente;
     }

     public function setSexo_Paciente($sexo_Paciente)
     {
          $this->sexo_Paciente = $sexo_Paciente;

          return $this;
     }

     public function getDta_Paciente()
     {
          return $this->dta_Paciente;
     }

     public function setDta_Paciente($dta_Paciente)
     {
          $this->dta_Paciente = $dta_Paciente;

          return $this;
     }

     public function getCep_Paciente()
     {
          return $this->cep_Paciente;
     }
     
     public function setCep_Paciente($cep_Paciente)
     {
          $this->cep_Paciente = $cep_Paciente;

          return $this;
     }

     public function getCidade_Paciente()
     {
          return $this->cidade_Paciente;
     }
     
     public function setCidade_Paciente($cidade_Paciente)
     {
          $this->cidade_Paciente = $cidade_Paciente;

          return $this;
     }

     public function getUf_Paciente()
     {
          return $this->uf_Paciente;
     }

     public function setUf_Paciente($uf_Paciente)
     {
          $this->uf_Paciente = $uf_Paciente;

          return $this;
     }

     public function getRua_Paciente()
     {
          return $this->rua_Paciente;
     }

     public function setRua_Paciente($rua_Paciente)
     {
          $this->rua_Paciente = $rua_Paciente;

          return $this;
     }

     public function getBairro_Paciente()
     {
          return $this->bairro_Paciente;
     }

     public function setBairro_Paciente($bairro_Paciente)
     {
          $this->bairro_Paciente = $bairro_Paciente;

          return $this;
     }

     public function getNum_Paciente()
     {
          return $this->num_Paciente;
     }

     public function setNum_Paciente($num_Paciente)
     {
          $this->num_Paciente = $num_Paciente;

          return $this;
     }

     public function getComplemento_Paciente()
     {
          return $this->complemento_Paciente;
     }

     public function setComplemento_Paciente($complemento_Paciente)
     {
          $this->complemento_Paciente = $complemento_Paciente;

          return $this;
     }

     public function getHipertensao_Paciente()
     {
          return $this->hipertensao_Paciente;
     }

     public function setHipertensao_Paciente($hipertensao_Paciente)
     {
          $this->hipertensao_Paciente = $hipertensao_Paciente;

          return $this;
     }

     public function getDiabetes_Paciente()
     {
          return $this->diabetes_Paciente;
     }

     public function setDiabetes_Paciente($diabetes_Paciente)
     {
          $this->diabetes_Paciente = $diabetes_Paciente;

          return $this;
     }

     public function getFuma_Paciente()
     {
          return $this->fuma_Paciente;
     }

     public function setFuma_Paciente($fuma_Paciente)
     {
          $this->fuma_Paciente = $fuma_Paciente;

          return $this;
     }

     public function getCardiaco_Paciente()
     {
          return $this->cardiaco_Paciente;
     }

     public function setCardiaco_Paciente($cardiaco_Paciente)
     {
          $this->cardiaco_Paciente = $cardiaco_Paciente;

          return $this;
     }

     public function getBebe_Paciente()
     {
          return $this->bebe_Paciente;
     }

     public function setBebe_Paciente($bebe_Paciente)
     {
          $this->bebe_Paciente = $bebe_Paciente;

          return $this;
     }

     public function getOutrasDoencas_Paciente()
     {
          return $this->outrasDoencas_Paciente;
     }

     public function setOutrasDoencas_Paciente($outrasDoencas_Paciente)
     {
          $this->outrasDoencas_Paciente = $outrasDoencas_Paciente;

          return $this;
     }

     public function getMedic_Paciente()
     {
          return $this->medic_Paciente;
     }

     public function setMedic_Paciente($medic_Paciente)
     {
          $this->medic_Paciente = $medic_Paciente;

          return $this;
     }
     
     public function getPeso_Paciente()
     {
          return $this->peso_Paciente;
     }

     public function setPeso_Paciente($peso_Paciente)
     {
          $this->peso_Paciente = $peso_Paciente;

          return $this;
     }
      
     public function getAltura_Paciente()
     {
          return $this->altura_Paciente;
     }

     public function setAltura_Paciente($altura_Paciente)
     {
          $this->altura_Paciente = $altura_Paciente;

          return $this;
     }
}

?>

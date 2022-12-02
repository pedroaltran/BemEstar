<?php

class exameModel{

    private $id_Exame, $id_Paciente, $id_Usuario, $dta_Exame, $medic_Exame, $obs_Exame; 
    private float $glicemia_Exame, $colesterol_Exame, $peso_Exame, $altura_Exame, $pressaoArterial_Exame;

     
    public function getId_Exame()
    {
        return $this->id_Exame;
    }
 
    public function setId_Exame($id_Exame)
    {
        $this->id_Exame = $id_Exame;

        return $this;
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
 
    public function getId_Usuario()
    {
        return $this->id_Usuario;
    }

    public function setId_Usuario($id_Usuario)
    {
        $this->id_Usuario = $id_Usuario;

        return $this;
    }
 
    public function getDta_Exame()
    {
        return $this->dta_Exame;
    }
 
    public function setDta_Exame($dta_Exame)
    {
        $this->dta_Exame = $dta_Exame;

        return $this;
    }
 
    public function getMedic_Exame()
    {
        return $this->medic_Exame;
    }

    public function setMedic_Exame($medic_Exame)
    {
        $this->medic_Exame = $medic_Exame;

        return $this;
    }

    public function getObs_Exame()
    {
        return $this->obs_Exame;
    }

    public function setObs_Exame($obs_Exame)
    {
        $this->obs_Exame = $obs_Exame;

        return $this;
    }
 
    public function getGlicemia_Exame()
    {
        return $this->glicemia_Exame;
    }

    public function setGlicemia_Exame($glicemia_Exame)
    {
        $this->glicemia_Exame = $glicemia_Exame;

        return $this;
    }
 
    public function getColesterol_Exame()
    {
        return $this->colesterol_Exame;
    }
 
    public function setColesterol_Exame($colesterol_Exame)
    {
        $this->colesterol_Exame = $colesterol_Exame;

        return $this;
    }

    public function getPeso_Exame()
    {
        return $this->peso_Exame;
    }
 
    public function setPeso_Exame($peso_Exame)
    {
        $this->peso_Exame = $peso_Exame;

        return $this;
    }

    public function getAltura_Exame()
    {
        return $this->altura_Exame;
    }

    public function setAltura_Exame($altura_Exame)
    {
        $this->altura_Exame = $altura_Exame;

        return $this;
    }

    public function getPressaoArterial_Exame()
    {
        return $this->pressaoArterial_Exame;
    }

    public function setPressaoArterial_Exame($pressaoArterial_Exame)
    {
        $this->pressaoArterial_Exame = $pressaoArterial_Exame;

        return $this;
    }

}


?>
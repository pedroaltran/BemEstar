<?php

class cursoModel{

    private $id_Curso, $faculdade_Curso, $nome_Curso;

    public function getId_Curso()
    {
        return $this->id_Curso;
    }

    public function setId_Curso($id_Curso)
    {
        $this->id_Curso = $id_Curso;

        return $this;
    }
  
    public function getFaculdade_Curso()
    {
        return $this->faculdade_Curso;
    }

    public function setFaculdade_Curso($faculdade_Curso)
    {
        $this->faculdade_Curso = $faculdade_Curso;

        return $this;
    }

    public function getNome_Curso()
    {
        return $this->nome_Curso;
    }


    public function setNome_Curso($nome_Curso)
    {
        $this->nome_Curso = $nome_Curso;

        return $this;
    }

}


?>
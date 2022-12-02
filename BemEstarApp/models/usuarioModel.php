<?php

class usuarioModel{

    private $id_Curso, $id_Usuario, $nome_Usuario, $dta_Usuario, $email_Usuario, $senha_Usuario, $status_Usuario;

    public function getId_Curso()
    {
        return $this->id_Curso;
    }

    public function setId_Curso($id_Curso)
    {
        $this->id_Curso = $id_Curso;

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

    public function getNome_Usuario()
    {
        return $this->nome_Usuario;
    }

    public function setNome_Usuario($nome_Usuario)
    {
        $this->nome_Usuario = $nome_Usuario;

        return $this;
    }

    public function getDta_Usuario()
    {
        return $this->dta_Usuario;
    }

    public function setDta_Usuario($dta_Usuario)
    {
        $this->dta_Usuario = $dta_Usuario;

        return $this;
    }

    public function getEmail_Usuario()
    {
        return $this->email_Usuario;
    }

    public function setEmail_Usuario($email_Usuario)
    {
        $this->email_Usuario = $email_Usuario;

        return $this;
    }

    public function getSenha_Usuario()
    {
        return $this->senha_Usuario;
    }
 
    public function setSenha_Usuario($senha_Usuario)
    {
        $this->senha_Usuario = $senha_Usuario;

        return $this;
    }

    public function getStatus_Usuario()
    {
        return $this->status_Usuario;
    }
 
    public function setStatus_Usuario($status_Usuario)
    {
        $this->status_Usuario = $status_Usuario;

        return $this;
    }

}


?>
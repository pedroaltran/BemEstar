<?php  

require_once(realpath(dirname(__FILE__) . '/../models/cursoModel.php'));
require_once(realpath(dirname(__FILE__) . '/../configurations/Database.php'));


class cursoDAO {

    function adiciona(Database $conexao, cursoModel $CursoModel) { 

        $query = "INSERT INTO curso (idCurso, faculdadeCurso, nomeCurso) 
        VALUES ('{$CursoModel->getId_Curso()}',
                '{$CursoModel->getFaculdade_Curso()}',
                '{$CursoModel->getNome_Curso()}')";
        mysqli_query($conexao->conecta(), $query);
    }

    }

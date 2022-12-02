<?php

require_once(realpath(dirname(__FILE__) . '/../models/cursoModel.php'));
require_once(realpath(dirname(__FILE__) . '/../DAO/cursoDAO.php'));
require_once(realpath(dirname(__FILE__) . '/../configurations/Database.php'));

require_once(realpath(dirname(__FILE__) . '/../controllers/usuarioController.php'));


class cursoController {
    
    public function insere(){
        
        $faculdade_Curso        =   $_POST["sup_inst"];
        $nome_Curso             =   $_POST["sup_curso"];
        
        
        $conexao = new Database();
        
        $curso = new cursoModel();
        
        $curso->setFaculdade_Curso($faculdade_Curso);
        $curso->setNome_Curso($nome_Curso);


        $CursoDAO = new cursoDAO();
        $CursoDAO->adiciona($conexao, $curso);
        print_R($CursoDAO);
        
    }
    

}

?>
<?php

    include ("../configurations/Database.php");
    $conexao = new Database();
    $conn = $conexao->conecta();

    $req = filter_input(INPUT_GET, "req");

    if ($req == "2") 
    {
        if(!isset($_POST['search_paciente']))
        {
            $input = $_POST['input'];

            $selectPaciente = "SELECT * FROM paciente WHERE nomePaciente LIKE '{$input}%'";
            $resultSelectPaciente = $conn->query($selectPaciente);

                if(mysqli_num_rows($resultSelectPaciente) > 0)
                {   
                 
                    while($row = mysqli_fetch_assoc($resultSelectPaciente))
                    {
                        echo "<tr>
                        <td>"   .   $row["idPaciente"]    .   "</td>
                        <td>"   .   $row["nomePaciente"]  .   "</td>      
                        <td>"   .   $row["fonePaciente"]  .   "</td>
                        <td class='td-out'>
                        <button class='btn-modal' type='button' id='modal-editar' href='../views/telaModal.php'>
                        Exibir
                        </button>
                        <button class='btn-modal' type='button' id='modal-excluir'>
                        Excluir
                        </button>
                        </td>
                        </tr>";  
                    } 
                }
            }
    }

    if ($req == "3")
    {
        if(!isset($_POST['fumante_box']))
        {
        $selectFumantes = "SELECT * FROM Paciente WHERE fumaPaciente = 1";
        $resultSelectFumantes = $conn->query($selectFumantes);

            if(mysqli_num_rows($resultSelectFumantes) > 0)
            {   
            
                while($row = mysqli_fetch_assoc($resultSelectFumantes))
                {
                    echo "<tr>
                    <td>"   .   $row["idPaciente"]    .   "</td>
                    <td>"   .   $row["nomePaciente"]  .   "</td>      
                    <td>"   .   $row["fonePaciente"]  .   "</td>
                    <td class='td-out'>
                    <button class='btn-modal' type='button' id='modal-editar'>
                    Exibir
                    </button>
                    <button class='btn-modal' type='button' id='modal-excluir'>
                    Excluir
                    </button>
                    </td>
                    </tr>";  
                } 
            }

        }
    }

    if ($req == "4")
    {
        if(!isset($_POST['diabetico_box']))
        {
        $selectDiabeticos = "SELECT * FROM Paciente WHERE diabetesPaciente = 1";
        $resultSelectDiabeticos = $conn->query($selectDiabeticos);

            if(mysqli_num_rows($resultSelectDiabeticos) > 0)
            {   
            
                while($row = mysqli_fetch_assoc($resultSelectDiabeticos))
                {
                    echo "<tr>
                    <td>"   .   $row["idPaciente"]    .   "</td>
                    <td>"   .   $row["nomePaciente"]  .   "</td>      
                    <td>"   .   $row["fonePaciente"]  .   "</td>
                    <td class='td-out'>
                    <button class='btn-modal' type='button' id='modal-editar'>
                    Exibir
                    </button>
                    <button class='btn-modal' type='button' id='modal-excluir'>
                    Excluir
                    </button>
                    </td>
                    </tr>";  
                } 
            }

        }
    }

    if ($req == "5")
    {
        if(!isset($_POST['hipertenso_box']))
        {
        $selectHipertensao = "SELECT * FROM Paciente WHERE hipertensaoPaciente = 1";
        $resultSelectHipertensos = $conn->query($selectHipertensao);

            if(mysqli_num_rows($resultSelectHipertensos) > 0)
            {   
            
                while($row = mysqli_fetch_assoc($resultSelectHipertensos))
                {
                    echo "<tr>
                    <td>"   .   $row["idPaciente"]    .   "</td>
                    <td>"   .   $row["nomePaciente"]  .   "</td>      
                    <td>"   .   $row["fonePaciente"]  .   "</td>
                    <td class='td-out'>
                    <button class='btn-modal' type='button' id='modal-editar'>
                    Exibir
                    </button>
                    <button class='btn-modal' type='button' id='modal-excluir'>
                    Excluir
                    </button>
                    </td>
                    </tr>";  
                } 
            }

        }
    }

    if ($req == "6")
    {
        if(!isset($_POST['cardiaco_box']))
        {
        $selectCardiaco = "SELECT * FROM Paciente WHERE cardiacoPaciente = 1";
        $resultSelectCardiacos = $conn->query($selectCardiaco);

            if(mysqli_num_rows($resultSelectCardiacos) > 0)
            {   
            
                while($row = mysqli_fetch_assoc($resultSelectCardiacos))
                {
                    echo "<tr>
                    <td>"   .   $row["idPaciente"]    .   "</td>
                    <td>"   .   $row["nomePaciente"]  .   "</td>      
                    <td>"   .   $row["fonePaciente"]  .   "</td>
                    <td class='td-out'>
                    <button class='btn-modal' type='button' id='modal-editar'>
                    Exibir
                    </button>
                    <button class='btn-modal' type='button' id='modal-excluir'>
                    Excluir
                    </button>
                    </td>
                    </tr>";  
                } 
            }

        }
    }

    if ($req == "7")
    {
        if(!isset($_POST['etilista_box']))
        {
        $selectEtilista = "SELECT * FROM Paciente WHERE bebePaciente = 1";
        $resultSelectEtilistas = $conn->query($selectEtilista);

            if(mysqli_num_rows($resultSelectEtilistas) > 0)
            {   
            
                while($row = mysqli_fetch_assoc($resultSelectEtilistas))
                {
                    echo "<tr>
                    <td>"   .   $row["idPaciente"]    .   "</td>
                    <td>"   .   $row["nomePaciente"]  .   "</td>      
                    <td>"   .   $row["fonePaciente"]  .   "</td>
                    <td class='td-out'>
                    <button class='btn-modal' type='button' id='modal-editar'>
                    Exibir
                    </button>
                    <button class='btn-modal' type='button' id='modal-excluir'>
                    Excluir
                    </button>
                    </td>
                    </tr>";  
                } 
            }

        }
    }

    if ($req == "8")
    {
        if(!isset($_POST['outras_box']))
        {
        $selectOutras = "SELECT * FROM paciente WHERE CHARACTER_LENGTH(outrasDoencasPaciente) > 0";
        $resultSelectOutras = $conn->query($selectOutras);

            if(mysqli_num_rows($resultSelectOutras) > 0)
            {   
            
                while($row = mysqli_fetch_assoc($resultSelectOutras))
                {
                    echo "<tr>
                    <td>"   .   $row["idPaciente"]    .   "</td>
                    <td>"   .   $row["nomePaciente"]  .   "</td>      
                    <td>"   .   $row["fonePaciente"]  .   "</td>
                    <td class='td-out'>
                    <button class='btn-modal' type='button' id='modal-editar'>
                    Exibir
                    </button>
                    <button class='btn-modal' type='button' id='modal-excluir'>
                    Excluir
                    </button>
                    </td>
                    </tr>";  
                } 
            }

        }
    }

    if($req == null){

            $selectPaciente = "SELECT * FROM paciente";
            $resultSelectPaciente = $conn->query($selectPaciente);

                if(mysqli_num_rows($resultSelectPaciente) > 0)
                {   
                 
                    while($row = mysqli_fetch_assoc($resultSelectPaciente))
                    {
                        echo "<tr>
                        <td>"   .   $row["idPaciente"]    .   "</td>
                        <td>"   .   $row["nomePaciente"]  .   "</td>      
                        <td>"   .   $row["fonePaciente"]  .   "</td>
                        </tr>";  
                    } 
                }
            
    }

    if(isset($_GET['getId'])){
        $sql = "SELECT * FROM pacientes WHERE idPaciente = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $rowData = mysqli_fetch_assoc($result);
    }

    if($req == 9)
    {
        $id_edit                    =   $_POST["id_pac"];
        $nome_Paciente              =   $_POST["nome_pac"];
        $email_Paciente             =   $_POST["email_pac"];
        $fone_Paciente              =   $_POST["fone_pac"];
        $sexo_Paciente              =   $_POST["sexo_pac"];
        $cep_Paciente               =   $_POST["cep_pac"];
        $cidade_Paciente            =   $_POST["localidade_pac"];
        $uf_Paciente                =   $_POST["uf_pac"];
        $rua_Paciente               =   $_POST["logradouro_pac"];
        $bairro_Paciente            =   $_POST["bairro_pac"];
        $num_Paciente               =   $_POST["numero_pac"];
        $complemento_Paciente       =   $_POST["complemento_pac"];

        $hipertensao_Paciente       =   $_POST["hip_pac"];
        $diabetes_Paciente          =   $_POST["diab_pac"];
        $fuma_Paciente              =   $_POST["fuma_pac"];
        $cardiaco_Paciente          =   $_POST["cardiaco_pac"];
        $bebe_Paciente              =   $_POST["bebe_pac"];


        $updatePaciente = "UPDATE paciente SET nomePaciente='$nome_Paciente', emailPaciente='$email_Paciente', 
        fonePaciente='$fone_Paciente', sexoPaciente='$sexo_Paciente', cepPaciente='$cep_Paciente', 
        cidadePaciente='$cidade_Paciente', ufPaciente='$uf_Paciente', ruaPaciente='$rua_Paciente', 
        bairroPaciente='$bairro_Paciente', numPaciente='$num_Paciente', complementoPaciente='$complemento_Paciente', 
        hipertensaoPaciente='$hipertensao_Paciente', diabetesPaciente='$diabetes_Paciente', fumaPaciente='$fuma_Paciente',
        cardiacoPaciente='$cardiaco_Paciente', bebePaciente='$bebe_Paciente' WHERE idPaciente='$id_edit' ";

        if(mysqli_query($conn, $updatePaciente) == TRUE){
            header("Location: ../views/telaCadastroExame.php");
        }else{
            echo 'Ops... Algo deu errado. ';
        die;
        }

    }
    
                
?>  
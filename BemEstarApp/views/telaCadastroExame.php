<?php

require_once('../configurations/Database.php');

session_start();
if(isset($_SESSION["idUsuario"])){
    header("location: views/telaCadastroExame.php");
}

$database = new Database();
$conexao = $database->conecta();

$pacientes = "SELECT * FROM paciente";
$query = mysqli_query($conexao, $pacientes);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <link rel="stylesheet" href="css/telaCadastroExameStyle.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Cadastrar Exame</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="img/tcePrincipal.svg" alt="">
        </div>
        <div class="form">
            <form action="../controllers/exameController.php" method="post" >
                <div class="form-header">
                    <div class="title" style="margin-top: 7rem;">
                        <h1>Cadastrar Exame</h1>
                    </div>
                </div>

                <h4>Dados </h4 ><br><hr><br>

                <div class="input-group">
                    <div class="input-box">
                        <label for="idPaciente">Paciente</label>
                        <div class="select-input-box">
                        <select name="idPaciente" required>
                            <option selected disabled>Selecione o Paciente</option>
                            <?php 
                        
                        foreach($query as $row){ ?>
                        <option value ="<?php echo $row["idPaciente"]; ?>"><?php echo $row["nomePaciente"]; ?></option>
                        <?php }?>
                    </select>
                    </div>
                    </div>

                    <div class="input-box">
                        <label for="data">Data do exame</label>
                        <input id="data" type="date" name="data_exame"  autocomplete="photo" required>
                    </div>

                    <div class="input-box">
                        <label for="peso">Peso (kg)</label>
                        <input id="peso" type="text" name="peso_exame" placeholder="Ex:  75,5" autocomplete="photo" required>
                    </div>

                    <div class="input-box">
                        <label for="altura">Altura (m)</label>
                        <input id="altura" type="text" name="altura_exame" placeholder="Ex:  1,75" autocomplete="photo" required>
                    </div>

                    <div class="input-box">
                        <label for="glicemia">Glicemia</label>
                        <input id="glicemia" type="text" name="glicemia_exame" placeholder="(mg/dL)" autocomplete="off" required>
                    </div>

                    <div class="input-box">
                        <label for="colesterol">Colesterol</label>
                        <input id="colesterol" type="text" name="colesterol_exame" placeholder="(mg/dL)" autocomplete="photo" required>
                    </div>
                    

                    <div class="input-box">
                        <label for="pressao">Pressão arterial</label>
                        <input id="pressao" type="tel" name="pressao_exame" placeholder="(mmHg)" autocomplete="photo" required>
                    </div>

                    <div class="textarea-input-box">
                        <label for="medicacoes">Medicações em uso</label>
                        <textarea id="txtMed" maxlength="355" name="medic_exame" placeholder="Digite aqui: "></textarea>
                    </div>

                    <div class="textarea-input-box">
                        <label for="observacoes">Observações</label>
                        <textarea class="obs-box" id="obs" maxlength="1500" name="obs_exame" placeholder="Digite aqui: "></textarea>
                    </div>
                </div>
                
                

                <div class="cadastrar-button">
                    <button type="submit"><a name="btn-cadastrar">Cadastrar</a></button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
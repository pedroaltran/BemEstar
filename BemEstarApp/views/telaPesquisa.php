<?php

include ("../configurations/Database.php");
$conexao = new Database();
$conn = $conexao->conecta();

$selectPaciente = "SELECT * FROM paciente";
$resultSelectPaciente = mysqli_query($conn, $selectPaciente);

$numRows = mysqli_num_rows($resultSelectPaciente); 

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <link rel="stylesheet" href="css/telaPesquisaStyle.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../js/modal.js" defer></script>

    <title>Pesquisar</title>
</head>

<body>
    <div class="container">
        
            <div class="form-image">
                <img src="img/tpPrincipal.svg" alt="">
            </div>

        <div class="form">

            <div class="form-header">
                <div class="title">
                        <h1>Pesquisar paciente</h1><br><br>
                </div>
            </div>

                <div class="options">
                    <div class="search-box">
                        <input class="search-txt" type="text" id="search_txt" placeholder="Digite o nome do paciente" onclick="pesquisar()">
                        <a href="" class="search-btn">
                        <img src="img/tpLupa.svg" alt="Lupa" height="30" width="30">
                        </a>
                    </div><br>
                </div>    

                    <div class="filter-box">
                            <label class="checkes">Fumantes
                                <input type="checkbox" name="check_box[]" id="fumante_box" onclick="selectFumantes()" value="fumantes">
                                <span class="checkmark"></span>
                            </label>

                            <label class="checkes">Diabéticos
                                <input type="checkbox" name="check_box[]" id="diabetico_box" onclick="selectDiabeticos()" value="diabeticos">
                                <span class="checkmark"></span>
                            </label>
                            
                            <label class="checkes">Hipertensos
                                <input type="checkbox" name="check_box[]" id="hipertenso_box" onclick="selectHipertensos()" value="hipertensos">
                                <span class="checkmark"></span>
                            </label>

                            <label class="checkes">Cardiacos
                                <input type="checkbox" name="check_box[]" id="cardiaco_box" onclick="selectCardiacos()" value="cardiacos">
                                <span class="checkmark"></span>
                            </label>

                            <label class="checkes">Etilistas
                                <input type="checkbox" name="check_box[]" id="etilista_box" onclick="selectEtilistas()" value="etilistas">
                                <span class="checkmark"></span>
                            </label>
                            
                            <label class="checkes">Outras
                                <input type="checkbox" name="check_box[]" id="outras_box" onclick="selectOutras()" value="outras">
                                <span class="checkmark"></span>
                            </label>

                        <a href="#" class="filter-btn">
                            <img src="img/tpFilter.png" alt="Filtro" height="30" width="30">
                        </a>
                    </div>
                    
                        <div class="teste">
                            <table class="table-result">
                                
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Fone</th>
                                        <th class="thOptions"> Opções </th>
                                    </tr>
                                </thead>
                                
                                <tbody id="output">
                                    
                                    <?php
                                    $array = array();
                                    while($row = mysqli_fetch_assoc($resultSelectPaciente)) {
                                        array_push($array, $row);

                                    ?>

                                    <tr>
                                    <td><?php echo $row["idPaciente"]   ;?> </td>
                                    <td><?php echo $row["nomePaciente"] ;?> </td>      
                                    <td><?php echo $row["fonePaciente"]  ;?> </td>
                                    <td class='td-out'>
                                    <button class='btn-modal' type='button' id='modal-editar'>
                                    Exibir
                                    </button>
                                    <button class='btn-modal' type='button' id='modal-excluir'>
                                    Excluir
                                    </button>
                                    </td>
                                    </tr>
                                    
                                </tbody>
                                
                            </table>
                        </div>

                                    <div id="fade" class="hide"></div>
                                    <form action="../controllers/pesquisaController.php" method="POST">
                                        <div id="modal" class="hide">

                                            <div class="modal-header">
                                                <h2>Editar</h2>
                                                <a id="modal-fechar">X</a>
                                            </div>

                                                <div class="modal-body">

                                                    <div class="input-group">

                                                        <input type="hidden" name="id_pac" value="<?php echo $row["idPaciente"]; ?>">
                                                        <div class="input-box">
                                                            <label for="name">Nome</label>
                                                            <input id="name" type="text" name="nome_pac" value="<?php echo $row["nomePaciente"]; ?>" autocomplete="none">
                                                        </div>
    

                                                        <div class="input-box">
                                                            <label for="email">Email</label>
                                                            <input id="email" type="email" name="email_pac" value="<?php echo $row["emailPaciente"]; ?>">
                                                        </div>

                                                        <div class="input-box">
                                                            <label for="tel">Número de telefone</label>
                                                            <input id="tel" type="tel" name="fone_pac" value="<?php echo $row["fonePaciente"]; ?>" autocomplete="none">
                                                        </div>


                                                        <div class="input-box">
                                                            <label for="cep">CEP</label>
                                                            <input id="cep" type="text" name="cep_pac" value="<?php echo $row["cepPaciente"]; ?>" maxlength="9" autocomplete="none">
                                                        </div>

                                                        <div class="input-box">
                                                            <label for="localidade">Cidade</label>
                                                            <input id="localidade" type="text" name="localidade_pac" value="<?php echo $row["cidadePaciente"]; ?>" style="padding-right: 5vw ;" autocomplete="none">
                                                        </div>

                                                        <div class="input-box">
                                                            <label for="uf">Estado</label>
                                                            <input id="uf" type="text" name="uf_pac" value="<?php echo $row["ufPaciente"]; ?>" style="width: 5vw ;" autocomplete="none">
                                                        </div>
                                                        
                                                        <div class="input-box">
                                                            <label for="logradouro">Rua</label>
                                                            <input id="logradouro" type="text" name="logradouro_pa" value="<?php echo $row["ruaPaciente"]; ?>" autocomplete="none" >
                                                        </div>

                                                        <div class="input-box">
                                                            <label for="bairro">Bairro</label>
                                                            <input id="bairro" type="text" name="bairro_pac" value="<?php echo $row["bairroPaciente"]; ?>" autocomplete="none">
                                                        </div>

                                                        <div class="input-box">
                                                            <label for="numero">Número</label>
                                                            <input id="numero" type="text" name="numero_pac" value="<?php echo $row["numPaciente"]; ?>" autocomplete="none">
                                                        </div>

                                                        <div class="input-box">
                                                            <label for="complemento">Complemento</label>
                                                            <input id="complement" type="text" name="complemento_pac" value="<?php echo $row["complementoPaciente"]; ?>" autocomplete="none">
                                                        </div>

                                                        <button type="submit" name="update-paciente" id="modal-salvar">Salvar</button>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                         <?php } ?>
                                        </div>
                                    </form>    
                                        
        </div>
    </div>
<script src="../js/viacep.js"></script>
<script type="text/javascript" src="../js/select.js" defer> </script>
</body>

</html>

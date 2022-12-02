<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <link rel="stylesheet" href="css/telaCadastroPacienteStyle.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Cadastrar Paciente</title>

    <style>
        .errorMessage {
        background-color: #ffffdb;
        width: 140px;
        font-size: small;
        padding-left: 10px;
        padding-right: 5px;
        padding-top: 5px;
        padding-bottom: 5px;
        margin-left: 15px;
        visibility: hidden;
        border-radius: 10px;
        position: relative;
        float: left;
        }
        .errorMessage.top-arrow:after {
        content: " ";
        position: absolute;
        right: 90px;
        top: -15px;
        border-top: none;
        border-right: 3px solid transparent;
        border-left: 3px solid transparent;
        border-bottom: 6px solid white;
        }
</style>

</head>

<body>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">

    function validateForm()
    {
        var form           = document.forms["cadastroForm"];
        var pesoPaciente   = form.peso_pac.value
        var alturaPaciente = form.altura_pac.value
        
        if(pesoPaciente == null || pesoPaciente >  400) {
            document.getElementsByClassName( "errorMessage" )[0].style.visibility = "visible";
            document.getElementsByClassName( "errorMessage" )[0].innerHTML = "Por favor, insira um valor válido";
            return false;
        }

        if(alturaPaciente == null || alturaPaciente >  2.6) {
            document.getElementsByClassName( "errorMessage" )[1].style.visibility = "visible";
            document.getElementsByClassName( "errorMessage" )[1].innerHTML = "Por favor, insira um valor válido";
            return false;
        }

        return true
           
    }

</script>

    <div class="container">
        <div class="form-image">
            <img src="img/tcpPrincipal.svg" alt="">
        </div>
        <div class="form">
            <form action="../controllers/pacienteController.php" method="post" name="cadastroForm" onsubmit="return validateForm()">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastrar paciente</h1>
                    </div>
                </div>

                <h4>Identificação paciente</h4 ><br><hr>

                <div class="input-group" action="" method="">
                    <div class="input-box">
                        <label for="name">Nome</label>
                        <input id="name" type="text" name="nome_pac" placeholder="Nome completo" autocomplete="photo" required>
                    </div>

                    <div class="input-box">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email_pac" placeholder="emailpaciente@email.com" autocomplete="off">
                    </div>

                    <div class="input-box">
                        <label for="tel">Número de telefone</label>
                        <input id="tel" type="tel" name="fone_pac" placeholder="(xx) xxxxx-xxxx" autocomplete="photo" required>
                    </div>

                    <div class="select-input-box">
                        <label for="sexo">Sexo</label><br>
                        <select name="sexo_pac">
                            <option selected disabled> </option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                            <option value="O">Outro</option>
                          </select>
                    </div>

                    <div class="input-box">
                        <label for="date">Data de nascimento</label>
                        <input id="date" type="date" name="data_pac" required>
                    </div>

                    <div class="input-box">
                        <label for="cep">CEP</label>
                        <input id="cep" type="text" name="cep_pac" placeholder="_________" maxlength="9" required>
                    </div>

                    <div class="input-box">
                        <label for="localidade">Cidade</label>
                        <input id="localidade" type="text" name="localidade_pac" placeholder="Cidade" autocomplete="photo" required style="padding-right: 5vw ;">
                    </div>

                    <div class="input-box">
                        <label for="uf">Estado</label>
                        <input id="uf" type="text" name="uf_pac" placeholder="UF" autocomplete="photo" required style="width: 5vw ;">
                    </div>
                    
                    <div class="input-box">
                        <label for="logradouro">Rua</label>
                        <input id="logradouro" type="text" name="logradouro_pac" placeholder="Rua" autocomplete="photo" required>
                    </div>

                    <div class="input-box">
                        <label for="bairro">Bairro</label>
                        <input id="bairro" type="text" name="bairro_pac" placeholder="Bairro" autocomplete="photo" required>
                    </div>

                    <div class="input-box">
                        <label for="numero">Número</label>
                        <input id="numero" type="text" name="numero_pac" placeholder="Número" autocomplete="photo" required>
                    </div>

                    <div class="input-box">
                        <label for="complemento">Complemento</label>
                        <input id="complement" type="text" name="complemento_pac" placeholder="Complemento" autocomplete="photo" >
                    </div>
                </div>

                <h4>Dados antropométricos</h4><br><hr><br>
                    <div class="input-group">
                        <div class="input-box">
                            <label for="peso">Peso (kg)</label>
                            <input id="peso" type="text" name="peso_pac" placeholder="Ex:  75,5 " autocomplete="photo" required>
                            <p class = "errorMessage top-arrow" > </p>
                        </div>

                        <div class="input-box">
                            <label for="altura">Altura (m)</label>
                            <input id="altura" type="text" name="altura_pac" placeholder="Ex:  1,75" autocomplete="photo" required>
                            <p class = "errorMessage top-arrow" > </p>
                        </div>
                    </div>

                <h4>Dados clínicos</h4><br><hr><br>
                <div class="select-group">
                    <div class="select-input-box">
                        <label for="hipertensao">Hipertensão</label><br>
                        <select name="hip_pac">
                            <option selected disabled> </option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                          </select>
                    </div>

                    <div class="select-input-box">
                        <label for="diab_pac">Diabetes</label><br>
                        <select name="diab_pac">
                            <option selected disabled> </option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                          </select>
                    </div>

                    <div class="select-input-box">
                        <label for="fuma_pac">Fumante</label><br>
                        <select name="fuma_pac">
                            <option selected disabled> </option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                          </select>
                    </div>

                    <div class="select-input-box">
                        <label for="cardiaco_pac">Doença Cardíaca</label><br>
                        <select name="cardiaco_pac">
                            <option selected disabled> </option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                          </select>
                    </div>

                    <div class="select-input-box">
                        <label for="bebe_pac">Etilista</label><br>
                        <select name="bebe_pac">
                            <option selected disabled> </option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                          </select>
                    </div>

                    <div class="select-input-box">
                        <label for="outras">Outras</label>
                        <input id="outras" type="text" name="outras_pac" placeholder="Outras" autocomplete="photo">
                    </div>

                    <div class="select-input-box">
                        <label for="medicacoes">Medicações em uso</label>
                        <input id="medicacoes" type="text" name="medic_pac" placeholder="Medicações em uso" autocomplete="photo">
                    </div>
                
                </div>
                
                <div class="cadastrar-button">
                    
                    <button type="submit"><a name="btn-cadastrar">Cadastrar</a></button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="../js/viacep.js"></script>
</body>

</html>

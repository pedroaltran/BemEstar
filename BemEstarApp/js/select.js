
        function pesquisar(){
            $(document).ready(function () {
                $("#search_txt").keyup(function () {
                    var inputpaciente = $(this).val();

                    $.ajax({
                        url: "../controllers/pesquisaController.php?req=2",
                        method: "post",
                        data: {input:inputpaciente},
                        success: function (result) {
                            $("#output").html(result);
                        },
                        error: function (result) {
                            console.log(result);
                        }
                    });
                });
            });
        }

        function selectFumantes(){
            $(document).ready(function () {
                $("#fumante_box").toggle(function () {
                    var inputFumantes = $(this).val();
                    
                    if($("#fumante_box").click){
                        $.ajax({
                            url: "../controllers/pesquisaController.php?req=3",
                            method: "post",
                            data: {input:inputFumantes},
                            success: function (result) {
                                $("#output").html(result);
                            },
                            error: function (result) {
                                console.log(result);
                            }
                        });
                    }

                });
            });
        }

        function selectDiabeticos(){
            $(document).ready(function () {
                $("#diabetico_box").toggle(function () {
                    var inputDiabeticos = $(this).val();
                    
                    if($("#diabetico_box").click){
                        $.ajax({
                            url: "../controllers/pesquisaController.php?req=4",
                            method: "post",
                            data: {input:inputDiabeticos},
                            success: function (result) {
                                $("#output").html(result);
                            },
                            error: function (result) {
                                console.log(result);
                            }
                        });
                    }

                });
            });
        }

        function selectHipertensos(){
            $(document).ready(function () {
                $("#hipertenso_box").toggle(function () {
                    var inputHipertensos = $(this).val();
                    
                    if($("#hipertenso_box").click){
                        $.ajax({
                            url: "../controllers/pesquisaController.php?req=5",
                            method: "post",
                            data: {input:inputHipertensos},
                            success: function (result) {
                                $("#output").html(result);
                            },
                            error: function (result) {
                                console.log(result);
                            }
                        });
                    }

                });
            });
        }

        function selectCardiacos(){
            $(document).ready(function () {
                $("#cardiaco_box").toggle(function () {
                    var inputCardiacos = $(this).val();
                    
                    if($("#cardiaco_box").click){
                        $.ajax({
                            url: "../controllers/pesquisaController.php?req=6",
                            method: "post",
                            data: {input:inputCardiacos},
                            success: function (result) {
                                $("#output").html(result);
                            },
                            error: function (result) {
                                console.log(result);
                            }
                        });
                    }

                });
            });
        }

        function selectEtilistas(){
            $(document).ready(function () {
                $("#etilista_box").toggle(function () {
                    var inputEtilistas = $(this).val();
                    
                    if($("#etilista_box").click){
                        $.ajax({
                            url: "../controllers/pesquisaController.php?req=7",
                            method: "post",
                            data: {input:inputEtilistas},
                            success: function (result) {
                                $("#output").html(result);
                            },
                            error: function (result) {
                                console.log(result);
                            }
                        });
                    }

                });
            });
        }

        function selectOutras(){
            $(document).ready(function () {
                $("#outras_box").toggle(function () {
                    var inputOutros = $(this).val();
                    
                    if($("#outras_box").click){
                        $.ajax({
                            url: "../controllers/pesquisaController.php?req=8",
                            method: "post",
                            data: {input:inputOutros},
                            success: function (result) {
                                $("#output").html(result);
                            },
                            error: function (result) {
                                console.log(result);
                            }
                        });
                    }

                });
            });
        }
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstra
p.min.css" integrity="sha384-
MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="styleesheet" href="java.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    function mudarCorInput() {
        document.getElementById("nomeID").style.background = '#000000';
    }

    function procurarCidade() {
        let nome = document.getElementById("estadoID").value;
        $.ajax({
            url: "retornaCidades.php",
            type: "POST",
            data: "estado=" + nome,
            dataType: "html"
        }).done(function(resposta) {
            console.log(resposta);
            $('#cidadeID').html(resposta);
        }).fail(function(jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
        }).always(function() {
            console.log("completou");
        });
    }
    </script>
</head>

<body>

    <body>
        <div class="container">
            <form id="formDadastroDeAluno" method="POST" action="index.php">
                <h1>Aula prática 01 - Bootstrap, JavaScript e Ajax</h1>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cpf">Nome</label>
                        <input onclick="mudarCorInput()" type="text" class="form-control" name="nome" id="nomeID">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="cpf">CPF</label>
                        <input type="number" class="form-control" name="cpf" id="inputPassword4">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="sexoID">Sexo</label>
                        <select name="sexo" id="sexoID" class="form-control">
                            <option value="m" selected>Masculino</option>
                            <option value="f">Feminino</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="telefoneID">Telefone</label>
                        <input type="tel" class="form-control" name="telefone" id="teleFoneID">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cepID">CEP</label>
                        <input type="number" class="form-control" name="cep" id="cepID">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="turmaID">Turma</label>
                        <select name="turma" id="turmaID" class="form-control">
                            <option value="1228" selected>1228</option>
                            <option value="1225">1226</option>
                            <option value="32212">32212</option>
                            <option value="32213">32213</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="estadoID">Estado Origem</label>
                        <select id="estadoID" onchange="procurarCidade()" name="estado" class="form-control">
                            <option value="0" selected>Escolher...</option>
                            <option value="sp">São Paulo</option>
                            <option value="ms">Mato Grosso do Sul</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="cidadeID">Cidade Origem</label>
                        <select id="cidadeID" name="cidade" class="form-control">

                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </body>

</body>

</html>
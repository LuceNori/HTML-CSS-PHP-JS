<?php
$path = 'http://' . $_SERVER["HTTP_HOST"] . '/projetoWeb2';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manter Aluno e Professor</title>
    <link href="./arquivos/css/bootstrap.min.css" rel="stylesheet">
    <link href="./arquivos/css/custom.css" rel="stylesheet">
    <link href="./arquvios/css/teste.css" rel="stylesheet">
    <script src="./arquivos/js/switch.js"></script>
    <script src="./arquivos/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <?php include("./menu.php") ?>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Desenvolvimento Web 2</h1>
        <p class="lead">Objetivo: Desenvolver aplicações WEB utilizando servidor apache, linguagem PHP, biblioteca
            jQuery, acesso a banco de dados e técnicas de orientação a objetos seguindo o padrão MVC para desenvolver
            aplicações completas.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="./arquivos/imagens/ifms1.png" class="d-block w-100" alt="Imagens de estudantes sorrindo enquanto comem">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="./arquivos/imagens/ifms2.jpeg" class="d-block w-100" alt="Imagem do diretor conversando com pais de estudantes">
                        </div>
                        <div class="carousel-item">
                            <img src="./arquivos/imagens/ifms3.jpeg" class="d-block w-100" alt="Imagem dos professors do instituto federal de mato grosso do sul sentado em carteiras escrevendo em papeis">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <a href="https://www.ifms.edu.br/campi/campus-corumba"><img
                                    src="<?php echo $path; ?>/arquivos/imagens/marcaifms.png" width="100%"></a>
                            <p class="card-text"><br>Site do ifms corumbá</p>
                            <a href="https://www.ifms.edu.br/campi/campus-corumba" class="btn btn-primary">IFMS CORUMBÁ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./arquivos/js/cor.js"></script>
    <script src="./arquivos/js/switch.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
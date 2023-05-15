<?php
$path = 'http://' . $_SERVER["HTTP_HOST"] . '/projetoWeb2';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
    <link href="./arquivos/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $path; ?>/arquivos/css/custom.css" rel="stylesheet">
    <script src="<?php echo $path; ?>/arquivos/js/switch.js"></script>
    <script src="./arquivos/js/bootstrap.bundle.min.js"></script>


</head>

<body>

    <?php include("./menu.php") ?>
    <div class="container mt-3">
        <div class="d-flex">
        </div>
        <h2>Materias disponiveis</h2>
        <table class="table table-bordered" summary="Materiais disponiveis-Informações referentes as materias disponiveis no curso">
        <caption>Tabela de materias disponiveis</caption>
            <thead>
                <tr>
                    <th>Dia</th>
                    <th>Horario</th>
                    <th>Local</th>
                    <th>materia</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Segunda-Feira</th>
                    <td>07:00</td>
                    <td>Lab B</td>
                    <td>Programação de computadores</td>
                    
                </tr>
                <tr>
                    <th>Segunda-Feira</th>
                    <td>07:45</td>
                    <td>Lab B</td>
                    <td>Desenvolvimento web 2</td>
                    
                </tr>
                <tr>
                    <th>Quarta-Feira</th>
                    <td>07:00</td>
                    <td>Lab C</td>
                    <td>Laboratorio de redes</td>
                    
                </tr>
                <tr>
                    <th>Quarta-Feira</th>
                    <td>09:15</td>
                    <td>Lab C</td>
                    <td>Linguagem de programação</td>
                    
                </tr>
            </tbody>
        </table>

    </div>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Discentes
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">RODRIGO</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">ANA ELISA</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">LUCAS</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">FRANK</a></li>
            </ul>
        </li>
    <script src="<?php echo $path; ?>/arquivos/js/cor.js"></script>
    <script src="<?php echo $path; ?>/arquivos/js/switch.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
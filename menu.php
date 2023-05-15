<?php
$path = 'http://' . $_SERVER["HTTP_HOST"] . '/projetoWeb2';
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary mt-3">
    <div class="container-fluid">
        <img src="<?php echo $path; ?>/arquivos/imagens/ifmscb.png" width="9%" alt="Logotipo do instituto federal do mato grosso do sul campus corumbá">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $path; ?>/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>/matricula.php">Materias</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Campus
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo $path; ?>/view/campus/cadastroDeCampus.php">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="<?php echo $path; ?>/view/campus/buscarCampus.php">Buscar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Area
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo $path; ?>/view/area/cadastroDeArea.php">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="<?php echo $path; ?>/view/area/buscarArea.php">Buscar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Curso
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo $path; ?>/view/curso/cadastroDeCurso.php">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="<?php echo $path; ?>/view/curso/buscarCurso.php">Buscar</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                </li>
            </ul>
            <form class="d-flex" role="search">
            <div class="form-check form-switch ms-auto mt-3 me-3">
                <label class="form-check-label ms-3" for="lightSwitch">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    fill="currentColor"
                    class="bi bi-brightness-high"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
                    />
                  </svg>
                </label>
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="lightSwitch"
                />
              </div>
            </div>
                <a class="btn btn-outline-primary me-2" id="linkDeslogar" href="#">Deslogar</a>
                <a class="btn btn-outline-primary" id="linkLogar" href="#">Logar</a>
            </form>
        </div>
    </div>
</nav>
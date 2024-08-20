



<header class=" bg-dark bg-gradient w-100">
    <nav class="navbar navbar-expand-lg">
      <div class="container px-5">
        <a class="navbar-brand" href="<?php echo URL?>">
            <img src="<?php echo $Logo ?>" alt="Logo Aldomar Assolin Fullstack">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav w-100 d-flex align-item-center justify-content-end">
            <li class="nav-item">
              <a href="<?php echo URL?>" class="<?php echo $arquivo === 'pages/home.php' ? 'active' : ''; ?> nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo URL?>exercicios" class="<?php echo $arquivo === 'pages/exercicios.php' ? 'active' : ''; ?> nav-link">Exercícios</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo URL ?>operadores" class="<?php echo $arquivo === 'pages/operadores.php' ? 'active' : ''; ?> nav-link">Operadores</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo URL ?>w3sExamples" class="<?php echo $arquivo === 'pages/w3sExamples.php' ? 'active' : ''; ?> nav-link">W3sExamples</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo URL ?>formularios" class="<?php echo $arquivo === 'pages/formularios.php' ? 'active' : ''; ?> nav-link">Formulários</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>
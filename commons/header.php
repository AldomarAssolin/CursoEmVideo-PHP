



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
              <a href="<?php echo URLBlog?>" class="<?php echo $arquivo === 'pages/home.php' ? 'active' : ''; ?> nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PHP
              </a>
              <ul class="dropdown-menu bg-dark">
                <li>
                  <a href="<?php echo URL?>#" class="<?php echo $arquivo === 'pages/home.php' ? 'active' : ''; ?> nav-link">PHP</a>
                </li>
                
                <li><hr class="dropdown-divider"></li>
                <li><a class="nav-link" href="<?php echo URL ?>tarefas">Tarefas</a></li>
                <li><a class="nav-link" href="<?php echo URL ?>listtarefas">Lista de Tarefas</a></li>
                <li><a class="nav-link" href="<?php echo URL ?>habitos">Hábitos</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>
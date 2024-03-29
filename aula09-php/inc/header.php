<?php
  session_start();
  $nomeLogado = $_SESSION["nome"];
  $emailLogado = $_SESSION["email"];
  $nivel_acesso = $_SESSION["nivel_acesso"];
?>

<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="index.php">
            <span>Cursos</span>
        </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php if ($nivel_acesso == 1) : ?>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ações <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Adicionar Produto</a></li>
                        <li><a href="#">Editar Produto</a></li>
                    </ul>
                    </li>
                </ul>
            <?php endif; ?>
            <form id="formulario" class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input id="barraBusca" type="text" class="form-control" placeholder="Pesquise Aqui">
            </div>
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </form>
            <p class="navbar-text navbar-right">
                Logado como
                <strong>
                    <a href="usuario.php" class="navbar-link"><?php echo $nomeLogado; ?></a>
                </strong>
                <a href="inc/logout.php" class="btn btn-danger">Logout</a>
            </p>
        </div>
    </div>
</nav>
</header>

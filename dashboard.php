<?php
// Inicie a sessão (certifique-se de chamar isso no início de cada arquivo que usa ou modifica variáveis de sessão)
session_start();

// Verifique se o usuário está autenticado
if (!isset($_SESSION['username'])) {
    // Se o usuário não estiver autenticado, redirecione para a página de login
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Adicione os links CDN do Bootstrap aqui -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Página Inicial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Sair</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Licenças</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#">Office 365 E3</a></li>
                        <li class="list-group-item"><a href="#">Office 365 Premium</a></li>
                        <li class="list-group-item"><a href="#">Power BI</a></li>
                        <li class="list-group-item"><a href="#">Project</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <h5 class="card-title">Bem-vindo, <?php echo $_SESSION['username']; ?>!</h5>
                    <p class="card-text">Esta é a página do seu dashboard.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Adicione os scripts do Bootstrap aqui -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>


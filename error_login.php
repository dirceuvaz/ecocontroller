<?php
session_start();

// Verificar se há uma mensagem de erro na sessão
$errorMessage = isset($_SESSION['login_error']) ? $_SESSION['login_error'] : '';
unset($_SESSION['login_error']); // Limpar a mensagem de erro para não exibi-la novamente

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro de Autenticação</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center alert alert-danger">Login ou senha incorreta!</h3>
                </div>
                
                <div class="card-body">
                    <?php if ($errorMessage): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $errorMessage; 
                            ?>
                        </div>
                    <?php endif; ?>

                    <form action="processa_login.php" method="post">
                        <div class="form-group">
                            <label for="username">Usuário:</label>
                            <input type="text" class="form-control" id="username" name="username" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="password">Senha:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Acessar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

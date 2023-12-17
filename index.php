<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ECO Controller</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body class="text-center">

    <form class="form-signin" action="processa_login.php" method="post">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Faça o seu login</h1>

        <label for="username">Usuário:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>

        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>


        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Me lembrar
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
        <p class="mt-5 mb-3 text-muted">&copy; Desenvolvido por Dirceu Vaz - 2023</p>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

 
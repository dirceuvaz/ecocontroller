
<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecocontroller";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Obter dados do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Proteger contra injeção de SQL (não é a melhor prática, use prepared statements)
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Consultar o banco de dados para verificar as credenciais
$sql = "SELECT * FROM usuario WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login bem-sucedido .... 
    // Inicie a sessão e armazene informações do usuário, se necessário
    session_start();
    $_SESSION['username'] = $username;

    // Redirecione para a página de boas-vindas
    header("Location: dashboard.php");
    exit();
} else {
    // Login falhou
    header("Location: error_login.php");
}
$conn->close();

?>



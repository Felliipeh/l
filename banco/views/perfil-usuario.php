<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/Usuario.php';

// Verifica se o usuário está logado
if (!isset($_SESSION['id_usuario'])) {
    header('Location: /estante_web/banco/views/login.php');
    exit();
}

// Cria um objeto do usuário com base no ID armazenado na sessão
$usuario = new Usuario($_SESSION['id_usuario']);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo, <?php echo htmlspecialchars($usuario->nome); ?></title>
    <link rel="stylesheet" href="/estante_web/banco/css/style.css">
</head>
<body>
    <header>
        <h1>Bem-vindo, <?php echo htmlspecialchars($usuario->nome); ?></h1>
    </header>
    <nav>
    <a href="index.php">Início</a>
    <a href="logout.php">Sair</a>
</nav>


    <main>
        <h2>Livros Favoritos</h2>
        <?php
        // Aqui você deve implementar a lógica para recuperar e exibir os livros favoritos do usuário
        // Isso pode variar dependendo da estrutura do banco de dados e da lógica de aplicação
        
        // Exemplo simples (substitua com sua lógica real):
        echo "<ul>";
        echo "<li>Livro Favorito 1</li>";
        echo "<li>Livro Favorito 2</li>";
        echo "</ul>";
        ?>

        <form action="/estante_web/banco/controllers/logout_script.php" method="post">
            <button type="submit">Sair</button>
        </form>
    </main>
</body>
</html>

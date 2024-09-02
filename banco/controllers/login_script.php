<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/models/Usuario.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_login = $_POST['email-login'];
    $senha_login = $_POST['senha-login'];

    try {
        $conn = Conexao::conectar();
        $sql = 'SELECT * FROM usuarios WHERE email = :email';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':email', $email_login);
        $stmt->execute();
        $resultado = $stmt->fetch();

        if (!empty($resultado) && password_verify($senha_login, $resultado['senha'])) {
            $_SESSION['id_usuario'] = $resultado['id_usuario'];
            $_SESSION['nome'] = $resultado['nome'];
            $_SESSION['email'] = $resultado['email'];

            header('Location: /estante_web/banco/views/perfil.php');
            exit();
        } else {
            echo "<script>
                    alert('E-mail ou senha incorretos.');
                    window.location.href = '/estante_web/banco/views/login.php';
                  </script>";
        }
    } catch (PDOException $e) {
        echo "<script>
                alert('Erro: " . $e->getMessage() . "');
                window.location.href = '/estante_web/banco/views/login.php';
              </script>";
    }
}

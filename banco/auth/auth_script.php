<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/conexao.php';
session_start();

class Auth
{
    static function login($email, $senha)
    {
        try {
            $conn = Conexao::conectar();

            // Verifica se o usuário existe
            $sql = 'SELECT * FROM usuarios WHERE email = :email';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':email', $email);
            $stmt->execute();

            $resultado = $stmt->fetch();

            if ($resultado && password_verify($senha, $resultado['senha'])) {
                $_SESSION['id_usuario'] = $resultado['id_usuario'];
                $_SESSION['nome'] = $resultado['nome'];
                $_SESSION['email'] = $resultado['email'];

                header('Location: /estante_web/banco/index.php'); // Ajuste o caminho conforme necessário
                exit();
            } else {
                // Exibe uma mensagem de erro e redireciona para a página de login
                echo "<script>
                        alert('E-mail ou senha inválidos.');
                        window.location.href = '/estante_web/banco/views/login.php';
                      </script>";
            }
        } catch (PDOException $erro) {
            echo "<script>
                    alert('Erro: " . $erro->getMessage() . "');
                    window.location.href = '/estante_web/banco/views/login.php';
                  </script>";
        }
    }

    static function logout()
    {
        session_unset();
        session_destroy();
        header('Location: /estante_web/banco/views/login.php');
        exit();
    }

    static function estarLogado()
    {
        return isset($_SESSION['nome']);
    }
}

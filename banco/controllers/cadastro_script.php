<?php
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/config.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/config.php';
} else {
    echo "Arquivo config.php não encontrado!";
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/bancoconfigs/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/estante_web/banco/configs/conexao.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $files = $_POST["file"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT); // Use password_hash para segurança

    try {
        $conn = Conexao::conectar();
        $sql = "INSERT INTO usuarios (foto_perfil, nome, email, senha) VALUES (:files, :nome, :email, :senha)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':files', $files);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);

        if ($stmt->execute()) {
            echo "Cadastro feito com sucesso!";
        } else {
            echo "Erro ao inserir registro.";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>

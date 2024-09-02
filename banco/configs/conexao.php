<?php

require_once __DIR__ . '/config.php'; // Usei  dir para pegar o diretório atual

class Conexao {
    static function conectar() {
        try {
            $conn = new PDO('mysql:host=' . LOCAL_BANCO . ';dbname=' . NOME_BANCO . ';charset=utf8', USUARIO, SENHA);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
         
            echo "Erro na conexão: " . $e->getMessage();
            die(); // Termina a execução caso haja erro
        }
    }
}

<?php
    class Conexao{
        private $banco = 'agenda';
        private $username = 'root';
        private $password = '';
        private $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
            // Configura o PDO para lançar exceções em caso de erro
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
            // Define o modo de busca padrão como FETCH_ASSOC
        ];

        function conectar(){
            try {
                $dsn = 'mysql:host=localhost;dbname=' . $this->banco;
                // Criação da instância PDO
                $pdo = new PDO($dsn, $this->username, $this->password, 
                $this->options);
                echo "Conexão bem-sucedida!";
                return $pdo;
            } catch (PDOException $e) {
                // Tratamento de exceções
                echo "Falha na conexão: " . $e->getMessage();
            }
        }
    }
?>
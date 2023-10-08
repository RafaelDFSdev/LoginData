<?php 
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'cadastro');

$conn = new MySQLi(HOST, USER, PASS, BASE);

// Verifique a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Se a conexão for bem-sucedida, você pode prosseguir com as operações no banco de dados

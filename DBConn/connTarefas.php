<?php

// Configurações de banco de dados (se você precisar mais tarde)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tarefas";

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

return $conn;

?>
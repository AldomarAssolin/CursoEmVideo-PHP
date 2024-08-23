

<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "tarefas";

    // Cria uma conexão com o banco de dados
    $conexao = new mysqli( $servidor, $usuario, $senha, $bancodedados);
    
    // Verifica a conexão
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }



    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $data = $_POST["data"];
    

    if($nome && $descricao && $data){
        // Prepara a declaração SQL para prevenir SQL Injection
        $stmt = $conexao->prepare("INSERT INTO tarefa (nome, descricao, status, data) VALUES (?,?, 'Aberto',?)");
        $stmt->bind_param("sss", $nome, $descricao, $data);// "s" indica que o parâmetro é uma string

        //Executa a query e verifica se foi bem sucedida
        if($stmt->execute() === TRUE){
            $stmt->close();
            $conexao->close();
            header("Location: tarefas");
            //http_response_code(201); // Define o código de status HTTP para 201 Created
            exit();
        }else{
            http_response_code(500); // Define o código de status HTTP para 500 Internal Server Error
            $stmt->close();
            $conexao->close();
            die("Erro na inserção: " . $conexao->error);
        }
    }else{
        http_response_code(400); // Define o código de status HTTP para 400 Bad Request
        echo '<p class="main text-danger">Parâmetros não fornecido!</p>';
    }


?>
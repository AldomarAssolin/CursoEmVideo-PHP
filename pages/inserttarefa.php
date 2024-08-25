

<?php

    require_once './config/config.php';


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $data = $_POST["data"];

        if(empty($nome) || empty($descricao) || empty($data)){
            $errorMsg = "Todos os campos devem ser preenchidos";
            exit;
        }

        //escapar os dados para evitar injeções SQL
        $nome = $conn->real_escape_string($nome);
        $descricao = $conn->real_escape_string($descricao);
        $data = $conn->real_escape_string($data);

        //Inserir os dados no banco
        $sql = "INSERT INTO tarefa (nome, descricao, data) VALUES (?, ?, ?)";

        if($stmt = $conn->prepare($sql)){
            $stmt->bind_param("sss", $nome, $descricao, $data);
        }

        if($stmt->execute()){
            $successMsg = "Tarefa cadastrada com sucesso";
            header("Location: tarefas");
            exit;
        }else{
            echo "Erro ao preparar a consulta: " . $conn->error;
        }
    }

    $conn->close();

    
    
/*
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
*/

?>
<?php


    require_once './config/config.php';

    $id = $_GET['id'];

    if($id){
        // Prepara a declaração SQL para prevenir SQL Injection
        $stmt = $conn->prepare("UPDATE tarefa SET status = 'Aberto' WHERE id = ?");
        $stmt->bind_param("i", $id);// "s" indica que o parâmetro é uma string

        //Executa a query e verifica se foi bem sucedida
        if($stmt->execute() === TRUE){
            $stmt->close();
            $conn->close();
            header("Location: listtarefas");
            exit();
        }else{
            $stmt->close();
            $conn->close();
            die("Erro na atualização: " . $conn->error);
        }
    }else{
        echo '<p class="main text-danger">Id não fornecido!</p>';
    }


?>
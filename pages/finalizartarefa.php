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



    $id = $_GET["id"];

    if($id){
        // Prepara a declaração SQL para prevenir SQL Injection
        $stmt = $conexao->prepare("UPDATE tarefa SET status = 'Fechado' WHERE id = ?");
        $stmt->bind_param("i", $id);// "s" indica que o parâmetro é uma string

        //Executa a query e verifica se foi bem sucedida
        if($stmt->execute() === TRUE){
            $stmt->close();
            $conexao->close();
            header("Location: tarefas");
            exit();
        }else{
            $stmt->close();
            $conexao->close();
            die("Erro na atualização: " . $conexao->error);
        }
    }else{
        echo '<p class="main text-danger">Id não fornecido!</p>';
    }


?>
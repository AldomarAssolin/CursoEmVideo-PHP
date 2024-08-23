

<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "habitos";

    // Cria uma conexão com o banco de dados
    $conexao = new mysqli( $servidor, $usuario, $senha, $bancodedados);
    
    // Verifica a conexão
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }



    $nome = $_POST["nome"];
    

    if($nome){
        // Prepara a declaração SQL para prevenir SQL Injection
        $stmt = $conexao->prepare("INSERT INTO habitos (nome, status) VALUES (?, 'EmAndamento')");
        $stmt->bind_param("s", $nome);// "s" indica que o parâmetro é uma string

        //Executa a query e verifica se foi bem sucedida
        if($stmt->execute() === TRUE){
            $stmt->close();
            $conexao->close();
            header("Location: habitos");
            exit();
        }else{
            $stmt->close();
            $conexao->close();
            die("Erro na inserção: " . $conexao->error);
        }
    }else{
        echo '<p class="main text-danger">Parâmetros não fornecido!</p>';
    }


?>
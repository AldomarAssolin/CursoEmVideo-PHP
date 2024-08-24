

<div class="main habitos">
    
    

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
        // Executa a query da variável $sql
        $sql = " SELECT id, nome FROM habitos WHERE status = 'EmAndamento'";
        $resultado = $conexao->query($sql);
        // Verifica se a query retornou registros
        if ($resultado->num_rows > 0) {
    
    ?>
    <div class="my-5 container py-3">

        <h3>Lista de Hábitos</h3>
        <p>Cadastre aqui os hábitos que você tem que vencer para melhorar sua vida!</p>
        <table class="table table-striped table-dark table-hover text-center">
            <thead>
                <tr class="">
                    <th scope="col">Nome</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Looping pelos registros retornados
                    while($registro = $resultado->fetch_assoc()) {
                ?>
                <tr class="text-center">
                    <td><?php echo $registro["nome"]; ?></td>
                    <td>
                        <a href="<?php Echo URL ?>vencerhabito?id=<?php echo $registro["id"]; ?>" class="btn btn-success">Vencer</a>
                        <a href="<?php Echo URL ?>desistirhabito?id=<?php echo $registro["id"]; ?>" class="btn btn-danger mx-3">Desistir</a>
                    </td>
                </tr>
            <?php
                } // fim do looping
            ?>
            </tbody>
        </table>
        <a href="<?php echo URL ?>novohabito" class="btn btn-primary">Cadastrar Hábito</a>
        <?php
            } else {
        ?>
        <div class="main habitos">
            <p>Você não possui hábitos cadastrados!</p>
            <p>Começe já a mudar sua vida!</p>
            <a href="<?php echo URL ?>novohabito" class="btn btn-primary">Cadastrar Hábito</a>
        </div>
        
        <?php
            } // fim do if
            // Fecha a conexão com o MySQL
            $conexao->close();
        ?>

        
    </div>

</div>


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
    // Executa a query da variável $sql
    $sql = "SELECT id, nome, descricao, status, data FROM tarefa";
    $resultado = $conexao->query($sql);
    // Verifica se a query retornou registros
    if ($resultado->num_rows > 0) {

?>



<div class="main tarefas lista-de-tarefas">
        

            <div class="container text-start border-bottom border-success">
            <div class="row row-cols-5">
                <div class="col-2 my-1">Data</div>
                <div class="col-2 my-1">Tarefa</div>
                <div class="col-4 my-1">Descrição</div>
                <div class="col-1 my-1">Status</div>
                <div class="col-2 my-1">Ações</div>
            </div>
            </div>
            <?php

                while($registro = $resultado->fetch_assoc()){
            
            ?>
            <div class="container text-start">
                <div class="row row-cols-5">
                    <div class="col-2 my-1 py-1 border-bottom"><?php echo $registro['data'] ?></div>
                    <div class="col-2 my-1 py-1 border-bottom"><?php echo $registro['nome'] ?></div>
                    <div class="col-4 my-1 py-1 border-bottom"><?php echo $registro['descricao'] ?></div>
                    <div class="col-1 my-1 py-1 border-bottom">
                        <span class="badge <?php echo $registro['status'] === 'Aberto' ? 'text-bg-primary' : "text-bg-secondary"  ?>">
                            <?php echo $registro['status'] ?>
                        </span>
                    </div>
                    <div class="col-2 my-1 py-1 border-bottom">
                        <a href="<?php Echo URL ?>reativartarefa?id=<?php echo $registro["id"]; ?>" class="btn btn-success" title="Reabrir tarefa"><i class="bi bi-star-fill"></i></a>
                        <a href="<?php Echo URL ?>excluirPermanenteTarefa?id=<?php echo $registro["id"]; ?>" class="btn btn-danger mx-3"><i class="bi bi-trash3-fill" title="Excluir Permanentemente"></i></a>
                    </div>
                </div>
            </div>
                
            <?php
                
                }
            
            ?>
            

            <?php
                }else{
            ?>
                    <div class="main">
                        <p>Você não possui Tarefas cadastradas!</p>
                        <p>Começe a organizar seu dia!</p>
                        <a href="<?php echo URL ?>novatarefa" class="btn btn-primary">Cadastrar Tarefa</a>
                    </div>

                    <?php
            } // fim do if
            // Fecha a conexão com o MySQL
            $conexao->close();
        ?>

        <a href="<?php echo URL ?>tarefas" class="btn btn-primary m-5">Voltar</a>

</div>
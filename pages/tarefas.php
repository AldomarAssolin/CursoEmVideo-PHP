

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
    $sql = "SELECT id, nome, descricao, status, data FROM tarefa WHERE status = 'Aberto' ORDER BY data";

    $resultado = $conexao->query($sql);
    // Verifica se a query retornou registros
    if ($resultado->num_rows > 0) {

?>

<div class="container">

    <div class="my-5">
        <h2>Tarefas ativas</h2>
        <p>Tarefas para melhorar a organiação do dia-a-dia!</p>
        <hr>
            <div class="container text-start border-bottom border-success">
            <div class="row row-cols-4">
                <div class="col-2 my-1">Data</div>
                <div class="col-2 my-1">Tarefa</div>
                <div class="col-5 my-1">Descrição</div>
                <div class="col-3 my-1">Ações</div>
            </div>
            </div>
            <?php

                while($registro = $resultado->fetch_assoc()){
            
            ?>
            <div class="container text-start">
            <div class="row row-cols-4">
                <div class="col-2 my-1 py-1 border-bottom"><?php echo $registro['data'] ?></div>
                <div class="col-2 my-1 py-1 border-bottom"><p><?php echo $registro['nome'] ?></p></div>
                <div class="col-5 my-1 py-1 border-bottom"><p class="text-break"><?php echo $registro['descricao'] ?></p></div>
                <div class="col-3 my-1 py-1 border-bottom">
                    <div class="row pe-3">
                        <div class="col col-6">
                            <a href="<?php echo URL ?>finalizartarefa?id=<?= $registro["id"]; ?>" class="btn btn-success" title="Marcar como concluído"><i class="bi bi-star-fill"></i></a>
                        </div>
                        <div class="col col-6">
                            <a href="<?php echo URL ?>deletartarefa?id=<?= $registro["id"]; ?>" class="btn btn-danger mx-3"><i class="bi bi-trash3-fill" title="Excluir"></i></a>
                        </div>
                    </div>
                </div>
            
            </div>
            </div>

            <?php
        
                }
            
            ?>
        
        <a href='<?php echo URL ?>novatarefa' class='btn btn-primary my-3'><i class="bi bi-folder-symlink mx-2"></i>Cadastrar Tarefa</a>
        <a href='<?php echo URL ?>listtarefas' class='btn btn-primary m-3'><i class="bi bi-filter-square mx-2"></i>Ver Todos</a>
        <?php
            } else {
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
        

    </div>
    <hr>    
</div>
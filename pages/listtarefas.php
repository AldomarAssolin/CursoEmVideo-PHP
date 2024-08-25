

<?php

    require_once './config/config.php';

    // Executa a query da variável $sql
    $sql = "SELECT id, nome, descricao, status, data, created_at FROM tarefa ORDER BY data";
    $resultado = $conn->query($sql);
    // Verifica se a query retornou registros
    if ($resultado->num_rows > 0) {

?>



<div class="container px2">
        
            <div class="row">
                <div class="col-7">
                    <h2>Lista de todas as tarefas</h2>
                </div>
                <div class="col-5 text-end">
                    <a href="<?php echo URL ?>tarefas" class="btn btn-primary my-1 me-0">Tarefas Abertas</a>
                </div>
            </div>
            <hr>

            <?php

                while($registro = $resultado->fetch_assoc()){
                    $descricao = nl2br($registro['descricao']); 
                    $describe = str_replace('\r\n','',$descricao);
                    $Descb = str_replace('\\','',$describe);
                    $descricao = str_replace('"','',$Descb);
            ?>
            <div class="border-bottom">
                <div class="my-1 py-1">
                    <h2><?php echo $registro['nome'] ?></h2>
                    <small><?php echo $registro['created_at'] ?></small>
                    <small class="badge <?php echo $registro['status'] === 'Aberto' ? 'bg-success' : 'bg-secondary' ?> mx-3"><?php echo $registro['status'] ?></small>
                </div>
                <div class="">
                    <?php echo $descricao; ?>
                </div>
                <div class="py-3">
                    <div class=" gap-3 d-md-flex justify-md-content-end d-grid">
                        <a href="<?php echo URL ?>reativartarefa?id=<?= $registro["id"]; ?>" class="btn btn-success px-5" title="Reativar tarefa"><i class="bi bi-star-fill"></i></a>
                        <a href="<?php echo URL ?>excluirPermanenteTarefa?id=<?= $registro["id"]; ?>" class="btn btn-danger px-5"><i class="bi bi-trash3-fill" title="Excluir Permanentemente"></i></a>
                    </div>
                </div>
            </div>
                
            <?php
                
                }
            
            }else{
            ?>
                    <div class="container">
                        <p>Você não possui Tarefas cadastradas!</p>
                        <p>Começe a organizar seu dia!</p>
                        <a href="<?php echo URL ?>novatarefa" class="btn btn-primary">Cadastrar Tarefa</a>
                    </div>

                    <?php
            } // fim do if
            // Fecha a conexão com o MySQL
            $conn->close();
        ?>

</div>
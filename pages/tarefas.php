

<?php

    require_once "./config/config.php";

    // Executa a query da variável $sql
    $sql = "SELECT id, nome, descricao, status, data, created_at FROM tarefa WHERE status = 'Aberto' ORDER BY data";

    $resultado = $conn->query($sql);
    // Verifica se a query retornou registros
    if ($resultado->num_rows > 0) {


?>

<div class="container">

    <div class="my-5 w-100">
        <div class="row border-bottom border-info">
            <div class="col-7 col-md-9 d-flex flex-column align-items-end justify-content-start">
                <h2 class="w-100">Tarefas ativas</h2>
                <p class="w-100">Tarefas para melhorar a organiação do dia-a-dia!</p>
            </div>
            <div class="col-5 col-md-3 gap-2 d-grid pb-2">
                <a href='<?php echo URL ?>novatarefa' class='btn btn-primary btn-sm'><i class="bi bi-folder-symlink mx-2"></i>Cadastrar</a>
                <a href='<?php echo URL ?>listtarefas' class='btn btn-primary btn-sm'><i class="bi bi-filter-square mx-2"></i>Todos</a>
            </div>
        </div>
            
            <?php

                while($registro = $resultado->fetch_assoc()){

                    $descricao = $registro["descricao"] ;
                    $describe = str_replace('\r\n','',$descricao);
                    $Descb = str_replace('\\','',$describe);
                    $descricao = str_replace('"','',$Descb);
                    
                    
            
            ?>
            <div class="container">
                <article class="border-bottom border-info">
                    <div class="my-3 py-3 border-bottom">
                        <h2><?php echo $registro['nome'] ?></h2>
                        <small><?php echo $registro['created_at'] ?></small>
                        <small class="badge bg-success mx-3"><?php echo $registro['status'] ?></small>
                    </div>
                    <div class="pt-3">
                        <?php 
                            echo $descricao;
                        ?>
                    </div>
                    <div class="py-3">
                        <div class="gap-3 d-md-flex justify-md-content-end d-grid">
                            <a href="<?php echo URL ?>finalizartarefa?id=<?= $registro["id"]; ?>" class="btn btn-success px-5" title="Marcar como concluído"><i class="bi bi-star-fill"></i></a>
                            <a href="<?php echo URL ?>deletartarefa?id=<?= $registro["id"]; ?>" class="btn btn-danger px-5"><i class="bi bi-trash3-fill" title="Excluir"></i></a>
                        </div>
                    </div>
                
                </article>
            </div>

            <?php
        
                }
            
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
            $conn->close();

        ?>
    </div>   
</div>

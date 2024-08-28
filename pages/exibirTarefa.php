<?php

require_once "./config/config.php";

$id = $_GET['id'];

// Preparar a query
$sql = $conn->prepare("SELECT id, nome, descricao, status, data, created_at FROM tarefa WHERE id = ? ORDER BY data");
$sql->bind_param("i", $id); // Associar a variável à query

// Executar a query preparada
$sql->execute();

// Obter o resultado da query
$resultado = $sql->get_result();

// Verifica se a query retornou registros
if ($resultado->num_rows > 0) {
    $registro = $resultado->fetch_assoc();

    $descricao = $registro["descricao"];
    $describe = str_replace('\r\n', '', $descricao);
    $Descb = str_replace('\\', '', $describe);
    $descricao = str_replace('"', '', $Descb);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-7">
                <h2>Lista de todas as tarefas</h2>
            </div>
            <div class="col-5 text-end">
                <a href="<?php echo URL ?>tarefas" class="btn btn-primary my-1 me-0">Tarefas Abertas</a>
            </div>
        </div>
        <article class="border-bottom border-info">
            <div class="my-3 py-3 border-bottom">
                <h2><?php echo $registro['nome'] ?></h2>
                <small><?php echo $registro['created_at'] ?></small>
                <small class="badge bg-success mx-3"><?php echo $registro['status'] ?></small>
            </div>
            <div class="pt-3 img-center">
                <?php 
                    echo $descricao;
                ?>
            </div>
            <div class="py-3">
                <div class="gap-3 d-md-flex justify-md-content-end d-grid">
                    <a href="<?php echo URL ?>finalizartarefa?id=<?= $registro['id']; ?>" class="btn btn-success px-5" title="Marcar como concluído"><i class="bi bi-star-fill"></i></a>
                    <a href="<?php echo URL ?>deletartarefa?id=<?= $registro['id']; ?>" class="btn btn-danger px-5"><i class="bi bi-trash3-fill" title="Excluir"></i></a>
                    <a href="<?php echo URL ?>getTarefa?id=<?= $registro['id']; ?>" class="btn btn-info px-5" title="Ver Post"><i class="bi bi-record-circle"></i></a>
                </div>
            </div>
        </article>
    </div>

    <?php
} else {
    echo "Nenhuma tarefa encontrada com o ID fornecido.";
}

// Fecha a conexão com o MySQL
$conn->close();

?>

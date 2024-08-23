
<?php

$db_host = '127.0.0.1:3306';
$db_user = 'root';
$db_password = '';
$db_name = 'portfolio_dev';

$id = 1;

try{
    $con = new PDO('mysql:host=localhost:3306;dbname=portfolio_dev', $db_user, $db_password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $con->prepare("SELECT concat(nome,' ', sobrenome) AS nome_completo FROM usuario where id = :id");
    $query->execute(array('id' => $id));

    $queryOcupacao = $con->prepare("SELECT nome AS funcao, descricao AS descricao FROM ocupacao WHERE id= :id");
    $queryOcupacao->execute(array('id' => $id));


    $results = $query->fetch(PDO::FETCH_OBJ);
    $resOcupacao = $queryOcupacao->fetch(PDO::FETCH_OBJ);
    
}catch(PDOException $e){
    echo 'ERROR: ' . $e->getMessage();
}

?>

<div class="row m-auto">
    <hr>
    <h2 class="my-3">Time de Desenvolvedores</h2>
    <div class="col-lg-4 text-center my-3">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h2 class="fw-normal"><?php echo $results->nome_completo ?></h2>
        <p><?php echo $resOcupacao->funcao ?></p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4 text-center">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h2 class="fw-normal">Heading</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4 text-center">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h2 class="fw-normal">Heading</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <hr>
</div><!-- /.row -->
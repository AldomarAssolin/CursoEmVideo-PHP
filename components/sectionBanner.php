

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



<section id="banner" class="banner w-100 p-3 p-md-5 text-center">
    <div class="container w-100 col-md-6 mx-auto">
        <div class="row">
            <div class="col-12 col-md-8">
                <article class="left">
                    <h1 class="display-5 text-start fw-bold p-0 m-0"><?php echo $results->nome_completo ?></h1>
                    <h3 class="fw-normal text-start text-secondary mb-3 p-0"><?php echo $resOcupacao->funcao ?></h3>
                    <p class="fw-normal text-start"><?php echo $resOcupacao->descricao ?></p>
                </article>
            </div>
            <div class="col-12 col-md-4 d-flex align-items-center">
                <div class="right w-100">
                    <div class="w-100 d-flex align-items-center justify-content-around">
                        <a class="btn_link_github btn_link_redes" href="#">
                            <i class="bi bi-github" style="font-size: 2rem;"></i>
                        </a>
                        <a class="btn_link_linkedin btn_link_redes" href="#">
                            <i class="bi  bi-linkedin" style="font-size: 2rem;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
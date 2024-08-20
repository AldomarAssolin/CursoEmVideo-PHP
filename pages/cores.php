<?php


$texto = $_GET["txt"];
$tamanho = $_GET["tam"];
$cor = $_GET["cor"];


$param = "O texto é <i>$texto </i>seu tamanho é <i>$tamanho</i> e sua cor é <i>$cor</i>";



?>

<div class="cores">
    <h2><?php echo $param?></h2>
</div>
<?php


$nome = isset($_GET["nome"]) ? $_GET["nome"] : "Não informado";
$ano_nasc = isset($_GET["ano_nasc"]) ? $_GET["ano_nasc"] : "Não informado";
$sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "Não informado";

$idade = date("Y") - $ano_nasc;

echo "$nome é $sexo e tem $idade anos."

?>



<?php

// Incluir o arquivo de configuração
include_once './config/config.php';

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $styles ?>style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="<?php echo $Logo ?>" type="image/x-icon">

    <title><?php echo $site_name ?></title>
</head>
<body>

<?php

// Receber a URL do .htaccess. Se não existir o nome da página, carregar a página inicial (home).
$url = (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)) ? filter_input(INPUT_GET, 'url', FILTER_DEFAULT) : 'home');
//var_dump($url);

// Converter a URL de uma string para um array.
$url = array_filter(explode('/', $url));
//var_dump($url);

// Criar o caminho da página com o nome que está na primeira posição do array criado acima e atribuir a extensão .php.
$arquivo = 'pages/' . $url[0] . '.php';
//var_dump($arquivo);



include_once "./commons/header.php";

include("./functions/constants.php");

if($arquivo === 'pages/home.php'){
    include_once "./components/section_title.php";
 }

?>

<main class="container mt-5">


<?php


  // Verificar se existe o arquivo no servidor. Se não existir, acessar o ELSE e carregar a página de erro.
  switch (is_file($arquivo)) {
                    case 'home':
                        include $arquivo;
                        break;
                    case 'exercicios':
                        include $arquivo;
                        break;
                    case 'operadores':
                        include $arquivo;
                        break;
                    case 'w3sExamples':
                        include $arquivo;
                        break;
                    case 'formularios':
                        include $arquivo;
                        break;
                    case 'valor':
                        include $arquivo;
                        break;
                    case 'cores':
                        include $arquivo;
                        break;
                    default:
                        include 'pages/404.php';
                        break;
   }


?>
    
</main>

<?php

include_once "./commons/footer.php";

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>





<?php


// Incluir o arquivo de configuração
include_once './config/config.php';

//Header
include_once "./commons/header.php";

?>


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

?>




<?php


  // Verificar se existe o arquivo no servidor. Se não existir, acessar o ELSE e carregar a página de erro.
  switch (is_file($arquivo)) {
                    case 'home':
                        include $arquivo;
                        break;
                    case 'php-array':
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
                    case 'habitos':
                        include $arquivo;
                        break;
                    case 'novohabito':
                        include $arquivo;
                        break;
                    case 'inserthabito':
                        include $arquivo;
                        break;
                    case 'tarefas':
                        include $arquivo;
                        break;
                    case 'novatarefa':
                        include $arquivo;
                        break;
                    case 'inserttarefas':
                        include $arquivo;
                        break;
                    case 'listtarefas':
                        include $arquivo;
                        break;
                    case 'exibirTarefa':
                        include $arquivo;
                        break;
                    default:
                        include 'pages/404.php';
                        break;
   }


?>
    





<?php

//Footer
include_once "./commons/footer.php";

?>
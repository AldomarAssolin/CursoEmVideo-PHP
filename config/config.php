<?php
// Configurações de banco de dados (se você precisar mais tarde)
$db_host = 'localhost';
$db_user = 'seu_usuario';
$db_password = 'sua_senha';
$db_name = 'seu_banco_de_dados';

// URL base do seu site
//$base_url = 'http://http://localhost/portifolio_PHP/';
define('URL', 'http://localhost/CursoEmVideo-PHP/');
define('URLBlog', 'http://localhost/CursoEmVideo-PHP/blog/blog.php');


//styles
$bootstrap = './assets/dist/css/bootstrap.min.css';
$styles= URL.'static/css/';
$js= URL.'static/js/';

// assets
$assets = URL.'static/assets/';

//Logo
$Logo = $assets . 'images/logos/2.png';
$ImgAboutSection = URL.'assets/images/aldomarassolin-vercel-app.jpeg';


// Outras configurações globais
$site_name = 'Aulas | Curso em Vídeo';
$autor_name = 'Aldomar Assolin'
?>
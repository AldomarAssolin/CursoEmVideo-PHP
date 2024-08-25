<?php
// Configurações de banco de dados (se você precisar mais tarde)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tarefas";

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// URL base do seu site
//$base_url = 'http://http://localhost/portifolio_PHP/';
define('URL', 'http://localhost/CursoEmVideo-PHP/');
define('URLBlog', 'http://localhost/CursoEmVideo-PHP/blog/blog.php');
define('URLDash', 'http://localhost/CursoEmVideo-PHP/dashboard/dash.php');


//styles
$bootstrap = URL.'assets/dist/css/bootstrap.min.css';
$styles= URL.'static/css/';
$js= URL.'static/js/';
$bootstrapJS = URL.'assets/dist/js/bootstrap.bundle.min.js';
$colorMode = URL.'assets/js/color-modes.js';

// assets
$assets = URL.'static/assets/';
$images = URL.'static/assets/images';

//Logo
$Logo = $assets.'images/logos/img.png';
$ImgAboutSection = URL.'assets/images/aldomarassolin-vercel-app.jpeg';


// Outras configurações globais
$dashboard_name = 'Dashboard';
$portifolio_name = 'Portfólio';
$blog_name = 'Blog';
$site_name = "Aldomar Assolin";
$site_title = "$site_name | $portifolio_name";
$site_title_dash = $site_name.' '.'|'.' '.$dashboard_name;
$site_title_blog = $site_name.' '.'|'.' '.$blog_name;
$dashboard = 'Aldomar Assolin';
$autor_name = 'Aldomar Assolin';
?>
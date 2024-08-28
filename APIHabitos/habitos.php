

<?php

require('../DBConn/conn.php');


function f_param_to_habito()
{

    $dados = file_get_contents("php://input");

    $habito = json_decode($dados, true);
    return $habito;
}

//funcao que retorna habitos
function f_select_habito()
{
    $queryWhere = " WHERE ";
    $primeiroParametro = true;
    $parametrosGet = array_keys($_GET);

    foreach($parametrosGet as $param) {
        if(!$primeiroParametro) {
            $queryWhere .= " AND ";
        }

        $primeiroParametro = false;
        $queryWhere .= $param." = '".$_GET[$param]."'";
    }

    require('../DBConn/conn.php');

    $sql = "SELECT id,nome,status FROM habitos";

    //utiliza o where criado com base nos parametros do GET
    if($queryWhere != " WHERE ") {
        $sql .= $queryWhere;
    }

    //executa query
    $resultado = $conn->query($sql);

    //verificsa se a query retornou registros
    if($resultado->num_rows > 0) {
        $jsonHabitoArray = array();
        $contador = 0;

        while($registro = $resultado->fetch_assoc()) {
            //monta objeto json atraves de um array associativo, ou seja, indexado atraves de strings
            $jsonHabito = array();
            $jsonHabito["id"] = $registro["id"];
            $jsonHabito["name"] = $registro["nome"];
            $jsonHabito["status"] = $registro["status"];

            $jsonHabitoArray[$contador++] = $jsonHabito;
        }

        //transforma o array com resultado da query em um array json e o imprime na página
        echo json_encode($jsonHabitoArray);
    } else {
        //se aquery não retorna registro , devolve um array json vazio
        echo json_encode(array());
        echo "Registro não retornado!";
    }

    $conn->close();
}

//funcao que insere um novo habito
function f_insert_habito()
{
    $habito = f_param_to_habito();

    //busca nome que foi recebido via post atraves do formulario de cadastro
    $nome = $habito["nome"];

    $sql = "INSERT INTO habitos (nome) VALUES ('".$nome."')";

    require('../DBConn/conn.php');

    if(!($conn->query($sql) === true)){
        $conn->close();
        die("Erro: ".$sql."<br>".$conn->error);
    }

    $habito["id"] = mysqli_insert_id($conn);
    $habito["status"] = "Aberto";

    echo json_encode($habito);

    $conn->close();
}


//funcao que atualiza um habito
function f_update_habito()
{
    echo "Esta função irá atualizar um hábito";
}


//função que deleta um hábito
function f_delete_habito()
{
    echo "Esta funcao excluirá um hábito.";
}

// A variável de servidor REQUEST_METHOD contém o nome do método HTTP através qual o arquivo solicitado foi acessado
$metodo = $_SERVER['REQUEST_METHOD'];

// Verifica qual ação a ser tomada de acordo com o método HTTP que foi utilizado para acessar este recurso
switch ($metodo) {
    case "GET":
        f_select_habito();
        break;
    case "POST":
        f_insert_habito();
        break;
    case "PUT":
        f_update_habito();
        break;
    case "DELETE":
        f_delete_habito();
        break;
    default:
        echo "Algo deu errado";
}




?>
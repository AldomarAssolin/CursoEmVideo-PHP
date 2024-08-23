<div class="main">
<h2>Exercícios de operadores com PHP<h2>

    <article>
        <h3>Utilizando expressões</h3>
        <?php
        
        $preco = isset($_GET["p"]) ? $_GET["p"] : 0;

        $preco = $preco + ($preco*10/100);

        echo "<pre>
    http://localhost:3000/pages/operadores.php?p=100

    \$preco = \$_GET[\"p\"];
    \$preco = \$preco + (\$preco*10/100);
    
    echo \"O preço recebido é de: R$\" .number_format($preco,2,\",\",\".\");
    echo \"O preço com 10% de aumento é: R$\" .number_format($preco,2,\",\",\".\");
                </pre>" ;

        

        echo "O preço recebido é de: R$" .number_format($preco,2,",",".");

        

        echo "<br>O preço com 10% de aumento é: R$" .number_format($preco,2,",",".");

        ?>
        <hr>
    </article>

    <article>
        <h3>Utilizando operadores de atribuição</h3>
        <?php
        
        $preco = isset($_GET["p"]) ? $_GET["p"] : 0;

        $preco += ($preco*10/100);

        echo "<pre>
    http://localhost:3000/pages/operadores.php?p=100

    \$preco = \$_GET[\"p\"];
    <b class='results'>\$preco += (\$preco*10/100);</b> <span class='text-secondary'>//modificacao da expressao</span>
    
    echo \"O preço recebido é de: R$\" .number_format($preco,2,\",\",\".\");
    echo \"O preço com 10% de aumento é: R$\" .number_format($preco,2,\",\",\".\");
                </pre>" ;

        

        echo "O preço recebido é de: R$" .number_format($preco,2,",",".");

        

        echo "<br>O preço com 10% de aumento é: R$" .number_format($preco,2,",",".");

        ?>
        <hr>
    </article>
    </div>
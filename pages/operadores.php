




<h2>Funções aritméticas em PHP<h2>

    <article>
        <h3>Operadores matemáticos</h3>
        <?php 
            $n1 = 5;
            $n2 = 8;
            $soma = $n1 + $n2;
            echo "A soma de n1 e n2 é: <b class='results'>$soma</b>" 
        ?>
        <hr>
    </article>

    <article>
        <h3>Pegadando parâmetro da URL</h3>
        <?php 
            $v1 = isset($_GET["x"]) ? $_GET["x"] : 0;
            $v2 =  isset($_GET["y"]) ? $_GET["y"] : 0;
            $soma = $v1 + $v2;

            echo "<pre>
    http://localhost:3000/pages/operadores.php?x=8&y=3
    <br>
    \$n1 = \$_GET['x'];
    \$n2 =  \$_GET['y'];
    \$soma = \$v1 + \$v2;
            </pre>" ;
            echo "<h5>Valores recebidos: <span class='results'>$v1</span> e <span class='results'>$v2</span>.</h5>" ;
            echo "O resultado da soma entre $v1 e $v2 é: <span class='results'>$soma</span>";
        ?>
        <hr>
    </article>

    <article>
        <h3>Funções PHP</h3>
        <h5>Valor absoluto <span class="code">`abs()`</span></h5>
        <?php 
            
            echo "<pre>
    http://localhost:3000/pages/operadores.php?x=8&y=3
    <br>
    \$v1 = \$_GET['x'];
    \$v2 =  \$_GET['y'];
                
                </pre>" ;
            echo "<h5>Valores recebidos: <span class='results'>$v1</span> e <span class='results'>$v2</span>.</h5>";
            echo "O valor absoluto de <span class='results'>$v2</span> é: " .abs($v2);
        ?>
        <hr>

        <h5>Potenciação <span class="code">`pow()`</span></h5>
        <?php 
        $v1 = isset($_GET["x"]) ? $_GET["x"] : 0;
        $v2 =  isset($_GET["y"]) ? $_GET["y"] : 0;

            echo "<pre>
    http://localhost:3000/pages/operadores.php?x=8&y=3
    
    \$v1 = \$_GET['x'];
    \$v2 =  \$_GET['y'];

    echo \"Valores recebidos: $v1 e $v2.\";
    echo \"O valor absoluto de $v2 é: \" .abs($v2);
    echo \"O valor de $v1<sup>$v2</sup> é: \" . pow($v1, $v2);
    echo \"A raiz quadrada de $v1 é: \" . sqrt($v1);
    echo \"O valor de $v2 arredondado é: \" . round($v2);
    echo \"A parte inteira de $v2 é: \" . intval($v2);
    echo \"o valor de $v1 em moeda é: R$\" . number_format($v1,2,",",".");
                </pre>" ;
            
        ?>

        <ul>
            <li class="mb-1"><?php echo "Valores recebidos: $v1 e $v2."; ?></li>
            <li class="mb-1"><?php echo "O valor absoluto de $v2 é: " .abs($v2); ?></li>
            <li class="mb-1"><?php echo "O valor de $v1<sup>$v2</sup> é: " . pow($v1, $v2); ?></li>
            <li class="mb-1"><?php echo "A raiz quadrada de $v1 é: " . sqrt($v1); ?></li>
            <li class="mb-1"><?php echo "O valor de $v2 arredondado é: " . round($v2); ?></li>
            <li class="mb-1"><?php echo "A parte inteira de $v2 é: " . intval($v2); ?></li>
            <li class="mb-1"><?php echo "o valor de $v1 em moeda é: R$" . number_format($v1,2,",","."); ?></li>
        </ul>

        <h5>Funções</h5>
        <ul>
            <li class="mb-3"><span class="code">`abs()`</span> - Valor absoluto</li>
            <li class="mb-3"><span class="code">`pow()`</span> - Potenciação</li>
            <li class="mb-3"><span class="code">`sqrt()`</span> - Raiz Quadrada</li>
            <li class="mb-3"><span class="code">`round()`</span> - Arredondamento</li>
            <li class="mb-3"><span class="code">`intval()`</span> - Valor Inteiro da Variável</li>
            <li class="mb-3"><span class="code">`number_format()`</span> - Formatação moeda</li>
        </ul>
        <hr>

    </article>

    <article>
        <h3>Operadores de atribuição</h3>

        <table class="table">
        <thead>
            <tr>
            <th scope="col">Operação</th>
            <th scope="col">Forma 1</th>
            <th scope="col">Forma 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">Adição</th>
            <td>$a = $a + $b</td>
            <td>$a = $a += $b</td>
            </tr>
            <tr>
            <th scope="row">Subtração</th>
            <td>$a = $a - $b</td>
            <td>$a = $a -= $b</td>
            </tr>
            <tr>
            <th scope="row">Multiplicação</th>
            <td>$a = $a * $b</td>
            <td>$a = $a *= $b</td>
            </tr>
            <tr>
            <th scope="row">Divisão</th>
            <td>$a = $a / $b</td>
            <td>$a = $a /= $b</td>
            </tr>
            <tr>
            <th scope="row">Módulo</th>
            <td>$a = $a % $b</td>
            <td>$a = $a %= $b</td>
            </tr>
            <tr>
            <th scope="row">Concatenação</th>
            <td>$a = $a . $b</td>
            <td>$a = $a .= $b</td>
            </tr>
        </tbody>
        </table>

        <a href="./exercicios-operadores.php" class="links">Exercícios</a>
        
    </article>
    <article>
        <h3>Incremento</h3>

        <table class="table">
        <thead>
            <tr>
            <th scope="col">Operação</th>
            <th scope="col">Forma 1</th>
            <th scope="col">Forma 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">Pré-incremento</th>
            <td>$a = $a + 1</td>
            <td>++$a</td>
            </tr>
            <tr>
            <th scope="row">Pós-incremento</th>
            <td>$a = $a + 1</td>
            <td>$a++</td>
            </tr>
            <tr>
            <th scope="row">Pré-decremento</th>
            <td>$a = $a - 1</td>
            <td>--$a</td>
            </tr>
            <tr>
            <th scope="row">Pós-decremento</th>
            <td>$a = $a - 1</td>
            <td>$a--</td>
            </tr>
        </tbody>
        </table>

        <a href="./exercicios-operadores.php" class="links">Exercícios</a>
        
    </article>

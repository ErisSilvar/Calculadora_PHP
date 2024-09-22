<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora em PHP</title>
</head>
<body>
    <?php
        //Primeiro atribuo as váriaveis onde será inseridos os valores colocados pelo úsuario-servidor
        if (isset($_GET['m'], $_GET['n'], $_GET['op'])) {
            $num1 = $_GET['m']; //Primeiro valor
            $num2 = $_GET['n']; //Segundo valor
            $op = $_GET['op']; //Escolha tipo da equação
        
            if ($op == 'soma') {
                $soma = $num1 + $num2;
                echo "<p>Soma: $soma</p>";
            } elseif ($op == 'subtracao') {
                $subtracao = $num1 - $num2;
                echo "<p>Subtração: $subtracao</p>";
            
            } elseif ($op == 'divisao') {
                $divisao = $num1 / $num2;
                echo "<p>Subtração: $divisao</p>";
            } elseif ($op == 'multiplicacao') {
                $multiplicacao = $num1 * $num2;
                echo "<p>Multiplicação: $multiplicacao</p>";

                // Para os usuários façam as equações, precisam especifica os valores e o tipo da equação na URL 
                // Exemplo: ?m=3&n=2&op=multiplicacao
                // Irá imprimir:  "echo "<p>Multiplicação: $multiplicacao</p>";" --> Multiplicação: 6
                
            } else {
                echo "<p>Operação inválida. Use 'soma' ou 'subtracao' no parâmetro 'op'.</p>";
                // Imprimi caso o usuáro não coloque operacao errada na URL
            }
        } else {
            echo "<p>Por favor, forneça os valores para m, n e op (operação: soma, subtracao, divisão ou multiplicação) na URL.</p>";
            // Mensagem inical
    
        }
    
    ?>
</body>
</html>
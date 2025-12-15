<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Maratona 01</h1>
    <?php

    	/*1. Saudação com Nome
    Objetivo: Declarar variáveis, usar concatenação e interpolação.
    Descrição: Crie um script que declare uma variável para o nome de 
    uma pessoa e exiba uma saudação personalizada, por exemplo: "Olá, 
    João! Bem-vindo ao nosso site!".
    Dica: Utilize tanto a concatenação (.) quanto a interpolação dentro de 
    uma string com aspas */

    $nome = "Ana Júlia";
    $sobrenome = "Oliveira dos Santos";

    echo "Seja bem-vindo(a) $nome $sobrenome !";


			echo "<br><br>"; echo "<br><br>";
    	/*2. Conversão de Temperatura (Celsius para Fahrenheit)
    Objetivo: Trabalhar com cálculos matemáticos e variáveis.
    Descrição: Crie um script que converta uma temperatura em Celsius para Fahrenheit.

	A fórmula para conversão é:
    F = C * (9/5) + 32

    Dica: Declare uma constante para armazenar o valor 9/5 e faça o 
    cálculo com a variável fornecida.*/
    
    $celsius = 24;
    const parte1conversor = 9 / 5 ;
    $parte2conversor = 32;

    $Fahrenheit = ( $celsius * parte1conversor) + $parte2conversor;

	echo "	Medidor de Temperatura";
    /*pule uma linha*/ echo "<br><br>";
  	
	echo "A temperatura hoje está $celsius ºC !"; echo "<br>";
    echo "A temperatura hoje está $Fahrenheit °F !";
    
    
			echo "<br><br>"; echo "<br><br>";
    	/*3. Empréstimo Bancário
    Objetivo: Cálculos financeiros e declaração de variáveis.
    Descrição: Crie um script que calcule o valor de uma parcela de um empréstimo, dado o valor total do empréstimo, a taxa de juros e o número de parcelas.

	Exemplo de fórmula:
    
    Valor do Empréstimo x ( 1 + Taxa de Juros)
    / Número de Parcelas
    
    Dica: Utilize variáveis para o valor do empréstimo, a taxa de juros e o 
    número de parcelas*/

    $valordoemprestimo = 1518.32;
    $numerodeparcelas = 10;
    $taxadejuros = 1.5;

    $valorTotaldoEmprestimo = $valordoemprestimo * (1 + $taxadejuros ) ; // cálculo do valor do empréstimo
    $ValorDaParcela = $valorTotaldoEmprestimo / $numerodeparcelas; // cálculo do valor da parcela

    echo "	Empréstimo Bancário Disponível";
	/*pula uma linha*/ echo "<br>"; echo "<br>";
    
	echo "Valor do Empréstimo: R$ $valordoemprestimo";
    /*quebra de linha*/ echo "<br>"; 
    
	echo "Valor da parcela: R$ $ValorDaParcela" ;
	/*quebra de linha*/ echo "<br>";
	echo "Quantidade de parcelas: $numerodeparcelas";
	/*pula uma linha*/ echo "<br><br>";
    echo "Valor total à pagar: R$ $valorTotaldoEmprestimo";


			echo "<br><br>"; echo "<br><br>";
    	/*4 . Conversor de Moeda
    Objetivo: Trabalhar com variáveis, operadores e arredondamento.
    Descrição: 
    Crie um script que converta uma quantia em reais para dólares, com base em uma taxa de câmbio fornecida.

	Mostre o valor convertido com 2 casas decimais.    
    Dica: Use round() para arredondar o valor para 2 casas decimais.*/
	
    $valorEmReal = 1518.32;
    $taxaDoDolar = 5.35;

    $ValorEmDolar = $valorEmReal / $taxaDoDolar;
    
    echo "	Conversor de Moeda";
    /*pule uma linha*/ echo "<br><br>";
    
    echo "Valor em Real: R$ $valorEmReal";
	echo "<br>";
    echo "Valor em Dólar: $"; echo (round($ValorEmDolar));
    

    ?>
</body>
</html>
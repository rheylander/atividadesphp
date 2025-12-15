<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratona02</title>
</head>
<body>

<!-- código do Rheylander -->
    <?php
 
 
    //      Exercícios com if e else:
    /*  1. Faça um programa que verifique se um número é positivo ou negativo.
    O programa deve receber um número do usuário e, em seguida, imprimir se o
número é positivo ou negativo. Se o número for igual a zero, deve imprimir "O
número é zero".*/
 
    echo "<h2>1. Verifique se o número é positivo ou negativo.</h2>";
 
    $numerodousuario = 5;
 
    if ($numerodousuario >= 0 )
       
        {  
        echo "O número é positivo ." ;
        }
       
        elseif ($numerodousuario <= 0)
        {
        echo "o número é negativo .";
        }
 
        else
        {
            echo "número inválido .";
        }
 
 
 
 
        /* pula uma linha */ echo "<br><br>";
 
    //  2. Faça um programa que classifique a nota de um estudante
    /*  O programa deve receber a nota de um estudante (de 0 a 10) e, com base nessa nota,
    classificar o desempenho do estudante:
    De 0 a 4.9: "Reprovado"
    De 5 a 6.9: "Recuperação"
    De 7 a 8.9: "Aprovado"
    De 9 a 10: "Aprovado com Distinção"*/
   
        echo "<h2>2. Confirme se o aluno foi aprovado ou reprovado.</h2>";
 
        $notadoaluno = 10.0;
 
        if ($notadoaluno >= 0 && $notadoaluno <= 4.9 )
        {
            echo "Reprovado .";
        }
 
        elseif($notadoaluno >= 5 && $notadoaluno <= 6.9)
       
            {
                echo "Recuperação .";
            }
 
        elseif($notadoaluno >= 7.0 && $notadoaluno <= 8.9)
        {
            echo "Aprovado .";
        }
       
        elseif($notadoaluno >= 9.0 && $notadoaluno = 10.0)
        {
            echo "Aprovado com distinção .";
        }
       
        else
        {
            echo "Nota Inválida .";
        }
 
 
         /* pula uma linha */ echo "<br><br>";
 
         /* 3. Faça um programa que verifique se uma pessoa pode votar
    O programa deve receber a idade de uma pessoa e verificar se ela pode votar ou
    não. A idade mínima para votar é 16 anos. Se a pessoa tiver entre 16 e 17 anos,
    pode votar, mas não é obrigatório. Para pessoas acima de 18 anos, o voto é
    obrigatório.*/
 
         echo "<h2>3. Verifique se uma pessoa tem direito ao voto.</h2>";
        /*pular uma linha*/ echo "<br>";
        $idade = 17;
 
        if ($idade < 16)
        {
            echo "você não pode votar .";
        }
 
        elseif ($idade >= 16 && $idade <= 17)
        {
            echo "Você tem direito ao voto .";
        }
 
        elseif ($idade >=18)
        {
            echo "Você tem direito e obrigação ao voto.";
        }
       
        else
            {
            echo "Idade informada inválida .";
            }
 
        /* pula uma linha */ echo "<br>";
 
        /*  4. Faça um programa que verifique se um número é par ou ímpar
        O programa deve receber um número inteiro e verificar se ele é par ou ímpar. Se o
        número for par, o programa deve imprimir "O número é par". Caso contrário, deve
        imprimir "O número é ímpar". */
 
        echo "<h2> 4. O número é par ou ímpar?</h2>";
 
        $number = 10;
 
        if ($number % 2 == 0)
            {
            echo "O número é par";
            }
        else
            {
            echo "O número é ímpar";
            }
        ?>

        <h1>Bilheteria do Cinema</h1>
    <?php
    $horario_sessao = "15:30"; 
    
    echo "Horário da sessão: " . $horario_sessao . "<br><br>";

    if ($horario_sessao >= "10:00" && $horario_sessao <= "12:00") {
        echo "Sessão Matinal<br>";
        echo "<strong>Preço do ingresso: R$ 10,00</strong>";
    } 
    elseif ($horario_sessao > "12:00" && $horario_sessao <= "17:00") {
        echo "Sessão Diurna<br>";
        echo "<strong>Preço do ingresso: R$ 20,00</strong>";
    } 
    elseif ($horario_sessao > "17:00" && $horario_sessao <= "22:00") {
        echo "Sessão Noturna<br>";
        echo "<strong>Preço do ingresso: R$ 30,00</strong>";
    } 
    else {
        echo "<strong>Horário inválido ou cinema fechado.</strong>";
    }
    ?>  

<!-- código do Caio  -->
    <h1> Dia da semana </h1>
    <?php
$diadasemana = date("l");

$dia_portugues = "";

switch ($diadasemana) {
    case "Monday":
        $dia_portugues = "segunda-feira";
        break;
    case "Tuesday":
        $dia_portugues = "terça-feira";
        break;
    case "Wednesday":
        $dia_portugues = "quarta-feira";
        break;
    case "Thursday":
        $dia_portugues = "quinta-feira";
        break;
    case "Friday":
        $dia_portugues = "sexta-feira";
        break;
    case "Saturday":
        $dia_portugues = "sábado";
        break;
    case "Sunday":
        $dia_portugues = "domingo";
        break;
}

echo "hoje é " . $dia_portugues . ", " . date("d/m/Y");
?>

    <h1> Aluno reprovado ou aprovado </h1>
     <?php

$nota = rand(0, 100) / 10;

echo "A nota do aluno foi: " . number_format($nota, 1, '.', '') . "<br>";

switch (true) {
    case ($nota >= 7.0):
        echo "Situação: <strong>Aprovado</strong>";
        break;
        
    case ($nota >= 5.0):
        echo "Situação: <strong>Recuperação</strong>";
        break;
        
    default:
        echo "Situação: <strong>Reprovado</strong>";
        break;
}
?>
    <h1> Códigos de desconto </h1>
     <?php
$preco_produto = 100.00; 

$codigo = rand(1, 4);

echo "Preço original: R$ " . number_format($preco_produto, 2, ',', '.') . "<br>";
echo "Código do cupom: " . $codigo . "<br><br>";

switch ($codigo) {
    case 1:
        $desconto = 0.10; 
        echo "Cupom de 10% aplicado!";
        break;
        
    case 2:
        $desconto = 0.20;
        echo "Cupom de 20% aplicado!";
        break;
        
    case 3:
        $desconto = 0.30;
        echo "Cupom de 30% aplicado!";
        break;
        
    default:
        $desconto = 0;
        echo "<strong>Erro: Código inválido. Nenhum desconto aplicado.</strong>";
        break;
}

echo "<br>";

if ($desconto > 0) {
    $valor_desconto = $preco_produto * $desconto;
    $preco_final = $preco_produto - $valor_desconto;
    
    echo "Valor do desconto: R$ " . number_format($valor_desconto, 2, ',', '.') . "<br>";
    echo "<strong>Preço Final: R$ " . number_format($preco_final, 2, ',', '.') . "</strong>";
} else {
    echo "Preço Final: R$ " . number_format($preco_produto, 2, ',', '.');
}
?>
     
<h1>Cadastrar Amigos (Array)</h1>
    
    <form method="POST">
        Amigo 1: <input type="text" name="nomes[]" required placeholder="Digite o nome..."><br><br>
        Amigo 2: <input type="text" name="nomes[]" required placeholder="Digite o nome..."><br><br>
        Amigo 3: <input type="text" name="nomes[]" required placeholder="Digite o nome..."><br><br>
        Amigo 4: <input type="text" name="nomes[]" required placeholder="Digite o nome..."><br><br>
        Amigo 5: <input type="text" name="nomes[]" required placeholder="Digite o nome..."><br><br>
        <button type="submit">Enviar Lista</button>
    </form>

    <br>

    <?php
    if (isset($_POST['nomes'])) {
        $amigos = $_POST['nomes'];
        
        echo "<h3>Lista Gerada:</h3>";
        
        foreach ($amigos as $indice => $amigo) {
            echo ($indice + 1) . "º Amigo: " . $amigo . "<br>";
        }
    }
    ?>

    <h1>Remover Elemento do Array</h1>
    <?php
    $carros = ["Fusca", "Civic", "Gol", "Onix", "Corolla"];

    echo "<h3>Array Original:</h3>";
    echo "<pre>";
    print_r($carros);
    echo "</pre>";

    unset($carros[1]); 

    echo "<h3>Array Atualizado (Sem o 2º item):</h3>";
    echo "<pre>";
    print_r($carros);
    echo "</pre>";
    
    ?>

<h1>Contar Números Pares (Aleatórios)</h1>
    <?php
    $numeros = [];

    for ($i = 0; $i < 10; $i++) {
        $numeros[] = rand(0, 100);
    }

    echo "<h3>Números sorteados:</h3>";
    echo implode(", ", $numeros) . "<br><br>";

    $pares = 0;

    foreach ($numeros as $num) {
        if ($num % 2 == 0) {
            $pares++;
        }
    }

    echo "<strong>Total de números pares encontrados: " . $pares . "</strong>";
    ?>

<h1>Combinar Dois Arrays</h1>
    <?php
    $array1 = [1, 2, 3, 4, 5];
    $array2 = [6, 7, 8, 9, 10];

    echo "Array 1: " . implode(", ", $array1) . "<br>";
    echo "Array 2: " . implode(", ", $array2) . "<br><br>";

    $array_final = array_merge($array1, $array2);

    echo "<strong>Resultado da Combinaçao:</strong><br>";
    
    echo "<pre>";
    print_r($array_final);
    echo "</pre>";
    ?>
</body>
</html>
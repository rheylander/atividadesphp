<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratona 04</title>
</head>
<body>
    <?php

    echo "<h1>Maratona 04</h1>";

    /*
    =====================================================================
    Operadores Lógicos
    1. Sistema de Autenticação de Funcionários

    Desafio: Você foi solicitado a desenvolver um sistema de autenticação para a
    empresa. O acesso ao sistema é permitido apenas se o funcionário tiver
    permissão e o cadastro estiver ativo OU se o funcionário for um administrador.
    Implemente essa lógica com operadores lógicos.
    =====================================================================
    */

    echo "<h2>1. Sistema de Autenticação de Funcionários</h2>";

    // Defina os valores (simulação). Você pode trocar para testar cenários.
    $Permissao      = true;
    $CadastroAtivo  = true;
    $Administrador  = false;

    echo "<h3>Permissão de Acesso</h3>";

    // Regra correta (com parênteses para deixar a prioridade explícita):
    // (Permissão E CadastroAtivo) OU Administrador
    $AcessoLiberado = ($Permissao && $CadastroAtivo) || $Administrador;

    // Exibindo os estados para ficar claro o teste
    echo "Permissão: " . ($Permissao ? "true" : "false") . "<br>";
    echo "Cadastro ativo: " . ($CadastroAtivo ? "true" : "false") . "<br>";
    echo "Administrador: " . ($Administrador ? "true" : "false") . "<br><br>";

    echo $AcessoLiberado ? "✅ Acesso autorizado<br>" : "❌ Acesso negado<br>";


    /*
    =====================================================================
    Cálculo matemático com ordem de grandeza
    1. Cálculo de imposto com desconto

    Desafio:
    Crie um programa que calcule o valor final de uma compra considerando um
    desconto e imposto. Se o valor da compra for maior que R$500,00, um desconto
    de 10% será aplicado. O imposto de 8% será calculado sobre o valor original da
    compra, antes de aplicar o desconto.
    =====================================================================
    */

    echo "<hr>";
    echo "<h2>2. Cálculo de imposto com desconto</h2>";

    // ✅ Solução no seu estilo (com a regra do enunciado respeitada):
    // - imposto sempre em cima do valor original (antes do desconto)
    // - desconto só entra se a compra for > 500

    $compra  = 501;                 // você pode mudar para testar
    $imposto = $compra * 0.08;       // 8% sobre o valor original
    $desconto = 0;                  // só calcula se passar de 500

    // Total sem desconto (caso não bata o critério)
    $totalsem = $compra + $imposto;

    if ($compra > 500) {
        $desconto = $compra * 0.10;                 // 10% sobre o valor original
        $totaldesc = ($compra - $desconto) + $imposto; // aplica desconto e soma imposto

        echo "Ganhou um descontinho de 10% hein papai! <br><br>"
            . "Valor da compra: R$ " . number_format($compra, 2, ',', '.') . "<br>"
            . "Valor do imposto (8%): R$ " . number_format($imposto, 2, ',', '.') . "<br>"
            . "Valor do desconto (10%): R$ " . number_format($desconto, 2, ',', '.') . "<br>"
            . "<strong>Total da compra:</strong> R$ " . number_format($totaldesc, 2, ',', '.') . "<br><br>";
    } else {
        echo "Se gastasse um pouco mais, tinha um descontinho pow <br><br>"
            . "Valor da compra: R$ " . number_format($compra, 2, ',', '.') . "<br>"
            . "Valor do imposto (8%): R$ " . number_format($imposto, 2, ',', '.') . "<br>"
            . "<strong>Total da compra:</strong> R$ " . number_format($totalsem, 2, ',', '.') . "<br><br>";
    }


    /*
    =====================================================================
    2. Cálculo de Preço com Taxa de Entrega

    Desafio:
    Crie um sistema para calcular o valor final de uma compra, considerando uma
    taxa de entrega de 15% sobre o valor da compra. Se o valor da compra for superior
    a R$1000,00, um desconto de 20% será aplicado APÓS calcular a taxa de entrega.

    Interpretação correta:
    1) Calcula taxa = 15% do valor da compra
    2) Subtotal = compra + taxa
    3) Se compra > 1000, desconto de 20% em cima do subtotal (pós-taxa)
    =====================================================================
    */

    echo "<hr>";
    echo "<h2>3. Cálculo de Preço com Taxa de Entrega</h2>";

    $ValorCompra = 1200.00; // exemplo

    $TaxaEntrega = $ValorCompra * 0.15;
    $Subtotal    = $ValorCompra + $TaxaEntrega;

    $Desconto2 = 0.0;
    if ($ValorCompra > 1000.00) {
        $Desconto2 = $Subtotal * 0.20; // desconto aplicado depois da taxa
    }

    $ValorFinal2 = $Subtotal - $Desconto2;

    echo "Valor da compra: R$ " . number_format($ValorCompra, 2, ',', '.') . "<br>";
    echo "Taxa de entrega (15%): R$ " . number_format($TaxaEntrega, 2, ',', '.') . "<br>";
    echo "Subtotal (compra + taxa): R$ " . number_format($Subtotal, 2, ',', '.') . "<br>";
    echo "Desconto (20% se compra &gt; 1000, aplicado no subtotal): R$ " . number_format($Desconto2, 2, ',', '.') . "<br>";
    echo "<strong>Valor final:</strong> R$ " . number_format($ValorFinal2, 2, ',', '.') . "<br>";


    /*
    =====================================================================
    While
    1. Contagem de Estoque

    Desafio:
    Implemente um programa que simule a venda de um produto. O estoque começa
    com 100 unidades. Cada vez que um produto for vendido, o estoque deve ser
    decrementado e o programa deve imprimir quantas unidades restam. O programa
    deve continuar até que o estoque seja zerado.
    =====================================================================
    */

    echo "<hr>";
    echo "<h2>4. While — Contagem de Estoque</h2>";

    $estoque = 100;

    // Enquanto houver estoque, "vende" 1 unidade e mostra o restante.
    while ($estoque > 0) {
        echo "Restam em estoque: $estoque<br>";
        $estoque -= 1; // decrementa 1 venda
    }

    echo "<strong>Estoque zerado.</strong><br>";


    /*
    =====================================================================
    While
    2. Verificação de Cliente

    Desafio:
    Crie um sistema de login onde o usuário tem até 3 tentativas para inserir
    a senha correta. Se ele acertar a senha, o sistema deve exibir "Acesso concedido".
    Caso contrário, após 3 tentativas, o sistema deve exibir "Acesso negado".
    Implemente com loop while e verificação do número de tentativas.

    Observação:
    Como aqui é uma página sem formulário, vamos SIMULAR entradas com um array
    de tentativas (como se o usuário tivesse digitado).
    =====================================================================
    */

    echo "<hr>";
    echo "<h2>5. While — Verificação de Cliente (até 3 tentativas)</h2>";

    $senhaCorreta = "1234";

    // Simulação das entradas do usuário (troque valores para testar)
    $tentativasUsuario = ["0000", "1111", "1234"]; // acertou na 3ª

    $tentativas = 0;
    $maxTentativas = 3;
    $acertou = false;

    while ($tentativas < $maxTentativas && !$acertou) {
        $senhaDigitada = $tentativasUsuario[$tentativas] ?? ""; // pega a tentativa atual
        echo "Tentativa " . ($tentativas + 1) . ": senha digitada = <code>$senhaDigitada</code><br>";

        if ($senhaDigitada === $senhaCorreta) {
            $acertou = true;
        } else {
            $tentativas++;
            echo "Senha incorreta. Tentativas restantes: " . ($maxTentativas - $tentativas) . "<br><br>";
        }
    }

    echo $acertou ? "<strong>Acesso concedido ✅</strong><br>" : "<strong>Acesso negado ❌</strong><br>";


    /*
    =====================================================================
    Do While
    1. Sistema de Tentativas de Login

    Desafio:
    Implemente um sistema de login que permita ao usuário tentar inserir a
    senha até acertar ou até alcançar o número máximo de tentativas.
    Deve pedir nova senha até inserir corretamente ou ultrapassar 3 tentativas.

    Observação:
    Do-while garante que o bloco execute pelo menos uma vez.
    Aqui também vamos SIMULAR entradas com um array.
    =====================================================================
    */

    echo "<hr>";
    echo "<h2>6. Do While — Sistema de Tentativas de Login</h2>";

    $senhaCorreta2 = "abcd";

    // Simulação: errar 2x e acertar na 3ª (troque para testar)
    $tentativasUsuario2 = ["xxxx", "1111", "abcd"];

    $tentativas2 = 0;
    $maxTentativas2 = 3;
    $acertou2 = false;

    do {
        $senhaDigitada2 = $tentativasUsuario2[$tentativas2] ?? "";
        echo "Tentativa " . ($tentativas2 + 1) . ": senha digitada = <code>$senhaDigitada2</code><br>";

        $tentativas2++;

        if ($senhaDigitada2 === $senhaCorreta2) {
            $acertou2 = true;
            echo "<strong>Acesso concedido ✅</strong><br>";
        } else {
            $restantes2 = $maxTentativas2 - $tentativas2;
            if ($restantes2 > 0) {
                echo "Senha incorreta. Tentativas restantes: $restantes2<br><br>";
            }
        }

    } while (!$acertou2 && $tentativas2 < $maxTentativas2);

    if (!$acertou2) {
        echo "<strong>Acesso negado ❌</strong><br>";
    }


    /*
    =====================================================================
    Do While
    2. Processamento de Pedidos de Compra

    Desafio:
    Crie um sistema que simule o processamento de pedidos de compra em uma
    loja online. Deve processar um número determinado de pedidos e, para cada um,
    imprimir "Processando pedido X". Continua até que todos os pedidos sejam
    processados, sendo o número de pedidos fornecido pelo usuário.

    Observação:
    Sem formulário, vamos definir um número fixo (simulando a entrada do usuário).
    =====================================================================
    */

    echo "<hr>";
    echo "<h2>7. Do While — Processamento de Pedidos de Compra</h2>";

    $numeroPedidos = 5; // simulação de "fornecido pelo usuário"

    if ($numeroPedidos <= 0) {
        echo "Nenhum pedido para processar.<br>";
    } else {
        $pedidoAtual = 1;

        do {
            echo "Processando pedido $pedidoAtual<br>";
            $pedidoAtual++;
        } while ($pedidoAtual <= $numeroPedidos);

        echo "<strong>Todos os pedidos foram processados ✅</strong><br>";
    }

    ?>
</body>
</html>

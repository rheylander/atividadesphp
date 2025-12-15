<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=```html
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Maratona 03</title>
</head>
<body>
  <h1>Maratona 03</h1>
 
  <?php
 
    /*1) Tabuada do 8 (FOR)
      Objetivo: usar laço for e operações matemáticas.
      Descrição: exibir a tabuada do 8 de 1 até 10.
    */
 
    echo "<h3>1) Tabuada do 8 (FOR)</h3>";
 
    for ($i = 1; $i <= 10; $i++) {
      echo "8 x $i = " . (8 * $i) . "<br>";
    }
 
    echo "<br><br>";
 
 
    /*2) Média de 10 números (FOR)
      Objetivo: usar for + soma + cálculo de média.
      Descrição: ler 10 números e calcular a média.
      Obs: no navegador a gente simula os 10 números com um array.
    */
 
    echo "<h3>2) Média de 10 números (FOR)</h3>";
 
    $numeros = [10, 8, 7, 9, 6, 5, 10, 9, 8, 7]; // aqui você pode trocar os valores
 
    $soma = 0;
 
    for ($i = 0; $i < 10; $i++) {
      $soma = $soma + $numeros[$i];
    }
 
    $media = $soma / 10;
 
    echo "Números usados: ";
    print_r($numeros);
    echo "<br>";
 
    echo "Soma = $soma <br>";
    echo "Média = $media <br>";
 
    echo "<br><br>";
 
 
    /*3) Array com 10 peças de carro (FOREACH)
      Objetivo: criar um array e percorrer usando foreach.
      Descrição: criar um array com 10 peças de carro e imprimir em lista.
    */
 
    echo "<h3>3) 10 peças de carro (FOREACH)</h3>";
 
    $pecas = [
      "Pneu",
      "Bateria",
      "Filtro de óleo",
      "Filtro de ar",
      "Vela",
      "Pastilha de freio",
      "Radiador",
      "Amortecedor",
      "Alternador",
      "Correia"
    ];
 
    foreach ($pecas as $peca) {
      echo $peca . "<br>";
    }
 
    echo "<br><br>";
 
 
    /*4) Array associativo (gato) (FOREACH)
      Objetivo: usar array associativo (chave => valor).
      Descrição: criar um array com dados de um gato e imprimir "chave: valor".
    */
 
    echo "<h3>4) Dados de um gato (FOREACH - Associativo)</h3>";
 
    $gato = [
      "nome" => "Mingau",
      "idade" => 2,
      "cor" => "Cinza",
      "peso" => 4.3,
      "vacinas_em_dia" => "Sim"
    ];
 
    foreach ($gato as $chave => $valor) {
      echo $chave . ": " . $valor . "<br>";
    }
 
    echo "<br><br>";
 
 
    /*5) Função de desconto (FUNÇÃO)
      Objetivo: criar função com parâmetro e return.
      Descrição: receber valor da compra e aplicar 15% de desconto.
    */
 
    echo "<h3>5) Função de desconto (15%)</h3>";
 
    function aplicarDesconto15($valorCompra) {
      $desconto = $valorCompra * 0.15;
      $valorFinal = $valorCompra - $desconto;
      return $valorFinal;
    }
 
    $valorCompra = 200;
 
    echo "Valor da compra: R$ $valorCompra <br>";
    echo "Valor com 15% de desconto: R$ " . aplicarDesconto15($valorCompra) . "<br>";
 
    echo "<br><br>";
 
 
    /*6) Função: verificar se número é primo (FUNÇÃO)
      Objetivo: criar função que retorna true/false.
      Descrição: receber um número e dizer se é primo.
    */
 
    echo "<h3>6) Função: número primo</h3>";
 
    function ehPrimo($n) {
 
      if ($n < 2) {
        return false;
      }
 
      for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
          return false;
        }
      }
 
      return true;
    }
 
    $numero = 29;
 
    echo "Número testado: $numero <br>";
 
    if (ehPrimo($numero)) {
      echo "Resultado: É primo <br>";
    } else {
      echo "Resultado: Não é primo <br>";
    }
 
  ?>
</body>
</html>
```
, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>
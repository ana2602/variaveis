<?php

echo "Digite seu nome: ";
$nome = trim(fgets(STDIN));

echo "Digite o primeiro valor: ";
$valor1 = floatval(trim(fgets(STDIN)));

echo "Digite o segundo valor: ";
$valor2 = floatval(trim(fgets(STDIN)));

if ($valor2 != 0) {
    $resultado = $valor1 / $valor2;
    echo "Olá, $nome! O resultado da divisão entre $valor1 e $valor2 é: $resultado\n";
} else {
    echo "Erro: Divisão por zero não é permitida.\n";
}
?>

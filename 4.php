
<?php

echo "Digite o primeiro número inteiro: ";
$numero1 = intval(trim(fgets(STDIN)));

echo "Digite o segundo número inteiro: ";
$numero2 = intval(trim(fgets(STDIN)));

$soma = $numero1 + $numero2;

echo "A soma de $numero1 e $numero2 é: $soma\n";
?>

<?php

$a = 5;
$b = NULL;
$c = 10;

// O operador de coalescência nula (??) verifica se o valor é NULL.
// Retorna o primeiro valor não NULL encontrado da esquerda para a direita.
echo $a ?? $b ?? $c; // Como $a é 5 (não NULL), ele será impresso.

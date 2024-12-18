<?php

$a = 55.0;
$b = 55;

// Comparações de maior que e menor que
var_dump($a > $b);
var_dump($a < $b);
echo "<br>";

// Comparações de igualdade
var_dump($a == $b);  // Igualdade (não considerando tipo)
var_dump($a === $b); // Igualdade estrita (considerando tipo)
echo "<br>";

// Comparações de diferença
var_dump($a != $b);  // Diferença (não considerando tipo)
var_dump($a !== $b); // Diferença estrita (considerando tipo)

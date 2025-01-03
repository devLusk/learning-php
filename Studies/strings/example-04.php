<?php

$frase = "To grow you must suffer";

$q = strpos($frase, "must");

$novaFrase = substr($frase, 0, "8");

$novaFrase2 = substr($frase, $q);

echo $novaFrase;
echo "<br>";

echo $novaFrase2;
echo "<br>";

echo "Tamanho da frase: " . strlen($frase);
<?php

$tamanhoObjeto = 22;
$referenciaGrande = 18;
$referenciaPequeno = 13;

if ($tamanhoObjeto > $referenciaGrande) {
    echo "Belo tamanho, amigo!";
} elseif ($tamanhoObjeto <= $referenciaPequeno) {
    echo "Pode cortar!";
} else {
    echo "Está na média!";
}

echo "<br>";

// Método alternativo e mais rápido para uma situação mais simples
echo $tamanhoObjeto > $referenciaGrande ? "Melhor nao usar, amigo!" : "Nem bota pra fora";

<?php
function soma(int ...$valores): float
{ // :float faz a funcao retornar um float
    return (float) array_sum($valores);
}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);

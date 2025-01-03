<?php
$a = 10;

// $a e passado como referencia. Ou seja, a funcao altera o valor da variavel $a global.
function changeValue(&$a) {
    $a += 20;
    return $a;
}

echo changeValue($a);
echo "<br>";
echo $a;
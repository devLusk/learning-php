<?php

// O PHP executa a análise de sintaxe do código,mas nao de "logica". Por isso é importante entender que o loop abaixo
// possui um erro lógico. O valor de $i está sendo decrementado ($i--) em vez de ser incrementado,
// o que fará com que o loop nunca termine.

for ($i = 0; $i < 10; $i--) {
    echo "Valor: $i";
    echo "<br>";
}

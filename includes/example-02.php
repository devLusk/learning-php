<?php
// O "require" inclui o arquivo e interrompe a execução do script se o arquivo não for encontrado ou se houver um erro no seu conteúdo.
// Ou seja, o uso do "require" é adequado quando o arquivo é essencial para a execução do script e a falha em encontrá-lo ou carregá-lo causará um erro fatal.

// O "include" também inclui o arquivo, mas, ao contrário do "require", ele permite que o script continue sua execução mesmo que o arquivo não exista ou ocorra um erro.
// Isso significa que "include" oferece maior flexibilidade, porém não garante que o código será executado corretamente se o arquivo não for carregado.

// O PHP também possui o "require_once" e "include_once", que garantem que um arquivo seja incluído apenas uma vez, mesmo que o código tente incluí-lo várias vezes. 
// Isso evita conflitos e erros causados pela inclusão repetida do mesmo arquivo, o que pode ocorrer em projetos maiores.
require "example-01.php";
require_once "example-01.php";

$resultado = somar(10, 23);

echo "Resultado: $resultado";

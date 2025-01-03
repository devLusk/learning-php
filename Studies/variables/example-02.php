<?php

// Declaração de variáveis com nomes válidos
$nome = "Lucas";
$sobrenome = "Silva";

// Concatenando as variáveis para formar o nome completo
$nomeCompleto = $nome . " " . $sobrenome;

// Exemplo de uma declaração de variável com nome inválido (não pode começar com números)
// $1nome = "Teste";

// -----------------------------------------------------------------

// Removendo a variável $nome da memória
unset($nome);

// Verificando se a variável $nome ainda está definida após ser unset
if (isset($nome)) {
    echo $nome;
} else {
    echo "A variável \$nome não está definida.";
}

?>
<?php

// Cria um array vazio chamado $pessoas para armazenar as informações de cada pessoa
$pessoas = array();

// Adiciona a primeira pessoa ao array $pessoas usando array_push()
// A pessoa é representada como um array associativo contendo 'nome' e 'idade'
array_push($pessoas, array(
    'nome' => 'Lucas',
    'idade' => '20'
));

// Adiciona a segunda pessoa ao array $pessoas
array_push($pessoas, array(
    'nome' => 'Antonio',
    'idade' => '27'
));

// Converte o array $pessoas para uma string JSON e exibe o resultado
// A função json_encode transforma o array em formato JSON
echo json_encode($pessoas);

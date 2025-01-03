<?php

$json = '[{"nome":"Lucas","idade":"20"},{"nome":"Antonio","idade":"27"}]';

// Decodifica o JSON para um array associativo PHP.
// O parâmetro 'true' indica que queremos um array em vez de objetos.
$date = json_decode($json, true);

print_r($date);

<?php

$nome = "Lucas";

function teste()
{
    global $nome;
    echo $nome;
}

function teste2()
{
    $nome = "Antonio";
    echo $nome . " agora no teste 2";
}

teste();
teste2();

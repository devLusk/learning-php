<?php

// Obtém e converte os parâmetros 'a' e 'b' da URL para strings
$name  = (string)$_GET["a"];
$lastName = (string)$_GET["b"];

// Cria o nome completo
$fullName = $name . " " . $lastName;

// Exibe o nome completo
echo "User name: $fullName";
echo "<br/>";

// Obtém o IP do usuário
$ip = $_SERVER["REMOTE_ADDR"];
echo "IP: $ip";
echo "<br/>";

// Exibe o nome do arquivo atual
$location = $_SERVER["SCRIPT_NAME"];
echo "File name: $location";

?>
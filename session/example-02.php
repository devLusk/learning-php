<?php

require_once("config.php");

session_unset(); // Remove todas as variáveis de sessão, mas mantém a sessão ativa.

echo $_SESSION["nome"];  // Tenta exibir o valor da variável de sessão "nome", que foi previamente definida em outro script.

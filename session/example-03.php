<?php

require_once("config.php");

echo session_save_path(); // Exibe o caminho do diretório de armazenamento de sessão atual
echo "<br>";

var_dump(session_status()); // Exibe o status da sessão atual;
echo "<br>";
// 0 - desabilitada
// 1 - habilitada, mas nenhuma existe
// 2 - habilitada e uma existe

switch (session_status()) {
  case PHP_SESSION_DISABLED:
    echo "As sessões estão desabilitadas.";
    break;

  case PHP_SESSION_NONE:
    echo "As sessões estão habilitadas, mas nenhuma existe.";
    break;

  case PHP_SESSION_ACTIVE:
    echo "As sessões estão habilitadas, e uma existe.";
    break;
}
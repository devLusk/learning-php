<?php

// Regenera o ID da sessão atual para evitar ataques de fixação de sessão
session_regenerate_id(); // Regenera o ID da sessão
echo session_id(); // Exibe o novo ID da sessão após a regeneração
var_dump($_SESSION); // Exibe todas as variáveis de sessão atuais

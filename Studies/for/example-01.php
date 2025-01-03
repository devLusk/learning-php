<?php

for ($i = 0; $i <= 100; $i += 5) {

    // Se o valor de $i estiver entre 20 e 50, o loop 'continue' é acionado.
    // Isso faz com que o restante do código dentro do loop seja ignorado e o próximo valor de $i seja processado.
    if ($i > 20 && $i < 50) continue;

    // Se $i atingir o valor 900, o loop 'for' é interrompido usando o 'break'.
    // Nenhum valor acima de 100 é processado, o loop é finalizado imediatamente.
    if ($i == 90) break;

    echo "Valor do numero: " . ($i);
    echo "<br>";
}

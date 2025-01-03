<?php

$diaDaSemana = date('l j F'); // 'w' retorna o número do dia da semana (0 = Domingo, 1 = Segunda, etc.)

echo $diaDaSemana;
echo "<br>";
echo date(DATE_RFC822);

// switch ($diaDaSemana) {
//     case 0:
//         echo "Bom Domingo!";
//         break;

//     case 1:
//         echo "Boa Segunda-feira!";
//         break;

//     case 2:
//         echo "Boa Terça-feira!";
//         break;

//     case 3:
//         echo "Boa Quarta-feira!";
//         break;

//     case 4:
//         echo "Boa Quinta-feira!";
//         break;

//     case 5:
//         echo "Boa Sexta-feira!";
//         break;

//     case 6:
//         echo "Bom Sábado!";
//         break;

//     default:
//         echo "Valor inválido";
//         break;
// }

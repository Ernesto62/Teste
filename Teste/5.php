<?php


$dia = array(
     1 => 'Domingo',
     2 => 'Segunda-Feira',
     3 => 'Terca-Feira',
     4 => 'Quarta-Feira',
     5 => 'Quinta-Feira',
     6 => 'Sexta-Feira',
     7 => 'Sábado'
);

$mes = array(
    1 => 'Janeiro',
    2 => 'Fevereiro',
    3 => 'Marco',
    4 => 'Abril',
    5 => 'Maio',
    6 => 'Junho',
    7 => 'Julho',
    8 => 'Agosto',
    9 => 'Setembro',
    10 => 'Outubro',
    11 => 'Novembro',
    12 => 'Dezembro'
);

echo " O dia da semana é ".$dia[$_POST['dia']]. " e o mês é ".$mes[$_POST['mes']];

?>
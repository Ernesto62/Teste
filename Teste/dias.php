<?php
$diaSemana = rand(1,7);
switch ($diaSemana) {
    case '1':
        print('Domingo');
        break;
    case '2':
    print('Segnda-Feira');
    break;

    case '3':
        print('Terça-Feira');
        break;

    case '4':
        print('Quarta-Feira');
        break;

    case '5':
        print('Quinta-Feira');
        break;

    case '6':
        print('Sexta-Feira');
        break;

    case '7':
            print('Sábado');
            break;

    default:
        echo 'Erro ao validar o dia da semana';
        break;
}
?>
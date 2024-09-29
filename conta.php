<?php

$saldo = 1000;
$titularConta = 'Everton Fernandes';

echo "*****************\n";
echo "Titular: $titularConta\n";
echo "Saldo: $saldo\n";
echo "*****************\n";

do {

    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";

    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "*****************\n";
            echo "Titular: $titularConta\n";
            echo "Saldo atual: $saldo\n";
            echo "*****************\n";
            break;
        case 2:
            echo "Qual o valor do saque?\n";
            $valorASacar = (float) fgets(STDIN);
            if ($valorASacar > $saldo) {
                echo "Saldo insuficiente\n";
            } else {
                $saldo -= $valorASacar;
            }
            break;
        case 3:
            echo "Qual o valor do depósito?\n";
            $valorADepositar = (float) fgets(STDIN);
            $saldo += $valorADepositar;
            break;
        case 4:
            echo "Saindo...\n";
            break;
        default:
            echo "Opção inválida\n";
            break;
    }
} while ($opcao != 4);
<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Funcionario;

$endereco = new Endereco('São paulo', 'Eliza Maria', 'Rua bernardo de vera', '524');
$Emerson = new Titular(new Cpf('456.363.138-20'), 'Emerson Mendonsss', $endereco);
$conta = new Conta($Emerson);
$conta->depositar(300);
$conta->sacar(200);
$Marlene = new Titular(new Cpf('345.323.788-34'), 'Marlene Mendonça', $endereco);
$conta2 = new Conta($Marlene);
$conta->transferir(100, $conta2);
echo $conta->getSaldo() . PHP_EOL;
echo $conta2->getSaldo() . PHP_EOL;
echo Conta::getInstacia() . PHP_EOL;
echo $conta->recuperaCpfTitular();
echo $conta2->recuperaCpfTitular();
echo $conta -> recuperaNomeTitular();
echo $conta2 -> recuperaNomeTitular();
$funcionario = new Funcionario('Emerson Mendonça', new Cpf('456.363.138-88'), 'Desenvolvedor Jr.');
var_dump($funcionario);
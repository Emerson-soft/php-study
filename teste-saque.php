<?php

use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new ContaPoupanca(
  new Titular(
    new Cpf('456.765.435-23'),
    'Emerson Mendonça',
    new Endereco('São Paulo', 'Rua Bernardo de Vera', 'Rua tal', '525')
  )
  );

  $conta->depositar(500);
  $conta->sacar(100);

  echo $conta->getSaldo();

<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Titular(
  new Cpf('123.345.345-34'),
  'Emerson',
  new Endereco('São paulo', 'Eliza Maria', 'Bernardo de Vera', '34')
);

$autenticador->tentaLogin($diretor, 'abcd');
<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Cpf};
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Gerente;

$umFuncionario = new Desenvolvedor(
  'Emerson', 
  new Cpf('456.323.456-43'), 
  'dev', 
  3000
);

$umaFuncionaria = new Gerente(
  'Marlene', 
  new Cpf('456.324.456-80'), 
  'Gerente', 
  2000
);

$umDiretor = new Diretor(
  'Ronaldo', 
  new Cpf('456.324.456-81'), 
  'Diretor', 
  1000
);



$contador = new ControladorDeBonificacoes();
$contador->adicionaBonificacaoDe($umFuncionario);
$contador->adicionaBonificacaoDe($umaFuncionaria);
$contador->adicionaBonificacaoDe($umDiretor);

echo $contador->getTotal();
<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Cpf};
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor};
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Editor;
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Funcionario\Gerente;

$umFuncionario = new Desenvolvedor(
  'Emerson', 
  new Cpf('456.323.456-43'), 
  3000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
  'Marlene', 
  new Cpf('456.324.456-80'), 
  2000
);

$umDiretor = new Diretor(
  'Ronaldo', 
  new Cpf('456.324.456-81'), 
  1000
);

$umEditor = new Editor(
  'Emerson Teste',
  new Cpf('154.589.521-96'),
  3600
);

$contador = new ControladorDeBonificacoes();
$contador->adicionaBonificacaoDe($umFuncionario);
$contador->adicionaBonificacaoDe($umaFuncionaria);
$contador->adicionaBonificacaoDe($umDiretor);
$contador->adicionaBonificacaoDe($umEditor);

echo $contador->getTotal();
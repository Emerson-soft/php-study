<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;

abstract class Funcionario extends Pessoa
{
  private float $salario;

 public function __construct(string $nome, Cpf $cpf, float $salario)
 {
    parent::__construct($nome, $cpf);
    $this->salario = $salario;
 }
  
 protected function alteraNome(string $nome): void
 {
   $this->validarNome($nome);
   $this->nome = $nome;
 }

 public function getSalario(): float
 {
   return $this->salario;
 }

 public function calculaBonificacao(): float
 {
   return $this->salario * 0.1;   
 }


}
<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
  protected string $nome;
  private Cpf $cpf;

  public function __construct(string $nome, Cpf $cpf)
  {
    $this->validarNome($nome);
    $this->nome = $nome;
    $this->cpf = $cpf;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function getCpf(): string
  {
    return $this->cpf->getCpfTitular();
  }

  public function validarNome(string $nome) 
  {
    if(strlen($nome) <= 5) {
      echo "nome deve ter mais de 5 caracteres" . PHP_EOL;
      exit();
    }
  }
}
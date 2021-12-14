<?php

namespace Alura\Banco\Modelo;

class Cpf
{
  private string $cpf;

  public function __construct(string $titularCpf) {
    $titularCpf = filter_var($titularCpf, FILTER_VALIDATE_REGEXP, [
      'options' => [
        'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
      ]
    ]);

    if($titularCpf === false) {
      echo "cpf inválido";
      exit();
    }

    $this->cpf = $titularCpf;
  }

  public function getCpfTitular() : string
  {
    return $this->cpf . PHP_EOL;
  }
}
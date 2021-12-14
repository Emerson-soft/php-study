<?php


namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa
{
  private Endereco $endereco;

  public function __construct(Cpf $cpfTitular, string $nomeTitular, Endereco $endereco)
  {
    parent::__construct($nomeTitular, $cpfTitular);
    $this->endereco = $endereco;
  }

  public function recuperaEndereco(): Endereco
  {
    return $this->endereco;
  }

}
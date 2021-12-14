<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{

  protected function percetualTarifa(): float
  {
    return 0.03;
  }
  
}
<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{

  protected function percetualTarifa(): float
  {
    return 0.05;
  }

  public function transferir(float $valor, Conta $contaTransferir) : void {
    if($valor > $this->saldo){
      echo "saldo indisponivel";
      return;
    } 

    $this->sacar($valor);
    $contaTransferir->depositar($valor);
  }

}
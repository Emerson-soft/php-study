<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
  private Titular $titular;
  protected float $saldo;
  private array $contasCorrentes = [];
  private static $instacia = 0;

  public function __construct(Titular $newTitular)
  {
    $this->saldo = 0;
    $this->titular = $newTitular;
    self::$instacia ++;
  }

  public function __destruct()
  {
    if(self::$instacia > 2) {
      echo self::$instacia;
    }
  }

  public function sacar(float $valorASacar) : void  {

    $tarifa = $valorASacar * $this->percetualTarifa();;
    $valorSaque = $valorASacar + $tarifa;
  
    if( $valorSaque > $this->saldo){
      echo "Saldo indisponível";
      return;
    } 

    $this->saldo -= $valorSaque;
  }

  public function getSaldo() : float 
  {
    return $this->saldo;
  }

  public function depositar(float $valorDepositar): void {
    if($valorDepositar > 0) {
      $this->saldo += $valorDepositar;
      return;
    } 

    echo "o valor $valorDepositar não é um número valido";
  }

  public function ExibitArray(): void {
    foreach($this->contasCorrentes as $cpf=>$conta ) {
      echo $cpf . " " . $conta['nome'] . PHP_EOL;
    }
  }

  public function showSaldo(): void {
    foreach($this->contasCorrentes as $cpf=>$conta ) {
      echo "cpf: $cpf, titular: $conta[nome], saldo: $conta[saldo]" . PHP_EOL;
    }
  }

  public function create(string $nome, string $cpf, float $saldo): void {
    $this->contasCorrentes[$cpf] = [
      'nome' => $nome,
      'saldo' => $saldo,
    ];
    $this->ExibitArray();
  }

  public static function getInstacia(): int
  {
    return self::$instacia;
  }

  public function recuperaNomeTitular () : string 
  {
    return $this->titular->getNome();
  }

  public function recuperaCpfTitular() : string
  {
    return $this->titular->getCpf();
  }

  abstract protected function percetualTarifa(): float;
  
}
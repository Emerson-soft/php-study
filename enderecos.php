<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$UmEndereco = new Endereco('São Paulo', 'Eliza Maria', 'Bernardo de Vera', '34');
$outroEndereco = new Endereco('Caruaru', 'Santa Rosa', 'Sei la', '34');

echo $UmEndereco;

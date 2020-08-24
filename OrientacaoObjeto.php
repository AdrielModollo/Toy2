<?php

class Funcionario {
  public $nome;
  public $email;
  public $filial;

  public function __construct($nome, $filial) {
    $this->nome = $nome;
    $this->filial = $filial;
  }
}

$amanda = new Funcionario('Amanda Oliveira', 'Adamantina');
$jose = new Funcionario('José Ferreira', 'Borborema');
$maria = new Funcionario('Maria Rocha', 'Cajamar');

$funcionarios = [
  $amanda,
  $jose,
  $maria
];

foreach ($funcionarios as $funcionario) {
  $nome = $funcionario->nome;
  $filial = $funcionario->filial;
  echo "Nome: $nome | Filial: $filial\n";
}

?>
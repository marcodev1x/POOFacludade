<?php

namespace Marco\Study;

class Comissario extends Tripulante
{
  private bool $treinamentoEmergencia;

  public function __construct(string $nome, string $email, float $salario, bool $treinamentoEmergencia)
  {
    parent::__construct($nome, $email, $salario);
    $this->treinamentoEmergencia = $treinamentoEmergencia;
  }

  public function getTreinamentoEmergencia(): bool
  {
    return $this->treinamentoEmergencia;
  }

  public function trabalhar(): string
  {
    return "Comissário está trabalhando no avião.";
  }
}
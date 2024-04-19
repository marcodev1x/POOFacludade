<?php

namespace Marco\Study;

class Bagagem
{
  private string $id;
  private int $peso;

  public function __construct(string $id, int $peso)
  {
    $this->id = $id;
    $this->peso = $peso;
  }

  public function getId(): string
  {
    return $this->id;
  }

  public function getPeso(): int
  {
    return $this->peso;
  }
}

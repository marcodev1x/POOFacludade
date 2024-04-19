<?php

namespace Marco\Study;

class Porte
{
  private string $porte;

  public function __construct(string $porte)
  {
    $this->porte = $porte;
  }
  public function getPorte(): string
  {
    return $this->porte;
  }
  public function setPorte(string $porte): void
  {
    $this->porte = $porte;
  }



}
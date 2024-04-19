<?php

namespace Marco\Study;

class IntegratedAirlines
{
  private array $voos = [];
  private array $aeronaves = [];
  private array $aeroportos = [];
  private array $usuarios = [];
  private array $passagens = [];

  public function addVoo(Voo $voo): void
  {
    $this->voos[] = $voo;
  }

  public function addAeronave(Aeronave $aeronave): void
  {
    $this->aeronaves[] = $aeronave;
  }

  public function addAeroporto(Aeroporto $aeroporto): void
  {
    $this->aeroportos[] = $aeroporto;
  }

  public function addUsuario(Usuario $usuario): void
  {
    $this->usuarios[] = $usuario;
  }

  public function addPassagem(Passagem $passagem): void
  {
    $this->passagens[] = $passagem;
  }
  public function getVoos(): array
  {
    return $this->voos;
  }



}
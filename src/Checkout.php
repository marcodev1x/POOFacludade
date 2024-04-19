<?php

namespace Marco\Study;

class Checkout
{
  private Usuario $usuario;
  private Passagem $passagem;

  public function __construct(Usuario $usuario, Passagem $passagem)
  {
    $this->usuario = $usuario;
    $this->passagem = $passagem;
  }

  public function realizarCheckout(): void
  {
    $valido = $this->validar();

    if ($valido) {
      echo "Checkout de {$this->usuario->getNome()} confirmado" . PHP_EOL;
    } else {
      echo "Não foi possível realizar o checkout para {$this->usuario->getNome()}" . PHP_EOL;
    }
  }

  private function validar(): bool
  {
    return true;
  }
}

<?php

namespace Marco\Study;

class Checkin
{
    private Usuario $usuario;
    private Passagem $passagem;

    public function __construct(Usuario $usuario, Passagem $passagem)
    {
        $this->usuario = $usuario;
        $this->passagem = $passagem;
    }

    public function validar(Usuario $usuario, Passagem $passagem): bool
    {
        return $usuario === $this->usuario && $passagem === $this->passagem;
    }
}
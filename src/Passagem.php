<?php

namespace Marco\Study;


class Passagem
{
    private string $codBilhete;
    private float $valor;
    private Voo $voo;
    private Pessoa $pessoa;

    public function __construct(string $codBilhete, float $valor, Voo $voo, Pessoa $pessoa)
    {
        $this->codBilhete = $codBilhete;
        $this->valor = $valor;
        $this->voo = $voo;
        $this->pessoa = $pessoa;
    }

    public function getCodBilhete(): string
    {
        return $this->codBilhete;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function getVoo(): Voo
    {
        return $this->voo;
    }

    public function getPessoa(): Pessoa
    {
        return $this->pessoa;
    }
}

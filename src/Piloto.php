<?php

namespace Marco\Study;

class Piloto extends Tripulante
{
    private int $horasDeVoo;
    private string $tipoAeronave;

    public function __construct(string $nome, string $email, float $salario, int $horasDeVoo, string $tipoAeronave)
    {
        parent::__construct($nome, $email, $salario);
        $this->horasDeVoo = $horasDeVoo;
        $this->tipoAeronave = $tipoAeronave;
    }

    public function getHorasDeVoo(): int
    {
        return $this->horasDeVoo;
    }

    public function getTipoAeronave(): string
    {
        return $this->tipoAeronave;
    }

    public function voar(): string
    {
        return "Piloto está voando o avião.";
    }

    public function trabalhar(): string
    {
        return "Piloto está trabalhando no avião.";
    }
}
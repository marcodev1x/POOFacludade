<?php

namespace Marco\Study;

class Tripulante extends Pessoa
{
    protected float $salario;

    public function __construct(string $nome, string $email, float $salario)
    {
        parent::__construct($nome, $email);
        $this->salario = $salario;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }
}
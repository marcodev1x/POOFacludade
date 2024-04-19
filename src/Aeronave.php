<?php

namespace Marco\Study;

class Aeronave
{
    private string $modelo;
    private int $capacidade;
    private string $status;

    public function __construct(string $modelo, int $capacidade, string $status)
    {
        $this->modelo = $modelo;
        $this->capacidade = $capacidade;
        $this->status = $status;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getCapacidade(): int
    {
        return $this->capacidade;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}
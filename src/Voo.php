<?php

namespace Marco\Study;

class Voo
{
    private Aeroporto $origem;
    private Aeroporto $destino;
    private \DateTime $horarioSaida;
    private \DateTime $horarioChegada;
    private Aeronave $aeronave;
    private string $status;

    public function __construct(Aeroporto $origem, Aeroporto $destino, \DateTime $horarioSaida, \DateTime $horarioChegada, Aeronave $aeronave, string $status)
    {
        $this->origem = $origem;
        $this->destino = $destino;
        $this->horarioSaida = $horarioSaida;
        $this->horarioChegada = $horarioChegada;
        $this->aeronave = $aeronave;
        $this->status = $status;
    }

    public function getOrigem(): Aeroporto
    {
        return $this->origem;
    }

    public function getDestino(): Aeroporto
    {
        return $this->destino;
    }

    public function getHorarioSaida(): \DateTime
    {
        return $this->horarioSaida;
    }

    public function getHorarioChegada(): \DateTime
    {
        return $this->horarioChegada;
    }
    public function setOrigem(Aeroporto $origem): void
    {
        $this->origem = $origem;
    }

    public function setDestino(Aeroporto $destino): void
    {
        $this->destino = $destino;
    }

    public function setAeronave(Aeronave $aeronave): void
    {
        $this->aeronave = $aeronave;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }


    public function getAeronave(): Aeronave
    {
        return $this->aeronave;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function voar(): string
    {
        return "O voo está voando.";
    }


}
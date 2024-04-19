<?php

namespace Marco\Study;

class Aeroporto
{
    private string $nome;
    private string $codigoIATA;
    private string $cep;
    private string $endereco;
    private int $numPistas;
    private int $pistaDisponivel;
    private Cidade $cidade;
    private Porte $porte;
    private array $voos = [];

    public function __construct(string $nome, string $codigoIATA, string $cep, int $numPistas, int $pistaDisponivel, Cidade $cidade, Porte $porte)
    {
        $this->nome = $nome;
        $this->codigoIATA = $codigoIATA;
        $this->cep = $cep;
        $this->numPistas = $numPistas;
        $this->pistaDisponivel = $pistaDisponivel;
        $this->cidade = $cidade;
        $this->porte = $porte;
    }

    public function getNomeAeroporto(): string
    {
        return $this->nome;
    }

    public function setNomeAeroporto(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getCodigoIATA(): string
    {
        return $this->codigoIATA;
    }

    public function setCodigoIATA(string $codigoIATA): void
    {
        $this->codigoIATA = $codigoIATA;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function setCep(string $cep): void
    {
        $this->cep = $cep;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): void
    {
        $this->endereco = $endereco;
    }

    public function getNumPistas(): int
    {
        return $this->numPistas;
    }

    public function setNumPistas(int $numPistas): void
    {
        $this->numPistas = $numPistas;
    }

    public function getPistaDisponivel(): int
    {
        return $this->pistaDisponivel;
    }

    public function setPistaDisponivel(int $pistaDisponivel): void
    {
        $this->pistaDisponivel = $pistaDisponivel;
    }

    public function getCidade(): Cidade
    {
        return $this->cidade;
    }

    public function setCidade(Cidade $cidade): void
    {
        $this->cidade = $cidade;
    }

    public function getPorte(): Porte
    {
        return $this->porte;
    }

    public function setPorte(Porte $porte): void
    {
        $this->porte = $porte;
    }

    public function addVoo(Voo $voo): void
    {
        $this->voos[] = $voo;
    }

    public function getVoos(): array
    {
        return $this->voos;
    }
}
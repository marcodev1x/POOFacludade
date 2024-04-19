<?php

namespace Marco\Study;

class Passageiro extends Pessoa
{
    private Bagagem $bagagem;

    public function __construct(string $nome, string $email, Bagagem $bagagem)
    {
        parent::__construct($nome, $email);
        $this->bagagem = $bagagem;
    }

    public function getBagagem(): Bagagem
    {
        return $this->bagagem;
    }
}
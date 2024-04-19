<?php
namespace Marco\Study;

class Usuario
{
  private string $nome;
  private string $email;
  private string $cpf;
  private array $bagagens;

  public function __construct(string $nome, string $email, string $cpf, array $bagagens = [])
  {
    $this->nome = $nome;
    $this->email = $email;
    $this->cpf = $cpf;
    $this->bagagens = $bagagens;
  }

  public function addBagagem(Bagagem $bagagem)
  {
    $this->bagagens[] = $bagagem;
  }

  public function getBagagens(): array
  {
    return $this->bagagens;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function getCPF(): string
  {
    return $this->cpf;
  }
}

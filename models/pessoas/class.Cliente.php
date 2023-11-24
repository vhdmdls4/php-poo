<?php

class Cliente
{
  public $nome;
  public $rg;
  public $cpf;
  public $email;
  public $telefone;
  public $data_nascimento;

  public function __construct($nome, $rg, $cpf, $email, $telefone, $data_nascimento)
  {
    $this->nome = $nome;
    $this->rg = $rg;
    $this->cpf = $cpf;
    $this->email = $email;
    $this->telefone = $telefone;
    $this->data_nascimento = $data_nascimento ?? null;
  }
}

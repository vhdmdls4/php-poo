<?php

class Paciente extends Cliente
{
  public $responsavel_financeiro_id;

  public function __construct($nome, $rg, $cpf, $email, $telefone, $data_nascimento, $responsavel_financeiro_id)
  {
    parent::__construct($nome, $rg, $cpf, $email, $telefone, $data_nascimento);
    $this->responsavel_financeiro_id = $responsavel_financeiro_id;
  }
}

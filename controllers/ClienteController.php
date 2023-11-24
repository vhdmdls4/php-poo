<?php

class ClienteController extends ObjectSaver
{
  public function cadastrar()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nome = $_POST['nome'];
      $rg = $_POST['rg'];
      $cpf = $_POST['cpf'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];
      $dataNascimento = $_POST['data_nascimento'];

      $cliente = new Cliente($nome, $rg, $cpf, $email, $telefone, $dataNascimento);

      parent::saveObject($cliente);

      header('Location: /sucesso');
      exit;
    }

    include('./views/cadastrar_cliente.php');
  }

  public function carregarCliente()
  {
    $saver = new ObjectSaver();
    $loadedCliente = $saver->loadObject("Cliente");

    if ($loadedCliente) {
      echo "Cliente carregado com sucesso:\n";
      echo "Nome: " . $loadedCliente->nome . "\n";
      echo "RG: " . $loadedCliente->rg . "\n";
      // ... (outros campos do cliente)
    } else {
      echo "Erro ao carregar o cliente.\n";
    }
  }
}

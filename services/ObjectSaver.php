<?php

class ObjectSaver
{
    private $filePath;

    public function __construct()
    {
        $this->filePath = __DIR__ . '/';
    }

    public function saveObject($object)
    {
        // Obtém o nome da classe do objeto
        $className = get_class($object);

        // Gera o caminho completo do arquivo
        $file = $this->filePath . $className . '.txt';

        // Serializa o objeto e salva no arquivo
        $serializedObject = serialize($object);
        file_put_contents($file, $serializedObject);

        echo "Objeto salvo com sucesso em $file\n";
    }

    public function loadObject($className)
    {
        // Gera o caminho completo do arquivo
        $file = $this->filePath . $className . '.txt';

        // Se o arquivo existir, carrega o objeto
        if (file_exists($file)) {
            $serializedObject = file_get_contents($file);
            $object = unserialize($serializedObject);
            echo "Objeto carregado com sucesso de $file\n";
            return $object;
        } else {
            echo "Arquivo não encontrado: $file\n";
            return null;
        }
    }
}

// Exemplo de uso:
// $saver = new ObjectSaver();
// $cliente = new Cliente("John Doe", "123456", "789012345", "john@example.com", "555-1234", "1990-01-01");
// $saver->saveObject($cliente);
// $loadedCliente = $saver->loadObject("Cliente");

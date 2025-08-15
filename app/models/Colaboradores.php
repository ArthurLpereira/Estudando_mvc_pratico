<?php
require_once("./app/config/database.php");

class Colaboradores
{
    public $id;
    public $nome;
    public $telefone;
    public $email;

    public function __construct($id, $nome, $telefone, $email)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function createColaborador($dados)
    {
        $conn = Database::conection();

        $sql = "INSERT INTO colaboradores( nome_colaborador, telefone_colaborador, email_colaborador) VALUES (:nome,:telefone,:email)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':nome', $dados['nome_colaborador']);
        $stmt->bindParam(':telefone', $dados['telefone_colaborador']);
        $stmt->bindParam(':email', $dados['email_colaborador']);

        $stmt->execute();

        $novoId = $conn->lastInsertId();
        return new self($dados['nome_colaborador'], $dados['telefone_colaborador'], $dados['email_colaborador'], $novoId);
    }
}

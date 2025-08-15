<?php
require_once("./app/config/database.php");

class Colaboradores
{
    public $id;
    public $nome_colaborador;
    public $telefone_colaborador;
    public $email_colaborador;

    public function __construct($id, $nome_colaborador, $telefone_colaborador, $email_colaborador)
    {
        $this->id = $id;
        $this->nome_colaborador = $nome_colaborador;
        $this->telefone_colaborador = $telefone_colaborador;
        $this->email_colaborador = $email_colaborador;
    }

    public static function createColaborador($dados)
    {
        $conn = Database::conection();

        $sql = "INSERT INTO colaboradores( nome_colaborador, telefone_colaborador, email_colaborador) VALUES (:nome,:telefone,:email)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':nome', $dados['nome_colaborador']);
        $stmt->bindParam(':telefone', $dados['telefone_colaborador']);
        $stmt->bindParam(':email', $dados['email_colaborador']);

        $stmt->execute();

        $novoId = $conn->lastInsertId();
        return new self($novoId, $dados['nome_colaborador'], $dados['telefone_colaborador'], $dados['email_colaborador']);
    }
}

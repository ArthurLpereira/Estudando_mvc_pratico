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

    public static function readAllColaboradores()
    {
        $conn = Database::conection();
        $sql = "SELECT * FROM colaboradores";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $colaboradores = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $colaboradores;
    }

    public static function ReadOneColaborador($id)
    {
        $conn = Database::conection();

        $sql = "SELECT id_colaborador, nome_colaborador, telefone_colaborador, email_colaborador FROM colaboradores WHERE id_colaborador=:id";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function updateColaborador($id, $dados)
    {
        $conn = Database::conection();
        $sql = "UPDATE colaboradores SET nome_colaborador= :nome,telefone_colaborador= :telefone,email_colaborador= :email WHERE id_colaborador = :id";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nome', $dados['nome_colaborador']);
        $stmt->bindParam(':telefone', $dados['telefone_colaborador']);
        $stmt->bindParam(':email', $dados['email_colaborador']);

        return $stmt->execute();
    }

    public static function deleteColaborador($id)
    {
        $conn = Database::conection();
        $sql = "DELETE FROM colaboradores WHERE id_colaborador = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        return $stmt->execute();
    }
}

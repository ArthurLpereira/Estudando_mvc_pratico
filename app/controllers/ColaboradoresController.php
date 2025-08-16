<?php

require_once('./app/models/Colaboradores.php');

class ColaboradoresController
{

    public function ShowForm()
    {
        include "./app/views/colaboradores/cadastro.html";
    }

    public function CreateColaboradores()
    {
        $dados = [
            'nome_colaborador' => $_POST['nome_colaborador'],
            'telefone_colaborador' => $_POST['telefone_colaborador'],
            'email_colaborador' => $_POST['email_colaborador']
        ];

        try {
            $colaboradoresCreate = Colaboradores::CreateColaborador($dados);

            echo "<h3>Nome:'$colaboradoresCreate->nome_colaborador'</h3>";
            echo "<p>ID:'$colaboradoresCreate->id'</p>";
            echo "<p>Telefone:'$colaboradoresCreate->telefone_colaborador'</p>";
            echo "<p>Email:'$colaboradoresCreate->email_colaborador'</p>";
            header("Location: /arthur/estudando_mvc_pratico/index.php");
        } catch (PDOException $e) {
            echo "<h3>Erro ao cadastrar a disciplina</h3>";
        }
    }

    public function ShowAllColaboradores()
    {
        $colaboradores = Colaboradores::readAllColaboradores();
        include "./app/views/colaboradores/listColaboradores.html";
    }

    public function ShowOneColaborador($id)
    {
        $colaborador = Colaboradores::ReadOneColaborador($id);

        if ($colaborador) {
            include "./app/views/colaboradores/listOneColaborador.html";
        } else {
            echo ('Colaborador não encontrado');
        }
    }
}

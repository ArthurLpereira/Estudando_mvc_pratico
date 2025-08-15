<?php
// Inclua o arquivo do seu Model
require_once 'app/models/Colaboradores.php';

// Prepare os dados que seriam enviados por um formulário
// Verifique se as chaves do array correspondem exatamente aos nomes que você usou em bindParam
$dadosColaborador = [
    'nome_colaborador' => 'Ana Maria',
    'telefone_colaborador' => '(11) 98765-4321',
    'email_colaborador' => 'ana.maria@exemplo.com'
];

echo "Tentando salvar o colaborador '{$dadosColaborador['nome_colaborador']}'...<br><br>";

try {
    // Chame o método estático para criar o colaborador
    // Note que 'createColaborador' não é estático no seu Model.
    // Vamos corrigir isso ou instanciar a classe.
    // O seu código está chamando um método de instância 'createColaborador'.
    // O correto seria:
    $colaborador = new Colaboradores(null, $dadosColaborador['nome_colaborador'], $dadosColaborador['telefone_colaborador'], $dadosColaborador['email_colaborador']);
    $novoColaborador = $colaborador->createColaborador($dadosColaborador);

    // Se o código chegou até aqui, significa que a inserção foi bem-sucedida
    echo "<b>SUCESSO!</b><br>";
    echo "Colaborador salvo com sucesso no banco de dados.<br>";
    echo "Detalhes do colaborador salvo:<br>";
    echo "- ID: " . $novoColaborador->id . "<br>";
    echo "- Nome: " . $novoColaborador->nome . "<br>";
    echo "- Telefone: " . $novoColaborador->telefone . "<br>";
    echo "- E-mail: " . $novoColaborador->email . "<br>";
} catch (PDOException $e) {
    // Se ocorrer um erro, ele será capturado aqui
    echo "<b>ERRO!</b><br>";
    echo "Ocorreu um erro ao salvar o colaborador: " . $e->getMessage() . "<br>";
}

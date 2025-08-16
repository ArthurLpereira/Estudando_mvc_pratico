<?php
require_once '../Estudando_mvc_pratico/app/controllers/ColaboradoresController.php';

$request_uri = $_SERVER['REQUEST_URI'];
$controller = new ColaboradoresController();

$uri_base = '/arthur/estudando_mvc_pratico/';
$request_uri = str_replace($uri_base, '', $_SERVER['REQUEST_URI']);

if (substr($request_uri, 0, 1) !== '/') {
    $request_uri = '/' . $request_uri;
}

if ($request_uri == '/index.php') {
    $controller->ShowForm();
} elseif ($request_uri == '/colaboradores/criar' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->CreateColaboradores();
} elseif ($request_uri == '/colaboradores/lista') {
    $controller->ShowAllColaboradores();
} elseif (preg_match('/^\/colaboradores\/visualizar\/(\d+)$/', $request_uri, $matches)) {
    $controller->ShowOneColaborador($matches[1]);
} elseif (preg_match('/^\/colaboradores\/editar\/(\d+)$/', $request_uri, $matches)) {
    $controller->ShowEditForm($matches[1]);
} elseif (preg_match('/^\/colaboradores\/update\/(\d+)$/', $request_uri, $matches) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->updateColaborador($matches[1]);
} elseif (preg_match('/^\/colaboradores\/deletar\/(\d+)$/', $request_uri, $matches)) {
    $controller->deleteColaborador($matches[1]);
} else {
    echo 'Página não encontrada';
}

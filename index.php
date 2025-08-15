<?php
require_once '../Estudando_mvc_pratico/app/controllers/ColaboradoresController.php';

$request_uri = $_SERVER['REQUEST_URI'];
$controller = new ColaboradoresController();

$uri_base = '/arthur/estudando_mvc_pratico/';
$request_uri = str_replace($uri_base, '', $_SERVER['REQUEST_URI']);


if ($request_uri == 'index.php/') {
    $controller->ShowForm();
} elseif ($request_uri == 'colaboradores/criar' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->CreateColaboradores();
} else {
    echo 'Página não encontrada';
}

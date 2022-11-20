<?php
//URLS AMIGAVEIS :) 

$rota = explode( '?', $_SERVER['REQUEST_URI']);
$rota = $rota[0];

require_once '../src/connection/conexao.php';
require_once '../src/controller/alunoController.php';
require_once '../src/repository/alunoRepository.php';
require_once '../src/validator/alunoValidator.php';
//usando o require_once pq esse arquivo é importante e não pode ser duplicado

$paginas = [
    '/' => 'inicio',
    '/listar' => 'listar',
    '/novo' => 'novo',
    '/editar'=> 'editar',
    '/excluir' => 'excluir'
];

if (false === isset($paginas[$rota])){
    include '../src/views/erro404.phtml';
    exit; // ou die ; encerra a execução do codigo 
};

echo $paginas[$rota]();
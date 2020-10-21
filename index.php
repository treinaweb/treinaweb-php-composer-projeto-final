<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Repositorio\Curso;
use App\Uteis\Conexao;

$configBancoDeDados = require 'config/banco-de-dados.php';
$conexao = new Conexao($configBancoDeDados);

$cursoRepositorio = new Curso($conexao);

require_once "exibicao/principal.php";


<?php

namespace App\Uteis;

class Conexao extends \PDO 
{
    public function __construct(array $dados)
    {
        $dns = \vsprintf('%s:host=%s;dbname=%s', $dados);

        parent::__construct($dns, $dados['usuario'], $dados['senha']);
    }
}
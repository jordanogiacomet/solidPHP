<?php

namespace Alura\Solid\Model;
use IPontuacao;

class AluraMais extends Video implements IPontuacao
{
    private $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperarUrl(): string
    {
        return 'http://videos.alura.com.br/'; // Ai tem o resto a implementação
    }

    public function calcularPontuacao(){
        return $this->minutosDeDuracao() * 2;
    }

}

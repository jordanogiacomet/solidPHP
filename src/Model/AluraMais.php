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
        return str_replace(' ', '-', strtolower($this->categoria));
    }

    public function calcularPontuacao(){
        return $this->minutosDeDuracao() * 2;
    }

}

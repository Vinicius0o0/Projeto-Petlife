<?php

class Produto {
    private string $nome;
    private string $descricao;
    private float $preco; 
    private int $quantidadeEstoque;

    public function __construct(string $nome, string $descricao, float $preco, int $quantidadeEstoque) {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->quantidadeEstoque = $quantidadeEstoque;
    }

    
    public function atualizarEstoque(int $quantidade): void {
        $this->quantidadeEstoque += $quantidade;
        echo "Estoque do produto '{$this->nome}' atualizado para {$this->quantidadeEstoque} unidades.<br>";
    }
}
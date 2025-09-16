<?php

class Pet {
    private string $nome;
    private string $especie;
    private string $raca;

    public function __construct(string $nome, string $especie, string $raca) {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->raca = $raca;
    }
    
    // Método para acessar o nome do pet, útil em outras classes
    public function getNome(): string {
        return $this->nome;
    }

    public function obterHistorico(): string { // No diagrama, o tipo de retorno é "Historico"
        echo "Obtendo histórico do pet '{$this->nome}'...<br>";
        return "Histórico do pet: Vacinado em 10/01/2025.";
    }
}
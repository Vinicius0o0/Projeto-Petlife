<?php
require_once 'Usuario.php';
require_once 'Cliente.php';

//Representa um funcionário do petshop.
// Herda de Usuario e tem métodos de gestão.
 
class Funcionario extends Usuario {
    private string $cargo;

    public function __construct(string $nome, string $email, string $senha, string $cargo) {
        parent::__construct($nome, $email, $senha);
        $this->cargo = $cargo;
    }

    public function gerenciarAgendamentos(): void {
        echo "O funcionário '{$this->nome}' está gerenciando os agendamentos.<br>";
    }

    public function gerenciarEstoque(): void {
        echo "O funcionário '{$this->nome}' está gerenciando o estoque.<br>";
    }

    public function cadastrarCliente(Cliente $cliente): void {
        echo "O funcionário '{$this->nome}' cadastrou um novo cliente.<br>";
    }
}
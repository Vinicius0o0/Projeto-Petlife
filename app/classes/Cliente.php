<?php
require_once 'Usuario.php';
require_once 'Pet.php';
require_once 'Servico.php';


 //Representa um cliente do petshop.
 // Herda de Usuario.
 
class Cliente extends Usuario {
    private string $telefone;

    // O construtor do Cliente chama o construtor da classe Usuario
    // e depois inicializa seus próprios atributos.
     
    public function __construct(string $nome, string $email, string $senha, string $telefone) {
        parent::__construct($nome, $email, $senha);
        $this->telefone = $telefone;
    }
    public function cadastrar(): void {
        echo "Cliente '{$this->nome}' cadastrado com sucesso.<br>";
    }

    public function agendarServico(Pet $pet, Servico $servico): void {
        echo "Serviço agendado para o pet '{$pet->getNome()}' com sucesso.<br>";
    }

    public function consultarHistorico(): string { // No diagrama, o tipo de retorno é "Historico"
        echo "Consultando histórico...<br>";
        return "Histórico de serviços: Banho e Tosa em 15/09/2025.";
    }
}
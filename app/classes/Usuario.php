<?php

abstract class Usuario {
    protected string $nome;
    protected string $email;
    protected string $senha;

    // O construtor é responsável por inicializar os atributos do objeto.
     
    public function __construct(string $nome, string $email, string $senha) {
        $this->nome = $nome;
        $this->email = $email;
        // Em um projeto real, a senha seria criptografada aqui.
        $this->senha = $senha;
    }

    public function fazerLogin(string $email, string $senha): bool {
       //verificar o email e a senha no banco de dados.
        // Retorna true se for sucesso, false se falhar.
        echo "Verificando login para o e-mail: {$email}...<br>";
        return true;
    }
}
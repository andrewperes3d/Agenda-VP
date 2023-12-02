<?php

class Empresa
{
    private $nome;
    private $cnpj;
    private $endereco;
    private $telefone;
}

// Método construtor da Classe. É executada ao instanciar um objeto.
public function __construct($nome, $cnpj, $endereco, $telefone)
{
    $this->nome = $nome;
    $this->cnpj = $cnpj;
    $this->endereço = $endereco;
    $this->telefone = $telefone;
}

//Métodos GET e SET servem para definir e consultar valores dos atributos. 
public function getNome ()
{
    return $this->nome;
}
public function setNome ($nome)
{
    $this->nome = $nome;
}


public function getTempo ()
{
    return $this->cnpj;
}
public function setTempo ($cnpj)
{
    $this->cnpj = $cnpj;
}


public function getValor ()
{
    return $this->endereço;
}
public function setValor ($endereco)
{
    $this->enderço = $endereco;
}


public function getLogo ()
{
    return $this->telefone;
}
public function setLogo ($telefone)
{
    $this->telefone = $telefone;
}


//Métodos para cadastrar um Serviço
public function cadastrar ()
{

}
    
//Métodos para cadastrar um Serviço
public function atualizar ()
{

}

//Métodos para cadastrar um Serviço
public function apagar ()
{
    
}


?>
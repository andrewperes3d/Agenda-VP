<?php


class Servico
{   
    // atributos
    private $nome;
    private $tempo;
    private $valor;
    private $logo;

    /* Metodo construtor da classe
     E executado ao istanciar
       
    */
    public function __construct($nome,$tempo,$valor,$logo)
    {
         $this->nome = $nome;
         $this->tempo = $tempo;
         $this->valor = $valor;
         $this->logo = $logo;
    }


    // nome
    public function getNome()
    {
        return $this->nome;
    }
    
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    

    // tempo
    public function getTempo()
    {
        return $this->tempo;
    }

    public function setTempo($tempo)
    {
        $this->tempo = $tempo;
    }


    // valor
    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->tempo = $valor;
    }


    // logo
    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo)
    {
        $this->tempo = $logo;
    }



    // Metodo para cadastar um serviço
    public function cadastrar() 
    {

    }

    // metodo para atualizar um serviço
    public function atualizar()
    {

    }

    // metodo para apagar um serviço
    public function apagar()
    {

    }
}


?>
<?php

class ServicoView
{
    // Metodo para exibir a lista de serviços
    public function exibirServicos($servicos)
    {

        echo "<h3>Lista de Serviços<h3>";
        echo "<table border='1'>";
        
        echo "<tr> 
                <th>Logo</tr>
                <th>Nome</th>
                <th>Tempo</tr>
                <tr>Preço</tr>
                <tr>Ações</tr>
            </tr>
        ";
        echo "</table>"
    }

}






?>
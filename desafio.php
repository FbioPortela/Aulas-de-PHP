<?php
    function gerarTabela($colunas, $linhas
        // obrigatorio ter o titulo
        // com esta string = esta definido,
        // caso ttenha esta string identica, 
        // n sera mostada nenhum tiutlo 
        , $titulo = ""){
        
        $tabela = "<table border=\"1\">";
        
        //empty = vazio 
        // operador ternario
        // se for "" n mostre nada
        // se haver algum titulo, mostre o titulo
        // ou fazer com ternario ou com if com negacao
        $tabela .= empty($titulo) ? "": "<caption>$titulo</caption>";
        // if(!empty($titulo)){
            // $tabela .= "<caption>$titulo</caption>";
        // }

        while($linhas > 0){
            $linhas--;
            // poderia usar colspan ou rowspan no titulo
            $tabela .= "<tr>";

            for($i = 0; $i < $colunas; $i++){
                $tabela .= "<td> $i </td>";
            }
            
            $tabela .= "</tr>";
        }
        $tabela .= "</table>";

        echo $tabela;   
    }

    // 4 colunas e 2 linhas
    gerarTabela(4, 2, "Tabela");
    echo "<br>";
    gerarTabela(6, 10, "Tabela 2");
    echo "<br>";
    gerarTabela(5, 5, "Tabela 3");
    echo "<br>";
    gerarTabela(20, 10, "");
    echo "<br>";
?>
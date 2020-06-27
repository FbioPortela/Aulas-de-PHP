<?php
    echo "<h2> Funções </h2>";

    //
    //Funções sem Argumento
    echo "<h4> Funções sem Argumento </h4>";
    //metodo ou funcao  
    function relizaSoma(){
        echo "Minha Primeira Função";
    }
    //o q esta faltando?
    //chamar a funcao
    echo relizaSoma();

    //
    //Funções com Argumento
    echo "<h3> Funções com Argumento </h3>";
    //tem de ter no min dois valores
    //a funcao pra caso esteja certa
    //tem de apenas fazer o calculo
    //para ser compartilhado outras vezes
    function fazSoma($valor1, $valor2){
        $resultadoSoma = $valor1 + $valor2;
        return $resultadoSoma;
    }
    // ou
    // codigo encurtaod
    // function fazSoma($valor1, $valor2){
    //     return $valor1 + $valor2;
    // }

    //fora fazer variavel q guarde valor
    $resultadoFazSoma = fazSoma(5, 5);
    echo "Resultado da soma: $resultadoFazSoma";

    //
    //Funções com Argumento Padrão(Mais de dois argumentos)
    echo "<h3> Funções com Argumento Padrão(Mais de dois argumentos)</h3>";
    //sempre ao add um argumentos, tbm devera ser add no valor
    function fazSoma1($valor1, $valor2, $valor3){ 
        return $valor1 + $valor2 + $valor3;
    }
    //
    $resultadoFazSoma = fazSoma1(5, 5, 2);
    echo "Resultado da soma: $resultadoFazSoma";
?>
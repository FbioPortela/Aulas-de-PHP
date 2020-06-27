<?php
    //Usar if ou switch
    //escolher o melhor 
    //ira para o mesmo resultado

    echo "<h2> Condições </h2>";
    $idade = 18;
    // e ver se apresentou o documento
    $apresentou_documento = true;

    // fzer sistema de liberacao para apenas maior ou igual 18 anos
    // operador ternario
    $resultado = $idade >= 18 && $apresentou_documento ?
                'Acesso Liberado':
                'Acesso Negado';
    echo "<h4> Com Operador Ternário </h4>";
    echo $resultado, "<br>";

    // este mesmo codigo com if
    // a condicao sempre vai ser a mesm, independente do metodo
    // aplicacao ideal
    $resultadoif = ""; //ou $resultadoif
    if ($idade >= 18 && $apresentou_documento == true) {
        $resultadoif = "Acesso Liberado";
            if ($idade === 18) {
                echo "<p> <strong> if dentro de if </strong> </p>";
                echo "Parabens, voce fez 18 anos. <br>";
            }
    }
    //DICA
    //quando n if tiver apenas um linha de codigo n retorno
    //n precisa d fechamento da chave
    //o fechamento das chavs
    //de acordo a mais de uma linha de codigo
    else{
        $resultadoif = "Acesso Negado";
    }
    echo "<h4> If e Else </h4>";
    echo $resultadoif, "<br>";

    //
    // ou
    //com outro if
    //                                        sempre sera true
    //usar o negacao
    // aplicacao n ideal
    // pode causar if
    $resultado_dois_if = "";
    if ($idade >= 18 && $apresentou_documento == true) {
        $resultado_dois_if = "Acesso Liberado";
    }
    if ($idade < 18 || !$apresentou_documento == true) {
        $resultado_dois_if = "Acesso Negado";
    }
    // retorno da condicao
    //echo "<h4> Com dois Ifs .$resultado_dois_if</h4>";
    echo "<h4> Com dois Ifs </h4>";
    echo $resultado_dois_if, "<br>";

    //
    // e com elseif
    //n ideal
    $resultado_if_elseif = "";
    if ($idade >= 18 && $apresentou_documento == true) {
        $resultado_if_elseif = "Acesso Liberado";
    }
    else if ($idade < 18 || !$apresentou_documento == true) {
        $resultado_if_elseif = "Acesso Negado";
    }
    // retorno da condicao
    echo "<h4> If com Else if </h4>";
    echo $resultado_if_elseif, "<br>";

    //
    //caso o primeiro n estiver n condicao desejada
    //rode para o else if, caso n 
    //vai para o segundo else if
    //parecido com loop 
    $resultado_if_elseif = "";
    if ($idade >= 18 && $apresentou_documento == true) {
        $resultado_if_elseif = "Acesso Liberado";
    }
    else if ($idade < 18 || !$apresentou_documento == true) {
        $resultado_if_elseif = "Acesso Negado";
    }
    else if ($idade < 18 || !$apresentou_documento == true) {
        $resultado_if_elseif = "Acesso Negado";
    }
    //n obrigatorio
    else{
        $resultadoif = "Acesso Negado";
    }
    echo $resultado_if_elseif, "<br>";

    //
    //SWITCH
    //case criados ilimitados
    echo "<h4> Switch </h4>";
    $opcao = -1;
    switch ($opcao) {
        //agrupar mais de um valor
        case '0':
        case '-1':
            // pode fazer if, loop, echo...
            echo "Opçao Zero ou Dez [$opcao]";
            //parar execucao
            break;
        case '1':
            echo "Opçao Um [$opcao]";
            break;
        //qts case qser
        //
        //default
        //como se fosse else = 
        //nenhuma condicao foi atendida use o default
        default:
            echo "Opçao Padrão [$opcao]";
            break;
    }

    //
    //colocando um switch dentro do if
    echo "<h4> Switch dentro do if </h4>";
    if ($opcao === 0 || $opcao === -1) {
        echo "Opçao Zero ou Dez [$opcao]";
    }
    elseif ($opcao === 1) {
        echo "Opçao Um [$opcao]";
    }
    else {
        echo "Opçao Padrão [$opcao]";
    }
    // 
    // echo $opcao;
?>
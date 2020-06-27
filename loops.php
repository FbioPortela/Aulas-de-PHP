<?php
    //gera dinamismo
    //  while = enquanto 
    //  repete ate que seja verdade = true

    //
    // ESCOLHER ENTRE WHILE OU FOR
    // OS DOIS DARA O MESMO RESULTADO
    //

    //
    //onde usaremos
    //lista de eventos
    //ex: usuario entrou na tela de eventos
    //exibir eventos existenrts ao usuario
    //mostrara para o usuario
    //11 eventos
    $numero = 5;
    //teria q fzer dez vezes
    // $numero = 0, $numero = 1...
    //parar ate o 0
    //e verdade q o nuemro eh maior q 0
    //entao faca
    echo "<h4> While </h4>";
    while ($numero > 0) {
        // usar oq quiser if,switch
        //ir contando de trs pra frente
        $numero--;
        echo "Removeu um valor. Valor Atual: $numero <br>";
    }
    //
    echo "Finalizou While. <br>";

    // 
    // DO while
    //faca enquanto a condicao for verdade
    //ele vai executar sendo verdade ou n 
    //diferente d while
    //TOME CUIDADO = FACA PRIMEIRO DPS ANALISE MELHOR
    echo "<h4> Do While </h4>";
    $numeroDoWhile = 1;
    do {
        $numeroDoWhile--;
        echo "Removeu um valor. Valor Atual: $numero <br>";
    } while ($numeroDoWhile > 0);
    //
    echo "Finalizou Do While. <br>";

    //
    // FOR = PARA
    $numeroFor = 5;
    echo "<h4> For </h4>";

    //pouco usado
    //padrao
    //independente se for js, python
    //geralmente usasse uma letra para declarar
        //parametro  //variavel  //condicao
    for ($i=0; $i < $numeroFor; $i++) { 
        echo "Removeu um valor. Valor Atual: $i <br>";
    }
    echo "Finalizou For. <br>";

    //
    //Concatenacao
    echo "<h4> Concatenacao </h4>";
    $meuNome = "Fabio";
    $meuNome .= "de Oliveira";
    $meuNome .= " Portela";
    $meuNome .= " Pereira";
    
    echo $meuNome, "<br>";
?>
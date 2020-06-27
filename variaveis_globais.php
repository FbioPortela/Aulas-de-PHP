<?php
    //
    //variaveis globais
    $GLOBALS["fruta"] = "uva";
    echo $GLOBALS["fruta"];

    //fazendo dentro de uma funcao
    //para ser posteriormente ser compartilhada
    function acessando_valor(){
        return $GLOBALS["fruta"];
    }

    //
    echo "<br>";
    echo acessando_valor();
    echo "<br>";
    
    //este tipo de variavel $GLOBALS
    //bastante usada para definir uma versao do sistema
    //para saber em qual estamos trabalhando
    //ex
    //$GLOBALS["versao"] = "1.5.3";

    //
    //server = variaveis definidas para acessarem
    //informacoes do sistema
    // $_SERVER
    //
    //pegnado o caminnho do arquivo em php
    echo $_SERVER['PHP_SELF'], "<br>";
    //
    ///pegnado em qual servidor = localhost
    //se a url fosse de um site, estario o nome do
    echo $_SERVER['SERVER_NAME'],"<br>";
    // echo $_SERVER['HTTP_REFERER'],"<br>";
    //
    //acao get = pegando pela url
    echo $_SERVER['REQUEST_METHOD'],"<br>";
    //
    //vazio
    //sera mostrado tudo escrito pelo usuario apos 
    //o a ultima palavra na url e ?
    echo $_SERVER['QUERY_STRING'],"<br>";
    //
    //extensao aceita da requisicao
    echo $_SERVER['HTTP_ACCEPT'], "<br>";
    //
    //maquina
    //localhost
    echo $_SERVER['HTTP_HOST'],"<br>";

    //
    // $_REQUEST = ira funcionar com requisicao post 
    // e get
    // $_GET = apenas get
    // $_POST = apenas post
    $_SESSION
    // ex
    // quando abre o email pela segunda em uma pagina
    // que n foi fechada, ele sera carrgada onde vc parou
    // nao pedira senha(login), pois reconhecera pela requisicao
    // caso tenha fechada, ela pedira senha(login)













?>
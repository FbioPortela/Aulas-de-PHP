<!-- COIDGO ORIGINAL DO HTML FORMULARIO
    SERA FEITO EM OUTRA PAGINA
    PARA MELHOR ORGANIZACAO -->
<?php
    // echo "ok";

    //ira dar erro
    //mais no inspecionar pagina
    //tera o caminho desta pagina aqui
    //
    //nome pegado do input do nome e idade
    //ele consegue pegar informacoes do formulario 
    //variavel REQUEST = GET ou POST
    //----------- NAO RECOMENDADO -----------------
    $nome = $_REQUEST["nome"];
    $idade = $_REQUEST["idade"];
    $senha = $_REQUEST["senha"];
    echo "--------------Request------------<br>";
    echo $nome, ".<br>";
    echo $idade, ".<br>";
    echo $senha, ".<br>";

    //
    //----------- RECOMENDADO ------------------
    //variavel POST
    //
    //      DICA IMPORTANTE
    // htmlspecialchars = sempre use ele, pois
    // caso o usuario insere no label ex
    // delete from table do banco de dados 
    // ao validar, pode ser que seja excluido a tabela
    //          SQL INJECTION
    $nomePost = htmlspecialchars($_POST["nome"]);
    //
    //validacao
    //empty(vazio)
    //strlen(limita um tanto de string)
    if (empty($nomePost) || strlen($nomePost) < 5) {
        echo "Favor escrever seu nome, seguindo quantidade de caracteres. <br>";
        //com o return = ira para a requisicao
        // com a pagina atualizada
        // return;
    }
    //
    $idadePost = $_POST["idade"];
    $senhaPost = $_POST["senha"];
    echo "--------------Post------------<br>";
    echo $nomePost, ".<br>";
    echo $idadePost, ".<br>";
    echo $senhaPost, ".<br>";

    //
    //--------------NAO RECOMENDADO-----------
    //caso o method esta post
    //o get dara erro, pois a requisicao n url
    // n esta habilitada
    //variavel GET
    // $nomeGet = $_GET["nome"];
    //
    //vaidando campo
    //operador ternario
    //                                              vazio
    $nomeGet = isset($_GET["nome"]) ? $_GET["nome"]: null;
    // $idadeGet = $_GET["idade"];
    $idadeGet = isset($_GET["idade"]) ? $_GET["nome"]: "não achei a idade";
    // $senhaGet = $_GET["senha"];
    $senhaGet = isset($_GET["senha"]) ? $_GET["nome"]: null;
    echo "--------------Get------------<br>";
    echo $nomeGet, ".<br>";
    echo $idadeGet, ".<br>";
    echo $senhaGet, ".<br>";

    //
    //FOI ENVIADO 
    //PARA ESTA MESMA PAGINA QUE ESTA ESPECIFICADA AQUI
    //
    //gerou esta url
    //lembrando ? query string
    //metodo get
    //pq = esta na url as informacoes  
    // http://localhost/PHP/formulario.php?nome=joao&idade=12
    // NAO RECOMENDE, POIS A SENHA OU INFORMACOES
    // IMPORTANTS ESTA EXPOSTA NA URL
    // NAO FACA ISSO
    //      DICA
    // NO FORM ACTION DEIXA O METHOD COMO POST
    //
    //AGORA OLHA A DIFERENCA 
    //SEGURANCA 
    //SERA MOSTRADO NO NETWORK DA UM F12
    //http://localhost/PHP/formulario.php

    //
    //variavel Files = array
    $foto = $_FILES["foto"];
    echo "------------- Files ------------<br>";
    // dara erro, pois o echo so imprimir numeros inteiros
    // string...
    // echo $foto;
    //
    //dara certo
    //isso ira aparecer
    // Array ( [name] => Captura de Tela (3).png [type] => 
    // image/png [tmp_name] => C:\xampp\tmp\php771A.tmp [error] => 0 [size] => 1634491 )
    print_r($foto);
?>
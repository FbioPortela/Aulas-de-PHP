<!-- FOI CRIADO UM HTML COM UM FORMULARIO 
    NESTE FORMULARIO, HA NOME, IDADE E SENHA 
    E UM BOTAO DE AVANCAR = 
    NESTE AVANCAR = FOI CRIADO UM REQUISICAO DO MSM 
    CODIGO EM PHP PARA A VALIADACAO DA PROXIMA
    PAGINA
    ISTO EH MUITO POUCO FEITO, NO DIA DIA DE UJM 
    PROGRAMADOR
    O RECOMENDADO SERIA = CRIAR UMA NOVA PAGINA
    PARA UMA VALIDACAO DA PROXIMA PAGINA -->
<!-- <?php
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
?> -->

<!--  -->
<?php
    //
    // PARA FAZER EM OUTRO SCRIPT = PARA MELHOR ORGANIZACAO
    // PARA ELES SE COMUNICAREM COM PROCESSA-FORMULARIO.PHP
    //EH USADO O INCLUDE REQUIRED
    //caminho de outra script 
    //para comunicacao
    //
    //pq o ./
    //pois o arquivo esta em outra pasta(diretorio) 
    //posterior(avancar) a esta 
    //
    //para voltar o diretorio anterior ../
    // o include reconhece o form
    //RECOMENDADO
    include "./processa-formulario.php";
    // ou
    // com apenas o nome sem ./
    // include "processa-formulario.php";
    //
    //ou require
    //com este no navegador
    // sra mostrado sem os labels, e o botao
    // n reconhece o form
    // require "processa-formulario.php";
    //
    // existe o include_once = 
    // inclui apenas uma vez 
    //
    // require_once
?>

//
<!-- DICA -->
<!-- QUANDO FOR PARA ESCRVER CODIGOS EM PHP 
    COM, COM CODIGOS EM HTML, DESTA FORMA ABAIXO 
    RENOMEAR O ARQUIVO PARA HTML, PARA AUTO-
    COMPLETE DO HTML, E DPS VOLTE PARA O PHP-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Fabio Portela - Formulário </title>
</head>
<body>
    <!-- ele ira mandar a proxima pagina de requisicao 
        para esta propria
        com a adicao do coidgo la encima php
        neste codigo -->
        <!--                                          sempre sera post = pela seguranca                   -->
        <!-- enctype = pois para reconhecer arquivos,
            se n dara erro -->
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype=
    "multipart/form-data">
        <p>
            <label> Nome: </label>
            <input type="text" name="nome">
        </p>
        <p>
            <label> Idade: </label>
            <input type="number" name="idade">
        </p>

        <p>
            <label> Senha: </label>
            <input type="password" name="senha">
        </p>

        <p>
            <label> Foto: </label>
            <input type="file" name="foto">
        </p>
        <!-- ou botao = button -->
        <p> <input type="submit" value="Enviar"> </p>
    </form>
</body>
</html>
<?php
    // Revisao aulas anteriores
    // Aula 01
    // comentario de linha 
    // $nome = "paulo";
    // $NOME = "PAULO"
    // php nao eh tipada que nem js 
    // ele ira reconhecer d acordo a variavel declarada
    // echo $nome;

    // propriedade = camelcase
    //como pode ou n ser declarada uma variavel
    // ex
    // caso for ser declarada com nome completo
    // e vc apenas colocar o primeiro nome, esta errado
    //tem de ser de acordo ao q vai ser daclarada
    // $nome comp = est errado
    // $nome_comp ou $nomeComp ou $NomeComp = esta cert

    // camelcase
    // $nomeComp = "fabio...";

    // // pascalcase
    // $NomeComp = "fabio...";

    // //snakecase
    // $nome-comp = "fabio...";

    //var_dump = mostra o tipo da variavel
    //a qtde d caracetres e o valor definido
    $valorCompra = 20.233;
    var_dump($valorCompra);

    // testar essas funcoes(metodos)
    // outras funcoes de string
    // strlen = qtde de string
    // str_word_count = qtde de palavras
    // strrev = reverter uma string 
    // strpos = retorna posicao de elemento de um string
    // str_replace = subsititui um ou mais elements de string
    // trim = limpa os espacos em branco
    // strtoupper = transforma tudo em maiusculo
    // strtolower = transforma tudo em minnusculo

    echo"<h3> Funções de String </h3>";
    $escola = "Senac TBS             ";

    //Trim
    // limpa dados alocados em branco mas somados em caracteres
    $escola = trim($escola);

    // sera mostrado qtos elementos ha no valor da variavel
    // e ira em int(num)
    strlen($escola);
    echo strlen($escola), "<br>";
    // ou
    // tamanho = strlen($escola);
    // print($escola);

    // ex str_word_count
    echo str_word_count($escola), "<br>";
    // ou o print

    // strpos
    //onde esta posiciconado o t no valor declarado
    echo strpos($escola, "T"), "<br>";

    // str_replace
    echo strpos($escola, "T"), "SBT<br>";

    // strtoupper
    echo strtoupper($escola), "<br>";

    // strtolower
    echo strtolower($escola), "<br>";  

    //sempre ponto nunca virgula
    $valorCompra = 1222.00;
    //pode colocar oq quiser mas sempre entre aspas
    echo "Valor da compra: $valorCompra <div> Ola mundo! </div <br>";
    //com aspas simples tdo sera identficado como string
    //para mostrar com o valor, tera de ser concatenado com um ponto
    echo 'Valor da compra: '.$valorCompra.' <br>';
    //descont de  56 
    $valorCompra -= 56;
    echo "Valor após desconto: $valorCompra <br>";

    // operador comparacao
    //== igual 
    // === identical
    // != or <>
    // !== not identical
    // >
    // <
    // >=
    // <=

    // operador ternario 
    // comparacao ? resultado_quando_verdade : resultado_quando_falso
    //com dois valores 
    echo "<h3> Operador Ternário </h3>";
    $valor = 20;
    $resultado = $valor == 20 ? 
                    "È Igual " : 
                    "Não é Igual";
    echo ($resultado), "<br>";

    //RECOMENDACAO DO PROFESSOR
    //com tres valores 
    $valor = 20;
    $resultado = $valor === 20 ? 
                    "È Igual " : 
                    "Não é Igual";

    echo ($resultado), "<br>";
    //com tres valores
    //com valor igual e com tipos diferentes
    //RECOMENDACAO DO PROFESSOR
    $valor = "20";
    $resultado = $valor === 20 ? 
                    "È Igual " : 
                    "Não é Igual";

    echo ($resultado), "<br>";
    
    // mostrar um ex em javascript
    // para fazer diretamente pelo console(navegador)
    // abrir arquivo php pelo localhost e f12/console/digitar codigos

    //tudo q tenha para o cliente 
    // sera mostrado com o echo em js, html, css 
    // a parte do servidor sera o php
    

    //
    //operadores de incremento
    //muito usado com o loop
    echo "<h3> Operador de Incrementação </h3>"; 
    $contar = 0;
    //o ++tem de ser colado n variavel
    $contar++;
    $contar++;      
    echo $contar;

    //
    //OPERADORS LOGICOS
    // AND ou = mas usado apenas dentro de if(&&(mesma coisa, pode ser escrita um ou outro))
    // OR  ou = mas usado apenas dentro de if(||(mesma coisa, pode ser escrita um ou outro))
    // !
    // XOR = um ou outro, mas n os dois
    //
    // true === 1
    // false === 0
    //AND
    //todas tem de ser verdadeiras
    echo "<h3> Operador Lógicos </h3>";
    //n ha limite de comparadores em &&
    $resultado = 10 > 5 && 1 === 1;
    // caso for falso(0) = n aparecera n da na tela
    echo ($resultado), "<br>";

    //
    //OU
    //sera true caso uma ou duas sao verdadeiras
    $resultado = 10 === 5 || 1 === 1 || 10 === 10;
    echo ($resultado), "<br>";
    //
    //usando o And e Ou
    $resultado = 10 === 5 || (1 === 1 || 10 === 10);
    echo ($resultado), "<br>";
?>
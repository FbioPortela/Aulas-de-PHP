<?php
    // se esta msg aparecer n tela, é pq ja
    // esta logado
    // 
    // PARA INICIALIZAR UMA SESSAO
    // nos dois scripts
    // 
    // com este vinculo o llogin estara sempre com 
    // o mesmo horario
    // a n ser seja alterado no coidgo php
    session_start();

    //se estes parametros estiverem definidos
    // faca o vinculo de negacao
    // if (!isset($_SESSION['id_usuario'])) {
    if (isset($_SESSION['id_usuario'])) {
        // header("location: ./sessao.php");
        // echo "Voce não tem uma sessão, faça o login novamente";
        // return;
        // ou exit();
        echo "Usuario ja logado <br>";
        echo $_SESSION['id_usuario'] ."<br>";
        echo $_SESSION['nome_usuario'] ."<br>";
        echo $_SESSION['data_usuario'] ."<br>";
    }
    else {
        echo "Voce não tem uma sessão, faça o login novamente.
        <a href='sessao.php'> Clique aqui </a>";
        return;
    }
    //
    // se nao volte para a pagina anterior
    // else {
        
    // }

    //
    // fazer botao logout(sair)
    echo "<button onclick='sair()'> Sair </button>";
    echo "<script> 
            function sair(){
                // alert('ok');
                window.location.href = 'sessao_logout.php';
        }
        </script>";










?>
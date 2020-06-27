<?php
    // O que é sessao
    // uma conexao entre o servidor e o cliente
    // (browser)
    // ex
    // quando vc loga no gmail
    // na primeira vez ele ira pedir o login
    // ao fechar o browser ele ira pedir novamente
    // ele n reconhecera o vinculo de login
    // a opcao de manter-me conectado é usado via cookie
    // a sessao pode expirar de acordo ao dev
    //

    //
    // PARA INICIALIZAR UMA SESSAO
    session_start();
    $_SESSION["id_usuario"] = 10;
    $_SESSION["nome_usuario"] = "Fabio";
    $_SESSION["data_usuario"] = Date("d/m/Y H:i:s");

    // criado um botao de login para ir para
    // a pagina sesssaoPrincipal
    // com o vinculo ja a atribuido
    echo "<a href='./sessaoPrincipal.php'> Fazer login </>"
    // echo $_SESSION["id_usuario"] ."<br>";
    // echo $_SESSION["nome_usuario"] ."<br>";
    // echo $_SESSION["data_usuario"] ."<br>";
    //
    // redirecionar para uma outra pagina php
    // sessaoPrincipal.php
    // header("location: ./sessaoPrincipal.php")

    // echo "
    //     <p> Bem vindo $_SESSION["nome_usuario"] [$_SESSION
    //     ["  id_usuario"]]!
    //     </p> 

    //     <p>
    //     Voce logou em $_SESSION["data_usuario"].
    //     </p>
    //     ";
?>
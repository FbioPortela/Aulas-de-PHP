<?php
    // sempre fzaer isto
    session_start();
    // 
    // para n dar erro
    // colocar este cdg junto com o session
    session_destroy();

    $nome = $_SESSION['nome_usuario'];
?>
<!--  -->
<p> Voce 
    <?php echo $_SESSION['nome_usuario'];
    ?>
    saiu. 
</p>
<!-- // -->
<a href='sessao.php'> Faça o login novamente, clique aqui </a>";
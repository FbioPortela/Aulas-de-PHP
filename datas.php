<?php
    //datas
    //data do software do xampp
    // arquivo bloco de notas dentro do config xampp
    date_default_timezone_set("America/Sao_Paulo");

    //pegar hra atual
    $dataHoje = date("d/m/Y");
    $horaHoje = date("h:i:s");
    echo $dataHoje."<br>";
    echo $horaHoje."<br>";

    echo date_default_timezone_get();

?>
<?php
    $server ="localhost";
    $user = "root";
    $password = "";
    $bd = "cadastro";

    if($conn = mysqli_connect($server, $user, $password, $bd))
    {
        //echo "Conectado com sucesso!";
    }
    else
    {
        echo "Deu ruim mano!";
    }

    function mensagem ($texto, $tipo)
    {
        echo "<div class='alert alert-$tipo' role='alert'>$texto</div>";
    }
    
?>
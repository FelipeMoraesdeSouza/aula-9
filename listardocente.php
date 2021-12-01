<?php

include('conexao.php');

$sql = "select * from tbldocente";
$resultado = $con->query($sql);

    //listar os resultados achados
    while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
       // var_dump($linha);

        echo $linha['iddocente']."<br>";
        echo $linha['docente']."<br>";
        echo $linha['espec']."<br>";
        echo $linha['salhora']."<br>";
        echo $linha['dispo']."<br>";
        
        echo "<button>Editar</button> | <button>Apagar</button>";
        echo "<hr>";

         //die();

    }
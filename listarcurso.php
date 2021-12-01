<?php

include('conexao.php');

$sql = "select * from tblcursos";
$resultado = $con->query($sql);

    //listar os resultados achados
    while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
       // var_dump($linha);

        echo $linha['idcurso']."<br>";
        echo $linha['curso']."<br>";
        echo $linha['valor']."<br>";
        echo $linha['ch']."<br>";
        echo $linha['docente']."<br>";
        
        echo "<button>Editar</button> | <button>Apagar</button>";
        echo "<hr>";

         //die();

    }
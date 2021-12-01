<?php
//include       quando ocorre erro continua o programa com avisos
//include_once  quando ocorre erro continua o programa com avisos apenas uma vez

//require       quando ocorre erro mata o programa 
//require_once  quando ocorre erro mata o programa apenas uma vez

include('conexao.php');
$aluno  = "diego";
$turma  = "3001";
$mensal = "590.98";

$sql = "insert into tblaluno (aluno,turma,mensal) 
        value('$aluno','$turma','$mensal')";

//conexão ->query (coamndo sql)
$con->query($sql);
var_dump($con);


/*
$localhost  = "localhost";

$username   = "root";

$password   = "";

$db         = "bdcurso";



try {

    $con = new PDO("mysql:host=$localhost;dbname=$db",$username,$password);

    //var_dump($con); //debugar - Descobrir o que está sendo respondido

} catch(PDOException $e) {

    echo "conexão falhou:<br> ".$e->getMessage();



}
*/
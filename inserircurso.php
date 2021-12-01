<?php
/* 
include('conexao.php');
$aluno  = "ian";
$turma  = "3001";
$mensal = "590.98";

$sql = "insert into tblaluno (aluno,turma,mensal) 
        value('$aluno','$turma','$mensal')";

//conexão ->query (coamndo sql)
$con->query($sql);
*/



//include/ include_once avisa o erro e continua o programa
// require / require_once mata o programa ao encontrar erro.

include("conexao.php");

$curso = "Python ";
$valor = 500.00;
$ch = 1800;
$docente = "Lucas Abrantes";
$sql = "insert into tblcursos (curso,valor,ch,docente) 
        values('$curso','$valor','$ch','$docente')";

//mysqli_query(conexao,comando sql);
//$qry = mysqli_query
//($con,$sql)

//conexao->query(comando sql)
$con->query($sql);
var_dump($con);
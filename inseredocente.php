<?php

include('conexao.php');
$docente    = "diego";
$ecpec      = "c++";
$salhora    = "200,0";
$dispo      = "total";

$sql = "insert into tbldocente (docente,espec,salhora,dispo) 
        value('$docente','$ecpec','$salhora','$dispo')";

//conexão ->query (coamndo sql)
$con->query($sql);
var_dump($con);
/*
tbldocente

iddocente int - pk -ai

docente varchar(30)

especialidade varchar(30)

salhora float(10,2)

disponibilidade varchar(30) 
*/
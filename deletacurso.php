<?php

include('conexao.php');

$idcursos = 1;
$sql ="delete from tblcursos where idcurso='$idcursos'";

//conexao->query(comando sql)
$con->query($sql);

var_dump($con);
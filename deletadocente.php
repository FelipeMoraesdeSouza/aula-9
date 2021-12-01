<?php

include('conexao.php');

$iddocente = 1;
$sql ="delete from tbldocente where iddocente='$iddocente'";

//conexao->query(comando sql)
$con->query($sql);

var_dump($con);
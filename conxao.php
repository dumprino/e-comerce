<?php

$mysql = array(
    'host' => 'localhost',
    'usuario' => 'id21634134_enfotec',
    'password' => 'K0%h4#^!~Mr&(f5D*u',
    'database' => 'id21634134_dbenfotec'
);

$MySQLi = new MySQLi($mysql['host'], $mysql['usuario'], $mysql['password'], $mysql['database']);
if ($MySQLi->connect_error){ 
    echo "Desconectado ! ERRO: Sua conexão Não Foi Bem Sucedida" . $MySQLi->connect_error;
}else{
    // echo "Conexão Estabelecida no Servidor :=: <b>", $mysql['host'];
    // echo "</b><br><br> No Banco de  Dados :=: <b>", $mysql['database'];
}
?>
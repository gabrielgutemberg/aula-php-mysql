<?php  
$servidor ="127.0.0.1";
$usuario = "root";
$senha = "";
$banco = "AULA";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao) {
    die("Erro de conexão com o banco".mysqli_connect_error());
} else {
    echo"conexao realizada com sucesso!";
}








?>
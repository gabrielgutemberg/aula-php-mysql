<?php
include("conexao.php");

$id = 11;

$sql = "DELETE FROM usuarios WHERE id=$id";
$resultado = $conexao->query($sql);

if ($resultado === true){
    echo "Registro deletado com sucesso!";
} else{
    echo $conexao->error;
}
?>
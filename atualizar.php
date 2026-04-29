<?php
include("conexao.php");

$id = 11;
$novoNome = "Novo Midas";
$novoEmail = "novo@gmail.com";

$sql = "UPDATE usuarios SET nome='$novoNome', email='$novoEmail' WHERE id=$id";

$resultado = $conexao->query($sql);

if ($resultado === true){
    echo "Dados atualizados com sucesso!";
} else{
    echo $conexao->error;
}
?>
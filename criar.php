<?php   
include("conexao.php");
$nome = "Midas";
$email = "midas@gmail.com";

$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome','$email');";

$resultado = $conexao->query($sql);

if ($resultado === true){
    echo "Dados inseridos com sucesso!";
} else{
    echo $conexao->error;
}
?>
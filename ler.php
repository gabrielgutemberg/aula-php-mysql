<?php
include("conexao.php");

$sql = "SELECT * FROM usuarios";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0){
    while($linha = $resultado->fetch_array()){
        echo "ID: " . $linha["id"] . "<br>";
        echo "Nome: " . $linha["nome"] . "<br>";
        echo "Email: " . $linha["email"] . "<br><br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}
?>


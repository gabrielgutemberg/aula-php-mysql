<?php 

include ("conexao.php");


$sql = "SELECT * FROM usuarios;";

$resultado = mysqli_query($conexao,$sql);

echo "<h1> Lista de contatos </h1>";

echo "<br>";

while ($coluna = $resultado->fetch_array()) {
    echo "Nome: " . $coluna["nome"] . "<br>" ;
    echo "telefone: " . $coluna["telefone"] . "<br>" ;
}


?>
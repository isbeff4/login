<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario = $_POST ['usuario'];
    $senha = $_POST ['senha'];

    include "conexao.php";

    $sql = "SELECT * FROM funcionamentos
            WHERE usuario = '$usuario'
            AND senha = '$senha' ";
    
    $resultado = mysqli_query($con, $sql);
                 
            if (mysqli_num_rows($resultado)> 0){
                echo "liberado!";
                header ('location: inicio.html');
            } else {
                echo "usuario ou senha invalidos";
                echo "<br> <br>";
                echo  "<a href='index.html'>voltar</a>" ;
                echo  "<a href='inicio.html'>pagina de início</a>" ;
                echo "<br> <br>";
                }
 }
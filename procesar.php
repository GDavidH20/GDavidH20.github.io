<?php
include("conexion.php");


$id=$_POST["id"];
$titulo=$_POST["titulo"];
$autor=$_POST["autor"];
$año=$_POST["año"];

$actualizar= "UPDATE libros SET titulo='$titulo',autor='$autor',ano='$año' WHERE id='$id'";

$resultadoAct = mysqli_query($conexion,$actualizar);

if($resultadoAct){
    echo "<script>alert('Se han actualizado los campos'); window.location='/PROYECTO/principal.php'</script>";
} else{
    echo "<script>alert(´No se pudo actualizar el campo´); window.history.go(-1);</script>";
}

?>
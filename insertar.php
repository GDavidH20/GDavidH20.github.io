<?php
include("conexion.php");

$id=$_POST["id"];
$titulo=$_POST["titulo"];
$autor=$_POST["autor"];
$año=$_POST["año"];
$insertar = "INSERT INTO libros(id,titulo,autor,ano) VALUES('$id','$titulo','$autor','$año')";
$resultado = mysqli_query($conexion,$insertar);

if($resultado){
    echo "<script>alert('Se ha registrado el libro con exito'); window.location='/PROYECTO/principal.php'</script>";
} else{
    echo "<script>alert(´No se pudo registrar el libro´); window.history.go(-1);</script>";
}


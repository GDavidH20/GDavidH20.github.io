<?php
    include ("conexion.php");
    $idlibro=$_GET ["idlibro"];
    $libro = "SELECT * FROM libros WHERE id='$idlibro'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">
    <title>Edición</title>
</head>
<body>
    <form class="contenedor contenedor-edit2" action="procesar.php" method="post">
        <div class="titulo titulo_edit2">Libros</div>
        <div class="encabezado">Titulo</div>
        <div class="encabezado">Autor</div>
        <div class="encabezado">Año</div>
        <div class="encabezado">Acción</div>
        <?php ;
        $resultado = mysqli_query ($conexion,$libro); 
        while($fila= mysqli_fetch_assoc($resultado)){?>
        <input type="hidden"class="registro_input" value="<?php echo $fila["id"];?>" name="id">
        <input type="text"class="registro_input"value="<?php echo $fila["titulo"];?>"name="titulo">
        <input type="text"class="registro_input"value="<?php echo $fila["autor"];?>"name="autor">
        <input type="number"class="registro_input"value="<?php echo $fila["ano"];?>"name="año">
        <?php } mysqli_free_result($resultado); ?>  
        <input type="submit" value="Actualizar" class="boton boton-actualizar">

    </form>
</body>
</html>
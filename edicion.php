<?php
    include ("conexion.php");
    $libro = "SELECT * FROM libros"
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

    <div class="contenedor contenedor-edit">
        <div class="titulo titulo_edit">Libros</div>
        <div class="encabezado">ID</div>
        <div class="encabezado">Titulo</div>
        <div class="encabezado">Autor</div>
        <div class="encabezado">Año</div>
        <div class="encabezado">Acción</div>
        <?php ;
        $resultado = mysqli_query ($conexion,$libro); 
        while($fila= mysqli_fetch_assoc($resultado)){?>
        <div class="registro"><?php echo $fila["id"];?></div>
        <div class="registro"><?php echo $fila["titulo"];?></div>
        <div class="registro"><?php echo $fila["autor"];?></div>
        <div class="registro"><?php echo $fila["ano"];?></div>
        <div class="registro">
            <a href="actualizar.php?idlibro=<?php echo $fila["id"];?>" class="registro_link">Editar</a> |
            <a href="eliminar.php?idlibro=<?php echo $fila["id"];?>" class="registro_link">Eliminar</a>
        </div>
        <?php } mysqli_free_result($resultado); ?>  

    </div>
    
</body>
</html>
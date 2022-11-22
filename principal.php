<?php
    include ("conexion.php");
    $libro = "SELECT * FROM libros";
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
    <title>BiblioTec</title>
</head>
<body>
    <div class ="iniciopag">
        <img class="logo" src="img/icono.png" widht="70px" height="70px">
        <h2 class="tituloinicio">BiblioTec</h2>
        <a class="cerrarsesion"href="index.html">Cerrar sesion</a>
    </div>
    <div class="contenedor2">
        <h2 class="cont_titulo">Registrar Libro</h2>
        <form action="insertar.php" method ="post" enctype="multipart/form-data" class="cont_form">
            <label for="" class="label_form">Id: </label>
            <input name="id"type="number" class="input_form">
            <label for="" class="label_form">Titulo:</label>
            <input name="titulo"type="text" class="input_form">
            <label for="" class="label_form">Autor:</label>
            <input name="autor"type="text" class="input_form">
            <label for="" class="label_form">Año:</label>
            <input name="año"type="number" class="input_form">
            <input type="submit" class="boton" value ="Registrar">
        </form>
    </div>
    <div class="contenedor">
        <div class="titulo">Libros 
            <a class="title" href="edicion.php">Editar</a>
        </div>
        <div class="encabezado">ID</div>
        <div class="encabezado">Titulo</div>
        <div class="encabezado">Autor</div>
        <div class="encabezado">Año</div>

        <?php ;
        $resultado = mysqli_query ($conexion,$libro); 
        while($fila= mysqli_fetch_assoc($resultado)){?>
        <div class="registro"><?php echo $fila["id"];?></div>
        <div class="registro"><?php echo $fila["titulo"];?></div>
        <div class="registro"><?php echo $fila["autor"];?></div>
        <div class="registro"><?php echo $fila["ano"];?></div>
        <?php } mysqli_free_result($resultado); ?>  
    </div>
    
</body>
</html>
    <?php
        include ("conexion.php");
        $id = $_GET ["idlibro"];
        

        //actualizar datos

        $eliminar = "DELETE FROM libros WHERE id = '$id'";

        $resultadoEliminar = mysqli_query($conexion, $eliminar);

        if($resultadoEliminar){
        echo"<script> alert('Se eliminò el libro indicado');window.location='/PROYECTO/principal.php'</script>";
        }

    ?>  
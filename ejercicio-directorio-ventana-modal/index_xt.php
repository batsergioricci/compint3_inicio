    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Directorio</title>
    </head>
    <body>
        <?php
        // Revisamnos si se ha enviado el formulario
        if (isset($_POST["nombre"])){
            //recuperamos los datos enviados por el formulario
            $nombre =$_POST["nombre"];
            $apellido =$_POST["apellido"];
            $empresa =$_POST["empresa"];
            $email =$_POST["email"];
            $telefono =$_POST["telefono"];
            $comentarios =$_POST["comentarios"];

            include "conexion.php";

            //hacemos un querry para insertar los datos en la Base de Datos
            $sql = "insert intro juan_directorio (nombre,apellido,empresa,email,telefono comenterios) values('$nombre','$apellido','$empresa','$email','$telefono','$comentarios')";
            $nada = ejecutar($sql);
            //recuperamos la primera letra del apellido que se acaba de ingresar
            $primeraLetra = substr($apellido, 0, 1);

            //reenviamos la página a index.php para que me muestre los registros con la letra de este apellido
            echo "<script language='javascript'>";
            echo "window.location.assing('index.php?letra=$primeraLetra&accion=ingresar');";
            echo "</script>";*



        }else{
            // si no se ha enviado nada, redireccionamos a index
            echo "<script language='javascript'>";
            echo "window.location.assing('index.php');";
            echo "</script>";
        }
        ?>

    </body>
    </html>
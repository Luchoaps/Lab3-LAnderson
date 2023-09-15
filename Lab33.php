<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 3</title>
</head>
<body>
    <?php
        if (array_key_exists('enviar', $_POST)){
            if($_REQUEST['Apellido'] != ""){
                echo "El apellido Ingresado es:  $_REQUEST[Apellido]";
            }else{
                echo "Favor coloque el apellido";
            }
            echo "<br>";

            if($_REQUEST['Nombre'] != ""){
                echo "El Nombre Ingresado es:  $_REQUEST[Nombre]";
            }else{
                echo "Favor coloque el nombre";
            }
        }else{
    ?>
    <form action="Lab33.php" method="post">
        Nombre: <input type="text" name="Nombre"><br>
        Apellido: <input type="text" name="Apellido"><br>
        <input type="submit" name="enviar" value="Enviar datos">
    </form>
    <?php
        }
    ?>
</body>
</html>
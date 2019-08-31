<?php 
require 'BD.php'; 

if(isset($_POST['usuario'])){
    $usuario = $_POST['usuario'];
    $cedula = $_POST['cedula'];
    $clave = $_POST['clave'];

    $sql = "INSERT INTO servicio(usuario,cedula,clave)
    values ('$usuario','$cedula','$clave')";

$conexion->query($sql);

}$conexion->connect_error;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel Gamgergy</title>
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Roboto&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="css/estilos.css">
    <script src="move.js"></script>
    <img src="img/gamergy2.jpg" alt="Gamergy">


</head>

<body>
    <form action="index.php" class="formulario " method="post">


        <h1 class="formulario__titulo">Sistema de Reserva de Habitaciones</h1>
<br>
<br>

        <input type="text" name = 'usuario' class="formulario__input">
        <label for="" class="formulario__label">Nombre y Apellido</label>

        <input type="text" name = 'cedula' class="formulario__input">
        <label for="" class="formulario__label">Documento Nacional de Identidad (DNI)</label>

        <input type="password" name = 'clave' class="formulario__input">
        <label for="" class="formulario__label">
        Introduzca una clave para su identificacion (Maximo 6 caracteres)</label>


        <h2>Tipo de Habitacion</h2>


        <input type="radio" name="habitacion"value="individual">
        <td>Individual</td>
        <br>

        <input type="radio" name="habitacion" value="Double">
        <td>Doble</td>
        <br>

        <input type="radio" name="habitacion" value="Triple">
        <td>Triple</td>
        <br>

        <input type="radio" name="habitacion" value="Familiar">
        <td>Familiar</td>
        <br>

        <input type="radio" name="habitacion" value="Suite">
        <td>Suite</td>
        <br>


        <h2 class="formulario__subtitulo">
            <h2 class="formulario__subtitulo">Opciones Extra</h2>
        </h2>


        <input type="checkbox" name="gym">
        <td>Gym</td>
        <br>

        <input type="checkbox" name="jacuzzi">
        <td>Jacuzzi</td>
        <br>

        <input type="checkbox" name="discoteca">
        <td>Discoteca</td>
        <br>

        <input type="checkbox" name="valet parking">
        <td>Valet Parking</td>
        <br>

        <input type="checkbox" name="buffet">
        <td>Buffet</td>
        <br>

        <input type="checkbox" name="spa">
        <td>Spa</td>
        <br>

        <input type="checkbox" name="salon de eventos">
        <td>Salon de eventos</td>

        <br>
        <br>
        <br>

        <input type="submit" onclick="PromptDemo()" class="formulario__submit">
    </form>
<div id="php">
</div>
</body>

</html>
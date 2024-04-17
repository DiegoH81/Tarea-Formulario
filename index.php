<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "prueba";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <section>FORMULARIO</section>
        <form action="#" name="prueba" method="post">
            <label for="nombre">Nombre</label><br>
            <input type="text" id="nombre" name="nombre"><br>

            <label for="apellido">Apellido</label><br>
            <input type="text" id="apellido" name="apellido"><br>

            <label for="fecha_nacimiento">Fecha de nacimiento</label><br>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"><br>

            <label for="ocupacion">Ocupacion</label><br>
            <input type="text" id="ocupacion" name="ocupacion"><br>

            <label for="telefono">Telefono</label><br>
            <input type="text" id="telefono" name="telefono"><br>

            <label for="email">E-mail</label><br>
            <input type="text" id="email" name="email"><br>
            
            <label for="nacionalidad">Nacionalidad</label><br>
            <select id="nacionalidad" name="nacionalidad">
                <option value="peru">Perú</option>
                <option value="argentina">Argentina</option>
                <option value="tailandia">Tailandia</option>
                <option value="brasil">Brasil</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Guatemala">Guatemala</option>
            </select>
            <br>
            <label for="nivel_ingles">Nivel de inglés</label><br>
            <input type="radio" id="nivel_ingles_basico" name="nivel_ingles" value="Basico">Basico<br>
            <input type="radio" id="nivel_ingles_intermedio" name="nivel_ingles" value="Intermedio">Intermedio<br>
            <input type="radio" id="nivel_ingles_avanzado" name="nivel_ingles" value="Avanzado">Avanzado<br>
    
            <label for="lenguajes_programacion">Lenguajes de programacion</label><br>
            <select name="lenguajes_programacion[]" id="lenguajes_programacion" multiple>
                <option value="c++">C++</option>
                <option value="c">C</option>
                <option value="java">Java</option>
                <option value="python">python</option>
            </select>
    
            <br><label for="aptitudes">Aptitudes</label><br>
            <input list="aptitudes" id="aptitudes_eleccion" name="aptitudes_eleccion">
            <datalist id="aptitudes">
                <option value="sociable">Sociable</option>
                <option value="creativo">Creativo</option>
                <option value="buen_comunicador">Buena comunicacion</option>
            </datalist>
            <br><label for="Habilidades">Habilidades</label><br>
            <input type="checkbox" id="habilidad1" name= "habilidades[]" value="Comunicativo">Comunicativo<br>
            <input type="checkbox" id="habilidad2" name= "habilidades[]" value="Pensamiento_critico">Pensamieno critico<br>
            <input type="checkbox" id="habilidad3" name= "habilidades[]" value="Sociable">Sociable<br>
    
            <label for="perfil">Perfil</label><br>
            <textarea id="perfil" name="perfil" rows="4" cols="50">
                Ingrese su perfil.
            </textarea>

            <input type="submit" name="registro" value="Enviar">
        </form>
    </div>
    
</body>

<?php

if (isset($_POST ["registro"]))
{
    $nombre = $_POST ["nombre"];
    $apellido = $_POST ["apellido"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $ocupacion = $_POST ["ocupacion"];
    $telefono = $_POST ["telefono"];
    $email = $_POST ["email"];
    $nacionalidad = $_POST ["nacionalidad"];
    $nivel_ingles = isset($_POST["nivel_ingles"]) ? $_POST["nivel_ingles"] : "";
    $lenguajes_programacion = isset($_POST["lenguajes_programacion"]) ? implode(", ", $_POST["lenguajes_programacion"]) : "";
    $aptitudes_eleccion = $_POST ["aptitudes_eleccion"];
    $habilidades = isset($_POST["habilidades"]) ? implode(", ", $_POST["habilidades"]) : "";
    $perfil = $_POST ["perfil"];


    $insertarDatos = "INSERT INTO datos VALUES('', '$nombre', '$apellido', '$fecha_nacimiento', '$ocupacion', '$telefono', '$email','$nacionalidad','$nivel_ingles', '$lenguajes_programacion', '$aptitudes_eleccion', '$habilidades', '$perfil')";

    $ejecutar_insertar = mysqli_query ($enlace, $insertarDatos);
}

?>
</html>
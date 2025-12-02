<!DOCTYPE html>
    <head>
        <meta charset =“UTF8”>
        <title> Practica PHP </title>
    </head>

    <body>
    <p>
        <h1>Formulario</h1>
    </p>
        <?php
        $nombre=$email=$password=$genero=$comentario="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty ($_POST["nombre"])){
                echo "ERROR";
            } else {
                $nombre=($_POST["nombre"]);
                if(!preg_match("/^[a-zA-Z-' ]*$/", $nombre)){
                    echo "Error ponlo de nuevo el nombre";
                }    
            }
        }
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty ($_POST["email"])){
                echo "ERROR";
            } else {
                $email=($_POST["email"]);
                if(!preg_match("/^[a-zA-Z0-9-' ]*$/", $email)){
                }    
            }
        }
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty ($_POST["password"])){
                echo "ERROR";
            } else {
                $password=($_POST["password"]);
                if(!preg_match("/^[a-zA-Z0-9-' ]*$/", $password)){
                }    
            }
        }
        ?>
        <form action="formulario.php" method="post">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id=”nombre” name=”nombre”  placeholder="Escribe aqui tu nombre"><br>

            <label for="correo">Correo:</label><br>
            <input type="email" id="email" name="email"  placeholder="Escribe aqui tu correo"><br>

            <label for="password">Contrasena:</label><br>
            <input type="password" id="password" name="password"  placeholder="Escriba su Contrasena"><br>

            <label for="comentario">Comentario:</label><br>
            <textarea id="comentario" id="comentario"></textarea><br>

            <input type="radio" id="hombre" name="Genero"><br>
            <label for="hombre">hombre</label><br>

            <input type="radio" id="mujer" name="Genero"><br>
            <label for="mujer">mujer</label><br>

            <input type="submit" id=”submit” name=”submit”><br>
        </form>
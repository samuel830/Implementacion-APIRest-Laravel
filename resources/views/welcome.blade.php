<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Api Laravel</title>
        <style>
        body{
            background-color: #b2ecd4;
            font-family: "Gill Sans", sans-serif;
            color: white;
        }

        .contenedor{
            padding-left: 20%;
            padding-right: 20%;
            padding-top: 5%;
            padding-bottom: 5%;
            margin-top: 5%;
            background-color: #64c29b;
            width: 800px;
        }

        .contenido{
            
        }

        .subtitulo{
            color: white;
        }

        .titulo{
            color: white;
        }
        </style>
    </head>
    <body>
        <div class="contenedor">
            <div class="titulo">
                <h1>¿COMO USAR NUESTRA API?</h1>
            </div>
            <div>
                <p>Para poder usar nuestra api, deberas desarrollar un script en php
                    desde el cual ejecutes una sentencia desde PostMan. Esta sentencia te devolverá,
                    en función del endpoint que estes usando, el contenido de la tabla "posts" de nuestra
                    base de datos.</p>
                <p>
                    Esto hará que se muestre por pantalla una tabla con todos los registros de la tabla, 
                    diferenciados por el titulo de la columna.
                </p>
                <br>
                <p>
                    El script deberá contener la siguiente direccion:
                </p>
                <p>
                    <b>-'http://localhost:8000/api/post/'</b> en el caso de que quieras listar todos los datos.
                </p>
                <p>
                    <b>-'http://localhost:8000/api/post/{id}'</b> en el caso de que quieras listar una id en específica.
                </p>
            </div>
        </div>
    </body>
</html>
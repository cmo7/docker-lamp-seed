<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .wraper {
            max-width: 900px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wraper">
        <h1>Docker LAMP</h1>

        <p>
            Este proyecto es un servidor web con php y una base de datos (con su correspondiente phpMyAdmin)
        </p>

        <p>
            Para usarlo sustituye éste archivo por los que necesites para tu aplicación.
        </p>

        <h2>Aplicaciones</h2>
        <ul>
            <li>Aplicación php: <code><a href="http://localhost">http://localhost</a></code></li>
            <li>phpMyAdmin: <code><a href="http://localhost:8000">http://localhost:8000</a></code></li>
        </ul>

        <h2>Información Base de Datos</h2>
        <ul>
            <li>Host: <code>db</code></li>
            <li>Database: <code>dbname</code></li>
            <li>User: <code>root</code></li>
            <li>Password: <code>test</code></li>
        </ul>
        <h2>Información PHP</h2>
        <?php
        phpinfo();
        ?>
    </div>



</body>

</html>
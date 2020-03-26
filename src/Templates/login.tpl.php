<html>
<head>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body class="log_in">
    <div class="caja">
        <h1><?= $title; ?></h1>
        <a href="/">Inicio</a>
        <a href="/user/register">Registro</a>
        <form action="/user/signin" method="post">
                <!--usuari = "algo"/""-->
                <label for="usuari">Email</label><input type="text" name="email" id="usuari" placeholder="Nom d'usuari"><br>
                <!--contrasenya = "algo"/""-->
                <label for="contrasenya">Contrasenya</label><input type="password" name="passwd" id="contrasenya" placeholder="Contrasenya del compte"><br>
                <button type="submit">LOGIN</button>
            </form>
        </div>
    </body>
</html>
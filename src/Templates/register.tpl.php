<html>
<head>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body class="log_in">
    <div class="caja">
        <a href="/">Inicio</a>
        <a href="/user/login">Log In</a>
        <form action="/user/signup" method="post">
                <!--contrasenya = "algo"/""-->
                <label for="contrasenya">Contrasenya</label><input type="password" name="passwd" id="contrasenya" placeholder="Contrasenya del compte"><br>
                <label for="contrasenya">Repite contraseña</label><input type="password" name="passwd2" id="contrasenya" placeholder="Contrasenya del compte"><br>
                <label for="mail">Correu</label><input type="email" name="email" id="mail" placeholder="Email"><br>
                <label for="tlf">Telefon</label><input type="tel" name="phone" id="tlf" placeholder="Telefon"><br>

                <hr/><br>
            <button type="submit"> Enviar </button>
            </form>
        </div>
    </body>
</html>
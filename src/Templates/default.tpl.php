<html>
    <head>
        <link rel="stylesheet" href="../public/css/style.css">
    </head>
    <body class="home">
        <h1><?= $title ?></h1>
        <a href="/user/login">Log In</a>
        <?php
        \Rentit\Session::init();

        if (\Rentit\Session::get('id')){
            echo "<a href='/property/add'>Añadir anuncio</a>";
        }

        if (\Rentit\Session::get('id')==1001){

            echo "<br><b>eres admin</b>";

        }
        ?>
        <hr/>
        <nav><?= $html ?></nav>
    </body>
</html>
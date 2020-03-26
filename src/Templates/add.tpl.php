<html>
<head>
    <link rel=stylesheet" href="../public/css/style.css">
</head>
<body>


<form action="/property/create" method="post">

    <label for="tit">Titulo:
        <input type="text" name="tit" id="tit" placeholder="Titulo del anuncio">
    </label><br>

    <label for="desc">Descripcion:
        <input type="text" name="desc" id="desc" placeholder="Descripcion">
    </label><br>

    <label for="precio">Precio:
        <input type="text" name="precio" id="precio" placeholder="Precio">
    </label><br>


    <hr/><br>
    <button type="submit">crear</button>
</form>
</body>
</html>
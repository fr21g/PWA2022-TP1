<!doctype html>
<html>
<head>
    <title>Prueba de Bootstrap 5</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0"
    crossorigin="anonymous">
</head>
<body>
    <!-- header -->
    <?php 
        include_once("structure/header.php");
    ?>


    <div class="container">
        <div class="row">
            <div class="col-xxl-4" style="background-color:#aaa">
                <h1>Columna 1</h1>
                <p>Esto es una prueba de bootstrap.</p>
                <p>col-xxl-4  colapsa menor a 1400px</p>
            </div>
            <div class="col-xxl-4" style="background-color:#bbb">
                <h1>Columna 2</h1>
                <p>Esto es una prueba de bootstrap.</p>
                <p>col-xxl-4  colapsa menor a 1400px</p>
            </div>
            <div class="col-xxl-4" style="background-color:#ccc">
                <h1>Columna 3</h1>
                <p>Esto es una prueba de bootstrap.</p>
                <p>col-xxl-4  colapsa menor a 1400px</p>
            </div>
        </div>

        <hr>    

        <div class="row">
            <div class="col-xl-4" style="background-color:#aaa">
                <h1>Columna 1</h1>
                <p>Esto es una prueba de bootstrap.</p>
                <p>col-xl-4  colapsa menor a 1200px</p>
            </div>
            <div class="col-xl-4" style="background-color:#bbb">
                <h1>Columna 2</h1>
                <p>Esto es una prueba de bootstrap.</p>
                <p>col-xl-4  colapsa menor a 1200px</p>
            </div>
            <div class="col-xl-4" style="background-color:#ccc">
                <h1>Columna 3</h1>
                <p>Esto es una prueba de bootstrap.</p>
                <p>col-xl-4  colapsa menor a 1200px</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4" style="background-color:#aaa">
                <h1>Columna 1</h1>
                <p>Esto es una prueba de bootstrap.</p>
                <p>col-lg-4  colapsa menor a 992px</p>
            </div>
            <div class="col-lg-4" style="background-color:#bbb">
                <h1>Columna 2</h1>
                <p>Esto es una prueba de bootstrap.</p>
                <p>col-lg-4  colapsa menor a 992px</p>
            </div>
            <div class="col-lg-4" style="background-color:#ccc">
                <h1>Columna 3</h1>
                <p>Esto es una prueba de bootstrap.</p>
                <p>col-lg-4  colapsa menor a 992px</p>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-4" style="background-color:#aaa">
                <h1>Columna 1</h1>
                <p>Esto es una prueba de bootstrap.</p>
                <p>col-md-4  colapsa menor a 768px</p>
            </div>
            <div class="col-md-4" style="background-color:#bbb">
                <h1>Columna 2</h1>
                <p>Esto es una prueba de bootstrap.</p>
                <p>col-md-4  colapsa menor a 768px</p>
            </div>
            <div class="col-md-4" style="background-color:#ccc">
                <h1>Columna 3</h1>
                <p>Esto es una prueba de bootstrap.</p>
                <p>col-md-4  colapsa menor a 768px</p>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-sm-4" style="background-color:#aaa">
                <h1>Columna 1</h1>
                <p>Esto es una prueba de bootstrap.</p>
                <p>col-sm-4  colapsa menor a 576</p>
            </div>
            <div class="col-sm-4" style="background-color:#bbb">
                <h1>Columna 2</h1>
                <p>Esto es una prueba de bootstrap.</p>
                <p>col-sm-4  colapsa menor a 576</p>
            </div>
            <div class="col-sm-4" style="background-color:#ccc">
                <h1>Columna 3</h1>
                <p>Esto es una prueba de bootstrap.</p>
                <p>col-sm-4  colapsa menor a 576</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-4" style="background-color:#aaa">
                <h1>Columna 1</h1>
                <p>Esto es una prueba de bootstrap.</p>
                <p>col-sm-4  no colapsa</p>
            </div>
            <div class="col-4" style="background-color:#bbb">
                <h1>Columna 2</h1>
                <p>Esto es una prueba de bootstrap.</p>
                <p>col-sm-4  no colapsa</p>
            </div>
            <div class="col-4" style="background-color:#ccc">
                <h1>Columna 3</h1>
                <p>Esto es una prueba de bootstrap.</p>
                <p>col-sm-4  no colapsa</p>
            </div>
        </div>

</body>
</html>
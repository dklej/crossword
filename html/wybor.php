<?php
session_start();
include('func.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link href="../css/wyborCSS.css" rel="stylesheet" type="text/css">
    <title>Krzyżówka online</title>
</head>

<body>
    <?php
    include('header-krzyzowka.php');
    ?>
    <div class="container-fluid">
        <div class="row header">
            <div class="col-md-12">
                <button class="headers" id="pierwszy">Jolka</button>
                <button class="headers" id="drugi">Klasyczna</button>
                <button class="headers" id="trzeci">Panoramiczna</button>
                <button class="headers">Losowa</button>
                <button class="headers">Krzyżówka dnia</button>
            </div>
        </div>
        <div class="row" id="jolka">
            <div class="col-md-12">
                <button class="headers" onclick="location.href='krzyzowkaJolka1.html'">Jolka 1 - łatwy</button>
                <button class="headers" onclick="location.href='krzyzowkaJolka1.html'">Jolka 2 - średni</button>
                <button class="headers" onclick="location.href='krzyzowkaJolka1.html'">Jolka 3 - trudny</button>
            </div>
        </div>
        <div class="row" id="klasyczna">
            <div class="col-md-12">
                <button class="headers" onclick="location.href='krzyzowkaJolka1.html'">Klasyczna 1 - łatwy</button>
                <button class="headers" onclick="location.href='krzyzowkaJolka1.html'">Klasyczna 2 - średni</button>
                <button class="headers" onclick="location.href='krzyzowkaJolka1.html'">Klasyczna 3 - trudny</button>
            </div>
        </div>
        <div class="row " id="panoramiczna">
            <div class="col-md-12">
                <button class="headers" onclick="location.href='krzyzowkaJolka1.html'">Panoramiczna 1 - łatwy</button>
                <button class="headers" onclick="location.href='krzyzowkaJolka1.html'">Panoramiczna 2 - średni</button>
                <button class="headers" onclick="location.href='krzyzowkaJolka1.html'">Panoramiczna 3 - trudny</button>
            </div>
        </div>
    </div>


    <script src="../js/wybor.js"></script>
</body>

</html>
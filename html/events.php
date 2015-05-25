<?php
	require("php/events.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>AstroTEC - Eventos</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/events.css">
</head>

<body>

<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand" href="index.php">AstroTEC</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Eventos</a></li>
                    <li><a href="#">Galería</a></li>
                    <li><a href="#">Datos Curiosos</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container">

<h1 class="tittle">Calendario</h1>
    <hr />
    <div class="agenda">
        <div class="table-responsive">
            <table class="table table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Evento</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    	getEventsInfo();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


</body>

</html>
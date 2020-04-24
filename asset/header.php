<?php
// session_start();

// if(!(isset($_SESSION['id_petugas']))){
//     header ("location: http://localhost/covid/login/index.php");
// }
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="http://localhost/covid/asset/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/covid/asset/fontawesome/css/all.min.css">

        <title>Karantina Covid-19</title>
    </head>
    <body>
        

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Karantina Covid-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="http://localhost/covid/index.php">Dashboard</a>
                <a class="nav-item nav-link" href="http://localhost/covid/odp/index.php">Data ODP</a>
                <a class="nav-item nav-link" href="http://localhost/covid/login/logout.php">Logout</a>
            </div>
        </div>
    </nav>
    </body>
</html>
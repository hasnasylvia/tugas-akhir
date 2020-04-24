<?php
include 'proses-login.php'
?>

<html>
    <head>
        <title>Karantina COVID-19</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>Login</h2>
            <form>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox">Remember me</label>
                </div>
                <button type="submit" class="btn btn-default" name="btnLogin">Login</button>
                <a href="about.php" class="btn btn-success">
                    <i class=" fa fa-angle-double-left"></i>
                    About
                </a>
            </form>
        </div>
    </body>
</html>
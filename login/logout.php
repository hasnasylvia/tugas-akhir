<?php
session_start();
session_destroy();
header ("location: http://localhost/covid/login/index.php");
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$data = "register_db";

$connect = mysqli_connect("$servername","$username","$password","$data")
            or die("Connect error" . mysqli_connect_error($connect));

?>
<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    $host="localhost";
    $user="root";
    $pass="";
    $name="ajr";

    $con=mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL : " . mysqli_connect_error();
    }
?>

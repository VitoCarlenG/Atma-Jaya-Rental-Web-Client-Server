<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    ob_start();
    session_start();
    session_destroy();
    header("location: ../page/loginPage.php");
?>
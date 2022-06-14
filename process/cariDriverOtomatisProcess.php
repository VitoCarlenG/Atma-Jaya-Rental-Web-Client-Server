<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php

    // untuk mengoneksikan dengan database dengan memanggil file db.php
    include('../db.php');

    $id_mobil = $_GET['id_mobil'];

    $query = mysqli_query($con, "SELECT id_driver FROM driver WHERE status_ketersediaan_driver=1 AND status_driver=1 AND sim_driver!='' AND bebas_napza_driver!='' AND kesehatan_jiwa_driver!='' AND kesehatan_jasmani_driver!='' AND skck_driver!='' ORDER BY RAND() LIMIT 1") or die(mysqli_error($con));

    if(mysqli_num_rows($query) == 0) {
        echo
            '<script>alert("Tidak Ada Driver Yang Tersedia!"); window.location = "../page/listDriverCustomerPage.php?id_mobil='.$id_mobil.'"</script>';
    }else {
        $data = mysqli_fetch_array($query);

        echo
            '<script>alert("Driver Ditemukan!"); window.location = "../page/listPromoCustomerPage.php?id_mobil='.$id_mobil.'&id_driver='.$data[0].'"</script>';

    }

?>
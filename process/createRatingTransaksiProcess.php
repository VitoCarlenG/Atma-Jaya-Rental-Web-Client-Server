<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['create'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        $nomor_transaksi = $_POST['nomor_transaksi'];
        $stats=$_POST['stats'];
        $rating_rental=$_POST['rating_rental'];
        $komentar_rental=$_POST['komentar_rental'];

        if($stats==1) {
            $id_driver=$_POST['id_driver'];
            $rating_driver=$_POST['rating_driver'];
            $komentar_driver=$_POST['komentar_driver'];

            $queryUpdate = mysqli_query($con, "UPDATE transaksi SET rating_driver='$rating_driver', komentar_driver='$komentar_driver', rating_rental='$rating_rental', komentar_rental='$komentar_rental' WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

            $queryUpdate2 = mysqli_query($con, "UPDATE driver SET rerata_rating_driver=(select AVG(rating_driver) from transaksi where id_driver='$id_driver') WHERE id_driver='$id_driver'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

            if($queryUpdate && $queryUpdate2){
                echo
                    '<script>alert("Berhasil Memberikan Rating & Penilaian"); window.location = "../page/listRiwayatTransaksiCustomerPage.php"</script>';
            }else{
                echo
                    '<script>alert("Gagal Memberikan Rating & Penilaian");</script>';
            }
        }else {
            $queryUpdate = mysqli_query($con, "UPDATE transaksi SET rating_rental='$rating_rental', komentar_rental='$komentar_rental' WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

            if($queryUpdate){
                echo
                    '<script>alert("Berhasil Memberikan Rating & Penilaian"); window.location = "../page/listRiwayatTransaksiCustomerPage.php"</script>';
            }else{
                echo
                    '<script>alert("Gagal Memberikan Rating & Penilaian");</script>';
            }
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>
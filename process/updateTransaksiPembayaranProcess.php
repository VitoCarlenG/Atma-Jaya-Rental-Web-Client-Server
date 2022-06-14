<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['ubah'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        $nomor_transaksi = $_POST['nomor_transaksi'];
        $metode_pembayaran = $_POST['metode_pembayaran'];
        $bukti_pembayaran = $_POST['bukti_pembayaran'];

        $queryUpdate = mysqli_query($con, "UPDATE transaksi SET metode_pembayaran='$metode_pembayaran', bukti_pembayaran='$bukti_pembayaran', status_transaksi='Menunggu Verifikasi Pembayaran Dari Customer Service' WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

        if($queryUpdate){
            echo
                '<script>alert("Silahkan Menunggu Verifikasi Pembayaran Dari Customer Service"); window.location = "../page/showTransaksiBerjalanPage.php"</script>';
        }else{
            echo
                '<script>alert("Checkout Failed");</script>';
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>
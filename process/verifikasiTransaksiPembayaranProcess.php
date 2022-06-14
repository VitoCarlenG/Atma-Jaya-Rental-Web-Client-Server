<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    if(isset($_GET['id'])){
        include ('../db.php');
        
        $nomor_transaksi = $_GET['id'];

        $query = mysqli_query($con, "SELECT * from transaksi where nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con));
        $data = mysqli_fetch_array($query);

        if($data[2]!=NULL) {
            $id_driver = $data[2];
            $id_mobil = $data[5];

            $queryUpdate = mysqli_query($con, "UPDATE transaksi SET status_transaksi='Selesai' WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

            $queryUpdate2 = mysqli_query($con, "UPDATE driver SET status_ketersediaan_driver=1 WHERE id_driver='$id_driver'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

            $queryUpdate3 = mysqli_query($con, "UPDATE aset_mobil SET status_ketersediaan_mobil=1 WHERE id_mobil='$id_mobil'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
        
            if($queryUpdate){
                echo
                '<script>
                alert("Transaksi Pembayaran Customer Berhasil Diverifikasi"); window.location = "../page/verifikasiTransaksiPembayaranPage.php"
                </script>';

            }else{
                echo
                '<script>
                alert("Transaksi Pembayaran Customer Gagal Diverifikasi"); window.location = "../page/verifikasiTransaksiPembayaranPage.php"
                </script>';
            }
        }else {
            $id_mobil = $data[5];

            $queryUpdate = mysqli_query($con, "UPDATE transaksi SET status_transaksi='Selesai' WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

            $queryUpdate3 = mysqli_query($con, "UPDATE aset_mobil SET status_ketersediaan_mobil=1 WHERE id_mobil='$id_mobil'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

            if($queryUpdate){
                echo
                '<script>
                alert("Transaksi Pembayaran Customer Berhasil Diverifikasi"); window.location = "../page/verifikasiTransaksiPembayaranPage.php"
                </script>';

            }else{
                echo
                '<script>
                alert("Transaksi Pembayaran Customer Gagal Diverifikasi"); window.location = "../page/verifikasiTransaksiPembayaranPage.php"
                </script>';
            }
        }

    }else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>
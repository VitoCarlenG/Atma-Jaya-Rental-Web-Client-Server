<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    if(isset($_GET['id']) && isset($_GET['stats'])){
        include ('../db.php');
        session_start();

        $nomor_transaksi = $_GET['id'];
        $stats = $_GET['stats'];
        $user = $_SESSION['user'];
        $id_pegawai = $user[0];

        $query = mysqli_query($con, "SELECT * from transaksi where nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con));
        $data = mysqli_fetch_array($query);

        if($data[2]!=NULL) {
            $id_driver = $data[2];
        }

        $id_mobil = $data[5];
        
        if($stats==0) {
            $queryUpdate = mysqli_query($con, "UPDATE transaksi SET id_pegawai='$id_pegawai', status_transaksi='Ditolak' WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
        
            if($queryUpdate){
                echo
                '<script>
                alert("Transaksi Penyewaan Customer Berhasil Ditolak"); window.location = "../page/verifikasiTransaksiPenyewaanPage.php"
                </script>';

            }else{
                echo
                '<script>
                alert("Transaksi Penyewaan Customer Gagal Ditolak"); window.location = "../page/verifikasiTransaksiPenyewaanPage.php"
                </script>';
            }
        }else {

            if($data[2]!=NULL) {
                $query2 = mysqli_query($con, "UPDATE driver SET status_ketersediaan_driver=0 WHERE id_driver='$id_driver'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
            }

            $queryUpdate = mysqli_query($con, "UPDATE aset_mobil SET status_ketersediaan_mobil=0 WHERE id_mobil='$id_mobil'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”   

            $queryUpdate2 = mysqli_query($con, "UPDATE transaksi SET id_pegawai='$id_pegawai', status_transaksi='Penyewaan Berjalan' WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
        
            if($queryUpdate && $queryUpdate2){
                echo
                '<script>
                alert("Transaksi Penyewaan Customer Berhasil Diverifikasi"); window.location = "../page/verifikasiTransaksiPenyewaanPage.php"
                </script>';

            }else{
                echo
                '<script>
                alert("Transaksi Penyewaan Customer Gagal Diverifikasi"); window.location = "../page/verifikasiTransaksiPenyewaanPage.php"
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
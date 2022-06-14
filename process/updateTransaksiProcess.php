<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    //if(isset($_POST['create'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        session_start();

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
      
        $id_mobil = $_GET['id_mobil'];
        $id_driver = $_GET['id_driver'];
        $id_promo = $_GET['id_promo'];
        $nomor_transaksi = $_GET['id'];
        $tanggal_waktu_mulai_sewa = $_SESSION['tanggal_waktu_mulai_sewa'];
        $tanggal_waktu_selesai_sewa = $_SESSION['tanggal_waktu_selesai_sewa'];
        
        if($id_driver==NULL) {
            if($id_promo==NULL) {
                $query2 = mysqli_query($con, "UPDATE transaksi SET id_mobil='$id_mobil', id_driver=NULL, id_promo=NULL, jenis_transaksi=0, tanggal_waktu_mulai_sewa='$tanggal_waktu_mulai_sewa', tanggal_waktu_selesai_sewa='$tanggal_waktu_selesai_sewa' WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                if($query2){
                    echo
                        '<script>alert("Update Transaksi Penyewaan Success"); window.location = "../page/showTransaksiBerjalanPage.php"</script>';
                }else{
                    echo
                        '<script>alert("Update Transaksi Penyewaan Failed");</script>';
                }
            }else {
                $query2 = mysqli_query($con, "UPDATE transaksi SET id_mobil='$id_mobil', id_driver=NULL, id_promo='$id_promo', jenis_transaksi=0, tanggal_waktu_mulai_sewa='$tanggal_waktu_mulai_sewa', tanggal_waktu_selesai_sewa='$tanggal_waktu_selesai_sewa' WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                if($query2){
                    echo
                        '<script>alert("Update Transaksi Penyewaan Success"); window.location = "../page/showTransaksiBerjalanPage.php"</script>';
                }else{
                    echo
                        '<script>alert("Update Transaksi Penyewaan Failed");</script>';
                }
            }
            
        }else {
            if($id_promo==NULL) {
                $query2 = mysqli_query($con, "UPDATE transaksi SET id_mobil='$id_mobil', id_driver='$id_driver', id_promo=NULL, jenis_transaksi=1, tanggal_waktu_mulai_sewa='$tanggal_waktu_mulai_sewa', tanggal_waktu_selesai_sewa='$tanggal_waktu_selesai_sewa' WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                if($query2){
                    echo
                        '<script>alert("Update Transaksi Penyewaan Success"); window.location = "../page/showTransaksiBerjalanPage.php"</script>';
                }else{
                    echo
                        '<script>alert("Update Transaksi Penyewaan Failed");</script>';
                }
            }else {
                $query2 = mysqli_query($con, "UPDATE transaksi SET id_mobil='$id_mobil', id_driver='$id_driver', id_promo='$id_promo', jenis_transaksi=1, tanggal_waktu_mulai_sewa='$tanggal_waktu_mulai_sewa', tanggal_waktu_selesai_sewa='$tanggal_waktu_selesai_sewa' WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                if($query2){
                    echo
                        '<script>alert("Update Transaksi Penyewaan Success"); window.location = "../page/showTransaksiBerjalanPage.php"</script>';
                }else{
                    echo
                        '<script>alert("Update Transaksi Penyewaan Failed");</script>';
                }
            }
            
        }

?>
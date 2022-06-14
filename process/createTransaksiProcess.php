<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        session_start();

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $user=$_SESSION['user'];
        $id_customer=$user[0];
        $id_mobil = $_GET['id_mobil'];
        $id_driver = $_GET['id_driver'];
        $id_promo = $_GET['id_promo'];
        $tanggal_waktu_mulai_sewa = $_SESSION['tanggal_waktu_mulai_sewa'];
        $tanggal_waktu_selesai_sewa = $_SESSION['tanggal_waktu_selesai_sewa'];

        $query = mysqli_query($con, "SELECT * from transaksi where id_customer='$id_customer' AND status_transaksi!='Selesai' AND status_transaksi!='Ditolak'") or die(mysqli_error($con));
        
        // Melakukan insert ke databse dengan query dibawah ini
        if(mysqli_num_rows($query) != 0) {
            echo '<script>alert("Tidak Dapat Membuat Transaksi Karena Terdapat Transaksi Yang Sedang Berjalan!"); window.location = "../page/showTransaksiBerjalanPage.php"</script>';
        }else {
            if($id_driver==NULL) {
                if($id_promo==NULL) {
                    $query2 = mysqli_query($con, "INSERT INTO transaksi(format_nomor_transaksi, id_customer, id_mobil, id_pegawai, tanggal_transaksi, jenis_transaksi, tanggal_waktu_mulai_sewa, tanggal_waktu_selesai_sewa) VALUES (CONCAT('TRN', CURRENT_DATE, '-', '00', '-'), '$id_customer', '$id_mobil', 0, CURRENT_TIMESTAMP, 0, '$tanggal_waktu_mulai_sewa', '$tanggal_waktu_selesai_sewa')") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                    if($query2){
                        echo
                            '<script>alert("Create Transaksi Success, Silahkan Menunggu Verifikasi Customer Service"); window.location = "../page/showTransaksiBerjalanPage.php"</script>';
                    }else{
                        echo
                            '<script>alert("Create Transaksi Failed");</script>';
                    }
                }else {
                    $query2 = mysqli_query($con, "INSERT INTO transaksi(format_nomor_transaksi, id_customer, id_mobil, id_promo, id_pegawai, tanggal_transaksi, jenis_transaksi, tanggal_waktu_mulai_sewa, tanggal_waktu_selesai_sewa) VALUES (CONCAT('TRN', CURRENT_DATE, '-', '00', '-'), '$id_customer', '$id_mobil', '$id_promo', 0, CURRENT_TIMESTAMP, 0, '$tanggal_waktu_mulai_sewa', '$tanggal_waktu_selesai_sewa')") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                    if($query2){
                        echo
                            '<script>alert("Create Transaksi Success, Silahkan Menunggu Verifikasi Customer Service"); window.location = "../page/showTransaksiBerjalanPage.php"</script>';
                    }else{
                        echo
                            '<script>alert("Create Transaksi Failed");</script>';
                    }
                }
                
            }else {
                if($id_promo==NULL) {
                    $query2 = mysqli_query($con, "INSERT INTO transaksi(format_nomor_transaksi, id_customer, id_mobil, id_driver, id_pegawai, tanggal_transaksi, jenis_transaksi, tanggal_waktu_mulai_sewa, tanggal_waktu_selesai_sewa) VALUES (CONCAT('TRN', CURRENT_DATE, '-', '01', '-'), '$id_customer', '$id_mobil', '$id_driver', 0, CURRENT_TIMESTAMP, 1, '$tanggal_waktu_mulai_sewa', '$tanggal_waktu_selesai_sewa')") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                    if($query2){
                        echo
                            '<script>alert("Create Transaksi Success, Silahkan Menunggu Verifikasi Customer Service"); window.location = "../page/showTransaksiBerjalanPage.php"</script>';
                    }else{
                        echo
                            '<script>alert("Create Transaksi Failed");</script>';
                    }
                }else {
                    $query2 = mysqli_query($con, "INSERT INTO transaksi(format_nomor_transaksi, id_customer, id_mobil, id_driver, id_promo, id_pegawai, tanggal_transaksi, jenis_transaksi, tanggal_waktu_mulai_sewa, tanggal_waktu_selesai_sewa) VALUES (CONCAT('TRN', CURRENT_DATE, '-', '01', '-'), '$id_customer', '$id_mobil', '$id_driver', '$id_promo', 0, CURRENT_TIMESTAMP, 1, '$tanggal_waktu_mulai_sewa', '$tanggal_waktu_selesai_sewa')") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                    if($query2){
                        echo
                            '<script>alert("Create Transaksi Success, Silahkan Menunggu Verifikasi Customer Service"); window.location = "../page/showTransaksiBerjalanPage.php"</script>';
                    }else{
                        echo
                            '<script>alert("Create Transaksi Failed");</script>';
                    }
                }
                
            }
        }   

?>
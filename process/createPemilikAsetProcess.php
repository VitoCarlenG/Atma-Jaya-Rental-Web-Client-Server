<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['create'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $nama_pemilik = $_POST['nama_pemilik'];
        $nomor_ktp_pemilik = $_POST['nomor_ktp_pemilik'];
        $alamat_pemilik = $_POST['alamat_pemilik'];
        $nomor_telepon_pemilik = $_POST['nomor_telepon_pemilik'];

        $query = mysqli_query($con, "SELECT * FROM pemilik_kendaraan WHERE nomor_ktp_pemilik = '$nomor_ktp_pemilik'") or die(mysqli_error($con));

        if(mysqli_num_rows($query) != 0) {
            echo
                '<script>alert("Nomor KTP Telah Terdaftar Di Sistem!"); window.location = "../page/createPemilikAsetPage.php"</script>';
        }else {
            // Melakukan insert ke databse dengan query dibawah ini
            $query2 = mysqli_query($con, "INSERT INTO pemilik_kendaraan(nama_pemilik, nomor_ktp_pemilik, alamat_pemilik, nomor_telepon_pemilik) VALUES ('$nama_pemilik', '$nomor_ktp_pemilik', '$alamat_pemilik', '$nomor_telepon_pemilik')") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

            if($query2){
                echo
                    '<script>alert("Create Pemilik Aset Success"); window.location = "../page/listPemilikAsetPage.php"</script>';
            }else{
                echo
                    '<script>alert("Create Pemilik Aset Failed");</script>';
            }
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>
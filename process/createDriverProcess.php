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
        $nama_driver = $_POST['nama_driver'];
        $alamat_driver = $_POST['alamat_driver'];
        $tanggal_lahir_driver = $_POST['tanggal_lahir_driver'];
        $jenis_kelamin_driver = $_POST['jenis_kelamin_driver'];
        $email_driver = $_POST['email_driver'];
        $nomor_telepon_driver = $_POST['nomor_telepon_driver'];
        $password_driver = password_hash($_POST['tanggal_lahir_driver'], PASSWORD_DEFAULT);
        $bahasa_driver = $_POST['bahasa_driver'];
        $harga_sewa_driver = $_POST['harga_sewa_driver'];
        $foto_driver = $_POST['foto_driver'];

        $query = mysqli_query($con, "SELECT * FROM customer WHERE email_customer = '$email_driver'") or die(mysqli_error($con));
        $query2 = mysqli_query($con, "SELECT * FROM pegawai WHERE email_pegawai = '$email_driver'") or die(mysqli_error($con));
        $query3 = mysqli_query($con, "SELECT * FROM driver WHERE email_driver = '$email_driver'") or die(mysqli_error($con));

        if(mysqli_num_rows($query) != 0 || mysqli_num_rows($query2) != 0 || mysqli_num_rows($query3) != 0) {
            echo
                '<script>alert("Email telah digunakan!"); window.location = "../page/createDriverPage.php"</script>';
        }else {
            // Melakukan insert ke databse dengan query dibawah ini
            $query4 = mysqli_query($con, "INSERT INTO users(`name`, `email`, `password`, `created_at`) VALUES ('$nama_driver', '$email_driver', '$password_driver', now())") or die(mysqli_error($con));

            $query5 = mysqli_query($con, "select id from users where email='$email_driver'") or die(mysqli_error($con));
            $data = mysqli_fetch_array($query5);
            $id = $data[0];

            $query6 = mysqli_query($con, "INSERT INTO driver(format_id_driver, nama_driver, alamat_driver, tanggal_lahir_driver, jenis_kelamin_driver, email_driver, nomor_telepon_driver, password_driver, bahasa_driver, foto_driver, status_ketersediaan_driver, harga_sewa_driver, id) VALUES (CONCAT('DRV-', CURRENT_DATE, '-'), '$nama_driver', '$alamat_driver', '$tanggal_lahir_driver', '$jenis_kelamin_driver', '$email_driver', '$nomor_telepon_driver', '$password_driver', '$bahasa_driver', '$foto_driver', 1, '$harga_sewa_driver', '$id')") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

            if($query4 && $query6){
                echo
                    '<script>alert("Create Driver Success"); window.location = "../page/listDriverAdministrasiPage.php"</script>';
            }else{
                echo
                    '<script>alert("Create Driver Failed");</script>';
            }
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>
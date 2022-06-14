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
        $nama_pegawai = $_POST['nama_pegawai'];
        $id_jabatan = $_POST['id_jabatan'];
        $tanggal_lahir_pegawai = $_POST['tanggal_lahir_pegawai'];
        $jenis_kelamin_pegawai = $_POST['jenis_kelamin_pegawai'];
        $alamat_pegawai = $_POST['alamat_pegawai'];
        $nomor_telepon_pegawai = $_POST['nomor_telepon_pegawai'];
        $password_pegawai = password_hash($_POST['tanggal_lahir_pegawai'], PASSWORD_DEFAULT);
        $email_pegawai = $_POST['email_pegawai'];
        $foto_pegawai = $_POST['foto_pegawai'];

        $query = mysqli_query($con, "SELECT * FROM customer WHERE email_customer = '$email_pegawai'") or die(mysqli_error($con));
        $query2 = mysqli_query($con, "SELECT * FROM pegawai WHERE email_pegawai = '$email_pegawai'") or die(mysqli_error($con));
        $query3 = mysqli_query($con, "SELECT * FROM driver WHERE email_driver = '$email_pegawai'") or die(mysqli_error($con));

        if(mysqli_num_rows($query) != 0 || mysqli_num_rows($query2) != 0 || mysqli_num_rows($query3) != 0) {
            echo
                '<script>alert("Email telah digunakan!"); window.location = "../page/createPegawaiPage.php"</script>';
        }else {
            // Melakukan insert ke databse dengan query dibawah ini
            $query4 = mysqli_query($con, "INSERT INTO users(`name`, `email`, `password`, `created_at`) VALUES ('$nama_pegawai', '$email_pegawai', '$password_pegawai', now())") or die(mysqli_error($con));

            $query5 = mysqli_query($con, "select id from users where email='$email_pegawai'") or die(mysqli_error($con));
            $data = mysqli_fetch_array($query5);
            $id = $data[0];

            $query6 = mysqli_query($con, "INSERT INTO pegawai(nama_pegawai, id_jabatan, tanggal_lahir_pegawai, jenis_kelamin_pegawai, alamat_pegawai, nomor_telepon_pegawai, password_pegawai, email_pegawai, foto_pegawai, id) VALUES ('$nama_pegawai', '$id_jabatan', '$tanggal_lahir_pegawai', '$jenis_kelamin_pegawai', '$alamat_pegawai', '$nomor_telepon_pegawai', '$password_pegawai', '$email_pegawai', '$foto_pegawai', '$id')") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

            if($query4 && $query6){
                echo
                    '<script>alert("Create Pegawai Success"); window.location = "../page/listPegawaiPage.php"</script>';
            }else{
                echo
                    '<script>alert("Create Pegawai Failed");</script>';
            }
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>
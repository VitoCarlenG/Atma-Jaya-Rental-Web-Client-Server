<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    if(isset($_POST['ubah'])){

        include('../db.php');

        $id_driver = $_POST['id_driver'];

        $temp = mysqli_query($con, "SELECT * FROM driver WHERE id_driver = '$id_driver'") or die(mysqli_error($con));
        $user = mysqli_fetch_array($temp);

        $temp2=mysqli_query($con, "SELECT id FROM driver WHERE id_driver = '$id_driver'") or die(mysqli_error($con));
        $user2 = mysqli_fetch_array($temp2);
        $id = $user2[0];
        
        $nama_driver = $_POST['nama_driver'];
        $alamat_driver = $_POST['alamat_driver'];
        $tanggal_lahir_driver = $_POST['tanggal_lahir_driver'];
        $jenis_kelamin_driver = $_POST['jenis_kelamin_driver'];
        $email_driver = $_POST['email_driver'];
        $nomor_telepon_driver = $_POST['nomor_telepon_driver'];
        $password_driver = password_hash($_POST['password_driver'], PASSWORD_DEFAULT);
        $bahasa_driver = $_POST['bahasa_driver'];
        $harga_sewa_driver = $_POST['harga_sewa_driver'];
        $status_ketersediaan_driver = $_POST['status_ketersediaan_driver'];
        $foto_driver = $_POST['foto_driver'];
        $sim_driver = $_POST['sim_driver'];
        $bebas_napza_driver = $_POST['bebas_napza_driver'];
        $kesehatan_jiwa_driver = $_POST['kesehatan_jiwa_driver'];
        $kesehatan_jasmani_driver = $_POST['kesehatan_jasmani_driver'];
        $skck_driver = $_POST['skck_driver'];

        $query2 = mysqli_query($con, "SELECT * FROM customer WHERE email_customer = '$email_driver'") or die(mysqli_error($con));
        $query3 = mysqli_query($con, "SELECT * FROM pegawai WHERE email_pegawai = '$email_driver'") or die(mysqli_error($con));
        $query4 = mysqli_query($con, "SELECT * FROM driver WHERE email_driver = '$email_driver'") or die(mysqli_error($con));

        if($email_driver == $user[6]) {
            $query = mysqli_query($con, "UPDATE driver SET nama_driver='$nama_driver', alamat_driver='$alamat_driver', tanggal_lahir_driver='$tanggal_lahir_driver', jenis_kelamin_driver='$jenis_kelamin_driver', email_driver='$email_driver', nomor_telepon_driver='$nomor_telepon_driver', foto_driver='$foto_driver', bahasa_driver='$bahasa_driver', password_driver='$password_driver', harga_sewa_driver='$harga_sewa_driver', status_ketersediaan_driver='$status_ketersediaan_driver', sim_driver='$sim_driver', bebas_napza_driver='$bebas_napza_driver', kesehatan_jiwa_driver='$kesehatan_jiwa_driver', kesehatan_jasmani_driver='$kesehatan_jasmani_driver', skck_driver='$skck_driver' WHERE id_driver='$id_driver'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

            $queryMobile = mysqli_query($con, "UPDATE users SET `name`='$nama_driver', `email`='$email_driver', `password`='$password_driver', `updated_at`=now() WHERE id='$id'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

            if($query && $queryMobile){
                echo
                    '<script>alert("Edit Driver Berhasil"); window.location = "../page/listDriverAdministrasiPage.php"</script>';
            }else{
                echo
                    '<script>alert("Edit Driver Gagal");</script>';
            }

        }else{
            if(mysqli_num_rows($query2) != 0 || mysqli_num_rows($query3) != 0 || mysqli_num_rows($query4) != 0) {
                echo
                    '<script>alert("Email telah digunakan!"); window.location = "../page/updateDriverPage.php?id='.$id_driver.'"</script>';
            }else {
                $query = mysqli_query($con, "UPDATE driver SET nama_driver='$nama_driver', alamat_driver='$alamat_driver', tanggal_lahir_driver='$tanggal_lahir_driver', jenis_kelamin_driver='$jenis_kelamin_driver', email_driver='$email_driver', nomor_telepon_driver='$nomor_telepon_driver', foto_driver='$foto_driver', bahasa_driver='$bahasa_driver', password_driver='$password_driver', harga_sewa_driver='$harga_sewa_driver', status_ketersediaan_driver='$status_ketersediaan_driver', sim_driver='$sim_driver', bebas_napza_driver='$bebas_napza_driver', kesehatan_jiwa_driver='$kesehatan_jiwa_driver', kesehatan_jasmani_driver='$kesehatan_jasmani_driver', skck_driver='$skck_driver' WHERE id_driver='$id_driver'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                $queryMobile = mysqli_query($con, "UPDATE users SET `name`='$nama_driver', `email`='$email_driver', `password`='$password_driver', `updated_at`=now() WHERE id='$id'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                if($query && $queryMobile){
                    echo
                        '<script>alert("Edit Driver Berhasil"); window.location = "../page/listDriverAdministrasiPage.php"</script>';
                }else{
                    echo
                        '<script>alert("Edit Driver Gagal");</script>';
                }
            }
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>
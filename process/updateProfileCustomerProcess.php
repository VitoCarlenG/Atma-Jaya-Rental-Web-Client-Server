<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    if(isset($_POST['ubah'])){

        include('../db.php');

        $id_customer = $_POST['id_customer'];

        $temp=mysqli_query($con, "SELECT * FROM customer WHERE id_customer = '$id_customer'") or die(mysqli_error($con));
        $user = mysqli_fetch_array($temp);

        $temp2=mysqli_query($con, "SELECT id FROM customer WHERE id_customer = '$id_customer'") or die(mysqli_error($con));
        $user2 = mysqli_fetch_array($temp2);
        $id = $user2[0];
        
        $nama_customer = $_POST['nama_customer'];
        $alamat_customer = $_POST['alamat_customer'];
        $tanggal_lahir_customer = $_POST['tanggal_lahir_customer'];
        $jenis_kelamin_customer = $_POST['jenis_kelamin_customer'];
        $email_customer = $_POST['email_customer'];
        $nomor_telepon_customer = $_POST['nomor_telepon_customer'];
        $password_customer = password_hash($_POST['password_customer'], PASSWORD_DEFAULT);
        $tanda_pengenal_customer = $_POST['tanda_pengenal_customer'];
        $sim_customer = $_POST['sim_customer'];

        $query2 = mysqli_query($con, "SELECT * FROM customer WHERE email_customer = '$email_customer'") or die(mysqli_error($con));
        $query3 = mysqli_query($con, "SELECT * FROM pegawai WHERE email_pegawai = '$email_customer'") or die(mysqli_error($con));
        $query4 = mysqli_query($con, "SELECT * FROM driver WHERE email_driver = '$email_customer'") or die(mysqli_error($con));

        if($email_customer == $user[6]) {
            if($user[2] != $nama_customer || $user[3] != $alamat_customer || $user[4] != $tanggal_lahir_customer || $user[5] != $jenis_kelamin_customer || $user[6] != $email_customer || $user[7] != $nomor_telepon_customer || $user[8] != $tanda_pengenal_customer || $user[9] != $sim_customer) {
                $query = mysqli_query($con, "UPDATE customer SET nama_customer='$nama_customer', alamat_customer='$alamat_customer', tanggal_lahir_customer='$tanggal_lahir_customer', jenis_kelamin_customer='$jenis_kelamin_customer', email_customer='$email_customer', nomor_telepon_customer='$nomor_telepon_customer', tanda_pengenal_customer='$tanda_pengenal_customer', sim_customer='$sim_customer', password_customer='$password_customer', verifikasi_customer=0 WHERE id_customer='$id_customer'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                $queryMobile = mysqli_query($con, "UPDATE users SET `name`='$nama_customer', `email`='$email_customer', `password`='$password_customer', `updated_at`=now() WHERE id='$id'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                if($query && $queryMobile){
                    echo
                        '<script>alert("Edit Data Berhasil, Silahkan Login Kembali"); window.location = "./logoutProcess.php"</script>';
                }else{
                    echo
                        '<script>alert("Edit Data Gagal");</script>';
                }
            }else {
                $query = mysqli_query($con, "UPDATE customer SET password_customer='$password_customer' WHERE id_customer='$id_customer'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                $queryMobile = mysqli_query($con, "UPDATE users SET `password`='$password_customer', `updated_at`=now() WHERE id='$id'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                if($query && $queryMobile){
                    echo
                        '<script>alert("Edit Password Berhasil, Silahkan Login Kembali"); window.location = "./logoutProcess.php"</script>';
                }else{
                    echo
                        '<script>alert("Edit Password Gagal");</script>';
                }
            }

        }else{
            if(mysqli_num_rows($query2) != 0 || mysqli_num_rows($query3) != 0 || mysqli_num_rows($query4) != 0) {
                echo
                    '<script>alert("Email telah digunakan!"); window.location = "../page/updateProfileCustomerPage.php"</script>';
            }
            else {
                $query = mysqli_query($con, "UPDATE customer SET nama_customer='$nama_customer', alamat_customer='$alamat_customer', tanggal_lahir_customer='$tanggal_lahir_customer', jenis_kelamin_customer='$jenis_kelamin_customer', email_customer='$email_customer', nomor_telepon_customer='$nomor_telepon_customer', tanda_pengenal_customer='$tanda_pengenal_customer', sim_customer='$sim_customer', password_customer='$password_customer', verifikasi_customer=0 WHERE id_customer='$id_customer'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                $queryMobile = mysqli_query($con, "UPDATE users SET `name`='$nama_customer', `email`='$email_customer', `password`='$password_customer', `updated_at`=now() WHERE id='$id'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                if($query && $queryMobile){
                    echo
                        '<script>alert("Edit Data Berhasil, Silahkan Login Kembali"); window.location = "./logoutProcess.php"</script>';
                }else{
                    echo
                        '<script>alert("Edit Data Gagal");</script>';
                }
            }
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>
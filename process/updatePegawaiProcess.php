<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    if(isset($_POST['ubah'])){

        include('../db.php');

        $id_pegawai = $_POST['id_pegawai'];
        $id_login = $_POST['id_login'];

        $temp = mysqli_query($con, "SELECT * FROM pegawai WHERE id_pegawai = '$id_pegawai'") or die(mysqli_error($con));
        $user = mysqli_fetch_array($temp);

        $temp2 = mysqli_query($con, "SELECT * FROM pegawai WHERE id_pegawai = '$id_login'") or die(mysqli_error($con));
        $user2 = mysqli_fetch_array($temp2);

        $temp3 = mysqli_query($con, "SELECT * FROM detail_jadwal WHERE id_pegawai = '$id_pegawai'") or die(mysqli_error($con));

        $temp4 = mysqli_query($con, "SELECT * FROM transaksi WHERE id_pegawai = '$id_pegawai'") or die(mysqli_error($con));

        $temp5=mysqli_query($con, "SELECT id FROM pegawai WHERE id_pegawai = '$id_pegawai'") or die(mysqli_error($con));
        $user5 = mysqli_fetch_array($temp5);
        $id = $user5[0];
        
        $nama_pegawai = $_POST['nama_pegawai'];
        $alamat_pegawai = $_POST['alamat_pegawai'];
        $tanggal_lahir_pegawai = $_POST['tanggal_lahir_pegawai'];
        $jenis_kelamin_pegawai = $_POST['jenis_kelamin_pegawai'];
        $email_pegawai = $_POST['email_pegawai'];
        $nomor_telepon_pegawai = $_POST['nomor_telepon_pegawai'];
        $password_pegawai = password_hash($_POST['password_pegawai'], PASSWORD_DEFAULT);
        $foto_pegawai = $_POST['foto_pegawai'];
        $id_jabatan = $_POST['id_jabatan'];

        $query2 = mysqli_query($con, "SELECT * FROM customer WHERE email_customer = '$email_pegawai'") or die(mysqli_error($con));
        $query3 = mysqli_query($con, "SELECT * FROM pegawai WHERE email_pegawai = '$email_pegawai'") or die(mysqli_error($con));
        $query4 = mysqli_query($con, "SELECT * FROM driver WHERE email_driver = '$email_pegawai'") or die(mysqli_error($con));

        if(mysqli_num_rows($temp3) != 0 && $id_jabatan != $user[1]) {
            echo
                '<script>
                alert("Tidak Dapat Mengubah Jabatan Karena Pegawai Masih Mempunyai Jadwal!"); window.location = "../page/updatePegawaiPage.php?id='.$id_pegawai.'&id_login='.$id_login.'"
                </script>';
        }else if(mysqli_num_rows($temp4) != 0) {
            echo
                '<script>
                alert("Tidak Dapat Mengubah Jabatan Karena Pegawai Sebagai Customer Service Terhubung Ke Transaksi!"); window.location = "../page/updatePegawaiPage.php?id='.$id_pegawai.'&id_login='.$id_login.'"
                </script>';
        }else if($email_pegawai == $user[8]) {
            if($id_pegawai == $id_login) {
                $query = mysqli_query($con, "UPDATE pegawai SET nama_pegawai='$nama_pegawai', alamat_pegawai='$alamat_pegawai', tanggal_lahir_pegawai='$tanggal_lahir_pegawai', jenis_kelamin_pegawai='$jenis_kelamin_pegawai', email_pegawai='$email_pegawai', nomor_telepon_pegawai='$nomor_telepon_pegawai', foto_pegawai='$foto_pegawai', id_jabatan='$id_jabatan', password_pegawai='$password_pegawai' WHERE id_pegawai='$id_login'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                $queryMobile = mysqli_query($con, "UPDATE users SET `name`='$nama_pegawai', `email`='$email_pegawai', `password`='$password_pegawai', `updated_at`=now() WHERE id='$id'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                if($query && $queryMobile){
                    echo
                        '<script>alert("Edit Pegawai Berhasil, Silahkan Login Kembali"); window.location = "./logoutProcess.php"</script>';
                }else{
                    echo
                        '<script>alert("Edit Pegawai Gagal");</script>';
                }
            }else {
                $query = mysqli_query($con, "UPDATE pegawai SET nama_pegawai='$nama_pegawai', alamat_pegawai='$alamat_pegawai', tanggal_lahir_pegawai='$tanggal_lahir_pegawai', jenis_kelamin_pegawai='$jenis_kelamin_pegawai', email_pegawai='$email_pegawai', nomor_telepon_pegawai='$nomor_telepon_pegawai', foto_pegawai='$foto_pegawai', id_jabatan='$id_jabatan', password_pegawai='$password_pegawai' WHERE id_pegawai='$id_pegawai'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                $queryMobile = mysqli_query($con, "UPDATE users SET `name`='$nama_pegawai', `email`='$email_pegawai', `password`='$password_pegawai', `updated_at`=now() WHERE id='$id'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                if($query && $queryMobile){
                    echo
                        '<script>alert("Edit Pegawai Berhasil"); window.location = "../page/listPegawaiPage.php"</script>';
                }else{
                    echo
                        '<script>alert("Edit Pegawai Gagal");</script>';
                }
            }

        }else{
            if(mysqli_num_rows($query2) != 0 || mysqli_num_rows($query3) != 0 || mysqli_num_rows($query4) != 0) {
                echo
                    '<script>alert("Email telah digunakan!"); window.location = "../page/updatePegawaiPage.php?id='.$id_pegawai.'&id_login='.$id_login.'"</script>';
            }
            else if($id_pegawai == $id_login) {
                $query = mysqli_query($con, "UPDATE pegawai SET nama_pegawai='$nama_pegawai', alamat_pegawai='$alamat_pegawai', tanggal_lahir_pegawai='$tanggal_lahir_pegawai', jenis_kelamin_pegawai='$jenis_kelamin_pegawai', email_pegawai='$email_pegawai', nomor_telepon_pegawai='$nomor_telepon_pegawai', foto_pegawai='$foto_pegawai', id_jabatan='$id_jabatan', password_pegawai='$password_pegawai' WHERE id_pegawai='$id_login'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                $queryMobile = mysqli_query($con, "UPDATE users SET `name`='$nama_pegawai', `email`='$email_pegawai', `password`='$password_pegawai', `updated_at`=now() WHERE id='$id'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                if($query && $queryMobile){
                    echo
                        '<script>alert("Edit Pegawai Berhasil, Silahkan Login Kembali"); window.location = "./logoutProcess.php"</script>';
                }else{
                    echo
                        '<script>alert("Edit Pegawai Gagal");</script>';
                }
            }else {
                $query = mysqli_query($con, "UPDATE pegawai SET nama_pegawai='$nama_pegawai', alamat_pegawai='$alamat_pegawai', tanggal_lahir_pegawai='$tanggal_lahir_pegawai', jenis_kelamin_pegawai='$jenis_kelamin_pegawai', email_pegawai='$email_pegawai', nomor_telepon_pegawai='$nomor_telepon_pegawai', foto_pegawai='$foto_pegawai', id_jabatan='$id_jabatan', password_pegawai='$password_pegawai' WHERE id_pegawai='$id_pegawai'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                $queryMobile = mysqli_query($con, "UPDATE users SET `name`='$nama_pegawai', `email`='$email_pegawai', `password`='$password_pegawai', `updated_at`=now() WHERE id='$id'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                if($query && $queryMobile){
                    echo
                        '<script>alert("Edit Pegawai Berhasil"); window.location = "../page/listPegawaiPage.php"</script>';
                }else{
                    echo
                        '<script>alert("Edit Pegawai Gagal");</script>';
                }
            }
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>
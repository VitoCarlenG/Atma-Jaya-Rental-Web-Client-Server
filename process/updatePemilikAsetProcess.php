<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['ubah'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $id_pemilik = $_POST['id_pemilik'];
        $nama_pemilik = $_POST['nama_pemilik'];
        $nomor_ktp_pemilik = $_POST['nomor_ktp_pemilik'];
        $alamat_pemilik = $_POST['alamat_pemilik'];
        $nomor_telepon_pemilik = $_POST['nomor_telepon_pemilik'];

        $query = mysqli_query($con, "SELECT * FROM pemilik_kendaraan WHERE id_pemilik = '$id_pemilik'") or die(mysqli_error($con));
        $data = mysqli_fetch_array($query);

        $query2 = mysqli_query($con, "SELECT * FROM pemilik_kendaraan WHERE nomor_ktp_pemilik = '$nomor_ktp_pemilik'") or die(mysqli_error($con));

        if($nomor_ktp_pemilik == $data[1]) {
            $query3 = mysqli_query($con, "UPDATE pemilik_kendaraan SET nama_pemilik='$nama_pemilik', nomor_ktp_pemilik='$nomor_ktp_pemilik', alamat_pemilik='$alamat_pemilik', nomor_telepon_pemilik='$nomor_telepon_pemilik' WHERE id_pemilik='$id_pemilik'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

            if($query3){
                echo
                    '<script>alert("Edit Pemilik Aset Berhasil"); window.location = "../page/listPemilikAsetPage.php"</script>';
            }else{
                echo
                    '<script>alert("Edit Pemilik Aset Gagal");</script>';
            }
        }else {
            if(mysqli_num_rows($query2) != 0) {
                echo
                '<script>alert("Nomor KTP Telah Terdaftar Di Sistem!"); window.location = "../page/updatePemilikAsetPage.php?id='.$id_pemilik.'"</script>';
            }else {
                $query3 = mysqli_query($con, "UPDATE pemilik_kendaraan SET nama_pemilik='$nama_pemilik', nomor_ktp_pemilik='$nomor_ktp_pemilik', alamat_pemilik='$alamat_pemilik', nomor_telepon_pemilik='$nomor_telepon_pemilik' WHERE id_pemilik='$id_pemilik'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                if($query3){
                    echo
                        '<script>alert("Edit Pemilik Aset Berhasil"); window.location = "../page/listPemilikAsetPage.php"</script>';
                }else{
                    echo
                        '<script>alert("Edit Pemilik Aset Gagal");</script>';
                }
            }
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>
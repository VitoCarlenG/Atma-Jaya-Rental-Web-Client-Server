<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['ubah'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        $id_promo = $_POST['id_promo'];
        $kode_promo = $_POST['kode_promo'];
        $jenis_promo = $_POST['jenis_promo'];
        $keterangan_promo = $_POST['keterangan_promo'];
        $persenan_promo = $_POST['persenan_promo'];
        $status_promo = $_POST['status_promo'];

        $query = mysqli_query($con, "SELECT * from promo where kode_promo = '$kode_promo'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
        $temp = mysqli_query($con, "SELECT * from promo where id_promo = '$id_promo'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
        $query1 = mysqli_fetch_array($temp);

        if($kode_promo == $query1[1]) {
            $query2 = mysqli_query($con, "UPDATE promo SET kode_promo='$kode_promo', jenis_promo='$jenis_promo', keterangan_promo='$keterangan_promo', persenan_promo='$persenan_promo', status_promo='$status_promo' WHERE id_promo='$id_promo'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
            if($query2){
                echo
                    '<script>alert("Edit Promo Success"); window.location = "../page/listPromoManagerPage.php"</script>';
            }else{
                echo
                    '<script>alert("Edit Promo Failed");</script>';
            }
        }else {
            if(mysqli_num_rows($query) != 0) {
                echo
                    '<script>alert("Kode promo telah digunakan!"); window.location = "../page/updatePromoPage.php?id='.$id_promo.'"</script>';
            }else {
                // Melakukan insert ke databse dengan query dibawah ini
                $query2 = mysqli_query($con, "UPDATE promo SET kode_promo='$kode_promo', jenis_promo='$jenis_promo', keterangan_promo='$keterangan_promo', persenan_promo='$persenan_promo', status_promo='$status_promo' WHERE id_promo='$id_promo'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                if($query2){
                    echo
                        '<script>alert("Edit Promo Success"); window.location = "../page/listPromoManagerPage.php"</script>';
                }else{
                    echo
                        '<script>alert("Edit Promo Failed");</script>';
                }
            }
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>
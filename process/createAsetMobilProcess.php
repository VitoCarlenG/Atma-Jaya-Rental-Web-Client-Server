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
        $nama_mobil = $_POST['nama_mobil'];
        $tipe_mobil = $_POST['tipe_mobil'];
        $warna_mobil = $_POST['warna_mobil'];
        $plat_nomor_mobil = $_POST['plat_nomor_mobil'];
        $nomor_stnk_mobil = $_POST['nomor_stnk_mobil'];
        $jenis_transmisi_mobil = $_POST['jenis_transmisi_mobil'];
        $jenis_bahan_bakar_mobil = $_POST['jenis_bahan_bakar_mobil'];
        $volume_bahan_bakar_mobil = $_POST['volume_bahan_bakar_mobil'];
        $volume_bagasi_mobil = $_POST['volume_bagasi_mobil'];
        $kapasitas_penumpang_mobil = $_POST['kapasitas_penumpang_mobil'];
        $fasilitas_mobil = $_POST['fasilitas_mobil'];
        $tanggal_terakhir_kali = $_POST['tanggal_terakhir_kali'];
        $gambar_mobil = $_POST['gambar_mobil'];
        $harga_sewa_mobil = $_POST['harga_sewa_mobil'];
        $kategori_aset_mobil = $_POST['kategori_aset_mobil'];

        if($kategori_aset_mobil == 1) {
            $id_pemilik = $_POST['id_pemilik'];
            $periode_kontrak_mulai_mobil = $_POST['periode_kontrak_mulai_mobil'];
            $periode_kontrak_akhir_mobil = $_POST['periode_kontrak_akhir_mobil'];
        }
      
        $query2 = mysqli_query($con, "SELECT plat_nomor_mobil FROM aset_mobil WHERE plat_nomor_mobil = '$plat_nomor_mobil'") or die(mysqli_error($con));
        $query3 = mysqli_query($con, "SELECT nomor_stnk_mobil FROM aset_mobil WHERE nomor_stnk_mobil = '$nomor_stnk_mobil'") or die(mysqli_error($con));

        if(mysqli_num_rows($query2) != 0) {
            echo
                '<script>alert("Plat nomor telah digunakan!"); window.location = "../page/createAsetMobilPage.php"</script>';
        }else if(mysqli_num_rows($query3) != 0) {
            echo
                '<script>alert("Nomor STNK telah digunakan!"); window.location = "../page/createAsetMobilPage.php"</script>';
        }else {
            // Melakukan insert ke databse dengan query dibawah ini
            if($kategori_aset_mobil == 1) {
                $query4 = mysqli_query($con, "INSERT INTO aset_mobil(nama_mobil, tipe_mobil, warna_mobil, plat_nomor_mobil, nomor_stnk_mobil, jenis_transmisi_mobil, jenis_bahan_bakar_mobil, volume_bahan_bakar_mobil, volume_bagasi_mobil, kapasitas_penumpang_mobil, fasilitas_mobil, tanggal_terakhir_kali, gambar_mobil, harga_sewa_mobil, kategori_aset_mobil, status_ketersediaan_mobil, id_pemilik, periode_kontrak_mulai_mobil, periode_kontrak_akhir_mobil) VALUES ('$nama_mobil', '$tipe_mobil', '$warna_mobil', '$plat_nomor_mobil', '$nomor_stnk_mobil', '$jenis_transmisi_mobil', '$jenis_bahan_bakar_mobil', '$volume_bahan_bakar_mobil', '$volume_bagasi_mobil', '$kapasitas_penumpang_mobil', '$fasilitas_mobil', '$tanggal_terakhir_kali', '$gambar_mobil', '$harga_sewa_mobil', '$kategori_aset_mobil', 1, '$id_pemilik', '$periode_kontrak_mulai_mobil', '$periode_kontrak_akhir_mobil')") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                if($query4){
                    echo
                        '<script>alert("Create Aset Mobil Success"); window.location = "../page/listAsetMobilAdministrasiPage.php"</script>';
                }else{
                    echo
                        '<script>alert("Create Aset Mobil Failed");</script>';
                }
            }else {
                $query4 = mysqli_query($con, "INSERT INTO aset_mobil(nama_mobil, tipe_mobil, warna_mobil, plat_nomor_mobil, nomor_stnk_mobil, jenis_transmisi_mobil, jenis_bahan_bakar_mobil, volume_bahan_bakar_mobil, volume_bagasi_mobil, kapasitas_penumpang_mobil, fasilitas_mobil, tanggal_terakhir_kali, gambar_mobil, harga_sewa_mobil, kategori_aset_mobil, status_ketersediaan_mobil) VALUES ('$nama_mobil', '$tipe_mobil', '$warna_mobil', '$plat_nomor_mobil', '$nomor_stnk_mobil', '$jenis_transmisi_mobil', '$jenis_bahan_bakar_mobil', '$volume_bahan_bakar_mobil', '$volume_bagasi_mobil', '$kapasitas_penumpang_mobil', '$fasilitas_mobil', '$tanggal_terakhir_kali', '$gambar_mobil', '$harga_sewa_mobil', '$kategori_aset_mobil', 1)") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                if($query4){
                    echo
                        '<script>alert("Create Aset Mobil Success"); window.location = "../page/listAsetMobilAdministrasiPage.php"</script>';
                }else{
                    echo
                        '<script>alert("Create Aset Mobil Failed");</script>';
                }
            }
            
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>
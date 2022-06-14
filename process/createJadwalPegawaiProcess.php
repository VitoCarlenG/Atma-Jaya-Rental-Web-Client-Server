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
        $id_pegawai = $_POST['id_pegawai'];
        $id_jadwal = $_POST['id_jadwal'];

        $temp1 = mysqli_query($con, "SELECT COUNT(id_pegawai) from detail_jadwal where id_pegawai='$id_pegawai'") or die(mysqli_error($con));
        $fetchTemp1 = mysqli_fetch_array($temp1);
        $fetchTemp1[0]++;

        $temp2 = mysqli_query($con, "SELECT id_jabatan from pegawai where id_pegawai='$id_pegawai'") or die(mysqli_error($con));
        $fetchTemp2 = mysqli_fetch_array($temp2);

        $temp3 = mysqli_query($con, "SELECT id_pegawai, id_jadwal from detail_jadwal where id_pegawai='$id_pegawai' AND id_jadwal='$id_jadwal'") or die(mysqli_error($con));

        // Melakukan insert ke databse dengan query dibawah ini
        if($fetchTemp1[0]>6){
            echo
                '<script>alert("Tiap Pegawai Hanya Boleh Mengambil Maksimum 6 Shift"); window.location = "../page/createJadwalPegawaiPage.php"</script>';
        }else if($fetchTemp2[0]==1){
            echo
                '<script>alert("Manager Tidak Mempunyai Jadwal Shift"); window.location = "../page/createJadwalPegawaiPage.php"</script>';
        }else if(mysqli_num_rows($temp3) != 0){
            echo
                '<script>alert("Jadwal Pegawai Duplikat"); window.location = "../page/createJadwalPegawaiPage.php"</script>';
        }else if(($fetchTemp2[0]==2 && $id_jadwal>=1 && $id_jadwal<=12) || ($fetchTemp2[0]==3 && $id_jadwal>=13 && $id_jadwal<=24)){
            $query = mysqli_query($con, "INSERT INTO detail_jadwal(id_pegawai, id_jadwal) VALUES ('$id_pegawai', '$id_jadwal')") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

            if($query){
                echo
                    '<script>alert("Create Jadwal Pegawai Success"); window.location = "../page/listJadwalPegawaiPage.php"</script>';
            }else{
                echo
                    '<script>alert("Create Jadwal Pegawai Failed");</script>';
            }
        }else{
            echo
                '<script>alert("Jadwal Tidak Sesuai Dengan Jabatan"); window.location = "../page/createJadwalPegawaiPage.php"</script>';
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>
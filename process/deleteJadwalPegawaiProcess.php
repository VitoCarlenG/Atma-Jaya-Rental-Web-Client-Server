<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    if(isset($_GET['id_pegawai']) && isset($_GET['id_jadwal'])){
        include ('../db.php');
        $id_pegawai = $_GET['id_pegawai'];
        $id_jadwal = $_GET['id_jadwal'];

        $queryDelete = mysqli_query($con, "DELETE FROM detail_jadwal WHERE id_pegawai='$id_pegawai' AND id_jadwal='$id_jadwal'") or die(mysqli_error($con));
        if($queryDelete){
            echo
            '<script>
            alert("Delete Jadwal Pegawai Success"); window.location = "../page/listJadwalPegawaiPage.php"
            </script>';

        }else{
            echo
            '<script>
            alert("Delete Jadwal Pegawai Failed"); window.location = "../page/listJadwalPegawaiPage.php"
            </script>';
        }
    }else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>
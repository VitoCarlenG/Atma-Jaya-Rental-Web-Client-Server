<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    if(isset($_GET['id'])){
        include ('../db.php');
        $id_mobil = $_GET['id'];
        $query = mysqli_query($con, "SELECT * FROM transaksi WHERE id_mobil='$id_mobil'") or die(mysqli_error($con));

        if(mysqli_num_rows($query) != 0) {
            $queryUpdate = mysqli_query($con, "UPDATE aset_mobil set status_mobil=0 WHERE id_mobil='$id_mobil'") or die(mysqli_error($con));

            if($queryUpdate){
                echo
                '<script>
                alert("Aset Mobil Berhasil Dinonaktifkan"); window.location = "../page/listAsetMobilAdministrasiPage.php"
                </script>';

            }else{
                echo
                '<script>
                alert("Aset Mobil Gagal Dinonaktifkan"); window.location = "../page/listAsetMobilAdministrasiPage.php"
                </script>';
            }
        }else {
            $queryDelete = mysqli_query($con, "DELETE FROM aset_mobil WHERE id_mobil='$id_mobil'") or die(mysqli_error($con));

            if($queryDelete){
                echo
                '<script>
                alert("Delete Aset Mobil Success"); window.location = "../page/listAsetMobilAdministrasiPage.php"
                </script>';

            }else{
                echo
                '<script>
                alert("Delete Aset Mobil Failed"); window.location = "../page/listAsetMobilAdministrasiPage.php"
                </script>';
            }
        }
        
    }else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>
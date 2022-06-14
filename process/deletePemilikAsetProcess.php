<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    if(isset($_GET['id'])){
        include ('../db.php');
        $id_pemilik = $_GET['id'];

        $query = mysqli_query($con, "SELECT * FROM aset_mobil where id_pemilik='$id_pemilik'") or die(mysqli_error($con));

        if(mysqli_num_rows($query) != 0) {
            echo
                '<script>
                alert("Pemilik Aset Masih Mempunyai Aset Mobil!"); window.location = "../page/listPemilikAsetPage.php"
                </script>';
        }else {
            $queryDelete = mysqli_query($con, "DELETE FROM pemilik_kendaraan WHERE id_pemilik='$id_pemilik'") or die(mysqli_error($con));

            if($queryDelete){
                echo
                '<script>
                alert("Delete Pemilik Aset Success"); window.location = "../page/listPemilikAsetPage.php"
                </script>';
            }else{
                echo
                '<script>
                alert("Delete Pemilik Aset Failed"); window.location = "../page/listPemilikAsetPage.php"
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
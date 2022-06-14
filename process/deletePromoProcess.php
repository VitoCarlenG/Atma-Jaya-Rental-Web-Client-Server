<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    if(isset($_GET['id'])){
        include ('../db.php');
        $id_promo = $_GET['id'];
        $query = mysqli_query($con, "SELECT * From transaksi WHERE id_promo='$id_promo'") or die(mysqli_error($con));

        if(mysqli_num_rows($query) != 0) {
            $queryUpdate = mysqli_query($con, "UPDATE promo set aktivasi_promo=0 WHERE id_promo='$id_promo'") or die(mysqli_error($con));

            if($queryUpdate){
                echo
                '<script>
                alert("Promo Berhasil Dinonaktifkan"); window.location = "../page/listPromoManagerPage.php"
                </script>';

            }else{
                echo
                '<script>
                alert("Promo Gagal Dinonaktifkan"); window.location = "../page/listPromoManagerPage.php"
                </script>';
            }
        }else {
            $queryDelete = mysqli_query($con, "DELETE FROM promo WHERE id_promo='$id_promo'") or die(mysqli_error($con));

            if($queryDelete){
                echo
                '<script>
                alert("Delete Promo Success"); window.location = "../page/listPromoManagerPage.php"
                </script>';

            }else{
                echo
                '<script>
                alert("Delete Promo Failed"); window.location = "../page/listPromoManagerPage.php"
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
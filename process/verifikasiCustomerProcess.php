<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    if(isset($_GET['id'])){
        include ('../db.php');
        $id_customer = $_GET['id'];
        $verifikasiCustomer = mysqli_query($con, "UPDATE customer set verifikasi_customer=1 WHERE id_customer='$id_customer'") or die(mysqli_error($con));
        if($verifikasiCustomer){
            echo
            '<script>
            alert("Verifikasi Customer Success"); window.location = "../page/verifikasiCustomerPage.php"
            </script>';

        }else{
            echo
            '<script>
            alert("Verifikasi Customer Failed"); window.location = "../page/verifikasiCustomerPage.php"
            </script>';
        }
    }else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>
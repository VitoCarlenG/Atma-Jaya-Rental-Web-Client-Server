<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['register'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $nama_customer = $_POST['nama_customer'];
        $alamat_customer = $_POST['alamat_customer'];
        $tanggal_lahir_customer = $_POST['tanggal_lahir_customer'];
        $jenis_kelamin_customer = $_POST['jenis_kelamin_customer'];
        $email_customer = $_POST['email_customer'];
        $nomor_telepon_customer = $_POST['nomor_telepon_customer'];
        $password_customer = password_hash($_POST['tanggal_lahir_customer'], PASSWORD_DEFAULT);
        $tanda_pengenal_customer = $_POST['tanda_pengenal_customer'];

        $date1=new DateTime($tanggal_lahir_customer);

        $nowQuery=mysqli_query($con, "SELECT now()") or die(mysqli_error($con));
        $nowData=mysqli_fetch_array($nowQuery);
        $date2=new DateTime($nowData[0]);

        $temp=$date1->diff($date2);

        if($temp->y<17) {
            echo
                '<script>alert("Syarat Usia Minimal 17 Tahun!"); window.location = "../page/registerCustomerPage.php"</script>';
        }else {
            $query = mysqli_query($con, "SELECT * FROM customer WHERE email_customer = '$email_customer'") or die(mysqli_error($con));
            $query2 = mysqli_query($con, "SELECT * FROM pegawai WHERE email_pegawai = '$email_customer'") or die(mysqli_error($con));
            $query3 = mysqli_query($con, "SELECT * FROM driver WHERE email_driver = '$email_customer'") or die(mysqli_error($con));

            if(mysqli_num_rows($query) != 0 || mysqli_num_rows($query2) != 0 || mysqli_num_rows($query3) != 0) {
                echo
                    '<script>alert("Email telah digunakan!"); window.location = "../page/registerCustomerPage.php"</script>';
            }else {
                // Melakukan insert ke databse dengan query dibawah ini
                $query4 = mysqli_query($con, "INSERT INTO users(`name`, `email`, `password`, `created_at`) VALUES ('$nama_customer', '$email_customer', '$password_customer', now())") or die(mysqli_error($con));

                $query5 = mysqli_query($con, "select id from users where email='$email_customer'") or die(mysqli_error($con));
                $data = mysqli_fetch_array($query5);
                $id = $data[0];

                $query6 = mysqli_query($con, "INSERT INTO customer(format_id_customer, nama_customer, alamat_customer, tanggal_lahir_customer, jenis_kelamin_customer, email_customer, nomor_telepon_customer, password_customer, tanda_pengenal_customer, id) VALUES (CONCAT('CUS', CURRENT_DATE, '-'), '$nama_customer', '$alamat_customer', '$tanggal_lahir_customer', '$jenis_kelamin_customer', '$email_customer', '$nomor_telepon_customer', '$password_customer', '$tanda_pengenal_customer', '$id')") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                if($query4 && $query6){
                    echo
                        '<script>alert("Register Success"); window.location = "../index.php"</script>';
                }else{
                    echo
                        '<script>alert("Register Failed");</script>';
                }
            }
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>
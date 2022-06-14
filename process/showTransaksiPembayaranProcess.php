<link rel="icon" href="../resource/AJR.png" type="image/ico">
<title>Atma Jaya Rental</title>

<?php
    if(isset($_GET['id'])){
        include ('../db.php');
   
        $nomor_transaksi = $_GET['id'];

        $query = mysqli_query($con, "SELECT id_driver from transaksi where nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
        $data = mysqli_fetch_array($query);
        $id_driver = $data[0];

        $query2 = mysqli_query($con, "SELECT id_promo from transaksi where nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
        $data2 = mysqli_fetch_array($query2);
        $id_promo = $data2[0];

        $query3 = mysqli_query($con, "SELECT id_mobil from transaksi where nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
        $data3 = mysqli_fetch_array($query3);
        $id_mobil = $data3[0];

        $query4 = mysqli_query($con, "SELECT TIMESTAMPDIFF(HOUR, now(), TANGGAL_WAKTU_SELESAI_SEWA) from transaksi where nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
        $data4 = mysqli_fetch_array($query4);
        $data4[0]+=3;

        $query5 = mysqli_query($con, "SELECT TIMESTAMPDIFF(HOUR, TANGGAL_WAKTU_SELESAI_SEWA, now()) from transaksi where nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
        $data5 = mysqli_fetch_array($query5);

        if($data4[0]<0) {

            $temp = 1;

            while($data5[0]>=27) {
                $temp++;
                $data5[0]-=24;
            }

            if($data[0]==NULL) {
                if($data2[0]==NULL) {
                    $queryUpdate = mysqli_query($con, "UPDATE transaksi SET tanggal_waktu_pengembalian=now(), sub_total_pembayaran=(select harga_sewa_mobil from aset_mobil where id_mobil='$id_mobil')*TIMESTAMPDIFF(DAY, TANGGAL_WAKTU_MULAI_SEWA, TANGGAL_WAKTU_SELESAI_SEWA), diskon_promo_pembayaran=0, biaya_ekstensi_pembayaran=(select harga_sewa_mobil from aset_mobil where id_mobil='$id_mobil')*$temp, total_pembayaran=(sub_total_pembayaran-diskon_promo_pembayaran)+biaya_ekstensi_pembayaran WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                    echo
                    '<script>
                        window.location = "../page/showTransaksiPembayaranCustomerPage.php?id='.$nomor_transaksi.'"
                    </script>';
                }else {
                    $queryUpdate = mysqli_query($con, "UPDATE transaksi SET tanggal_waktu_pengembalian=now(), sub_total_pembayaran=(select harga_sewa_mobil from aset_mobil where id_mobil='$id_mobil')*TIMESTAMPDIFF(DAY, TANGGAL_WAKTU_MULAI_SEWA, TANGGAL_WAKTU_SELESAI_SEWA), diskon_promo_pembayaran=((select persenan_promo from promo where id_promo='$id_promo')/100)*sub_total_pembayaran, biaya_ekstensi_pembayaran=(select harga_sewa_mobil from aset_mobil where id_mobil='$id_mobil')*$temp, total_pembayaran=(sub_total_pembayaran-diskon_promo_pembayaran)+biaya_ekstensi_pembayaran WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                    echo
                    '<script>
                        window.location = "../page/showTransaksiPembayaranCustomerPage.php?id='.$nomor_transaksi.'"
                    </script>';
                }
            }else {
                if($data2[0]==NULL) {
                    $queryUpdate = mysqli_query($con, "UPDATE transaksi SET tanggal_waktu_pengembalian=now(), sub_total_pembayaran=((select harga_sewa_mobil from aset_mobil where id_mobil='$id_mobil')*TIMESTAMPDIFF(DAY, TANGGAL_WAKTU_MULAI_SEWA, TANGGAL_WAKTU_SELESAI_SEWA))+((select harga_sewa_driver from driver where id_driver='$id_driver')*TIMESTAMPDIFF(DAY, TANGGAL_WAKTU_MULAI_SEWA, TANGGAL_WAKTU_SELESAI_SEWA)), diskon_promo_pembayaran=0, biaya_ekstensi_pembayaran=((select harga_sewa_mobil from aset_mobil where id_mobil='$id_mobil')*$temp)+((select harga_sewa_driver from driver where id_driver='$id_driver')*$temp), total_pembayaran=(sub_total_pembayaran-diskon_promo_pembayaran)+biaya_ekstensi_pembayaran WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                    echo
                    '<script>
                        window.location = "../page/showTransaksiPembayaranCustomerPage.php?id='.$nomor_transaksi.'"
                    </script>';
                }else {
                    $queryUpdate = mysqli_query($con, "UPDATE transaksi SET tanggal_waktu_pengembalian=now(), sub_total_pembayaran=((select harga_sewa_mobil from aset_mobil where id_mobil='$id_mobil')*TIMESTAMPDIFF(DAY, TANGGAL_WAKTU_MULAI_SEWA, TANGGAL_WAKTU_SELESAI_SEWA))+((select harga_sewa_driver from driver where id_driver='$id_driver')*TIMESTAMPDIFF(DAY, TANGGAL_WAKTU_MULAI_SEWA, TANGGAL_WAKTU_SELESAI_SEWA)), diskon_promo_pembayaran=((select persenan_promo from promo where id_promo='$id_promo')/100)*sub_total_pembayaran, biaya_ekstensi_pembayaran=((select harga_sewa_mobil from aset_mobil where id_mobil='$id_mobil')*$temp)+((select harga_sewa_driver from driver where id_driver='$id_driver')*$temp), total_pembayaran=(sub_total_pembayaran-diskon_promo_pembayaran)+biaya_ekstensi_pembayaran WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                    echo
                    '<script>
                        window.location = "../page/showTransaksiPembayaranCustomerPage.php?id='.$nomor_transaksi.'"
                    </script>';
                }
            }
        }else {
            if($data[0]==NULL) {
                if($data2[0]==NULL) {
                    $queryUpdate = mysqli_query($con, "UPDATE transaksi SET tanggal_waktu_pengembalian=now(), sub_total_pembayaran=(select harga_sewa_mobil from aset_mobil where id_mobil='$id_mobil')*TIMESTAMPDIFF(DAY, TANGGAL_WAKTU_MULAI_SEWA, TANGGAL_WAKTU_SELESAI_SEWA), diskon_promo_pembayaran=0, biaya_ekstensi_pembayaran=0, total_pembayaran=(sub_total_pembayaran-diskon_promo_pembayaran)+biaya_ekstensi_pembayaran WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                    echo
                    '<script>
                        window.location = "../page/showTransaksiPembayaranCustomerPage.php?id='.$nomor_transaksi.'"
                    </script>';
                }else {
                    $queryUpdate = mysqli_query($con, "UPDATE transaksi SET tanggal_waktu_pengembalian=now(), sub_total_pembayaran=(select harga_sewa_mobil from aset_mobil where id_mobil='$id_mobil')*TIMESTAMPDIFF(DAY, TANGGAL_WAKTU_MULAI_SEWA, TANGGAL_WAKTU_SELESAI_SEWA), diskon_promo_pembayaran=((select persenan_promo from promo where id_promo='$id_promo')/100)*sub_total_pembayaran, biaya_ekstensi_pembayaran=0, total_pembayaran=(sub_total_pembayaran-diskon_promo_pembayaran)+biaya_ekstensi_pembayaran WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                    echo
                    '<script>
                        window.location = "../page/showTransaksiPembayaranCustomerPage.php?id='.$nomor_transaksi.'"
                    </script>';
                }
            }else {
                if($data2[0]==NULL) {
                    $queryUpdate = mysqli_query($con, "UPDATE transaksi SET tanggal_waktu_pengembalian=now(), sub_total_pembayaran=((select harga_sewa_mobil from aset_mobil where id_mobil='$id_mobil')*TIMESTAMPDIFF(DAY, TANGGAL_WAKTU_MULAI_SEWA, TANGGAL_WAKTU_SELESAI_SEWA))+((select harga_sewa_driver from driver where id_driver='$id_driver')*TIMESTAMPDIFF(DAY, TANGGAL_WAKTU_MULAI_SEWA, TANGGAL_WAKTU_SELESAI_SEWA)), diskon_promo_pembayaran=0, biaya_ekstensi_pembayaran=0, total_pembayaran=(sub_total_pembayaran-diskon_promo_pembayaran)+biaya_ekstensi_pembayaran WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                    echo
                    '<script>
                        window.location = "../page/showTransaksiPembayaranCustomerPage.php?id='.$nomor_transaksi.'"
                    </script>';
                }else {
                    $queryUpdate = mysqli_query($con, "UPDATE transaksi SET tanggal_waktu_pengembalian=now(), sub_total_pembayaran=((select harga_sewa_mobil from aset_mobil where id_mobil='$id_mobil')*TIMESTAMPDIFF(DAY, TANGGAL_WAKTU_MULAI_SEWA, TANGGAL_WAKTU_SELESAI_SEWA))+((select harga_sewa_driver from driver where id_driver='$id_driver')*TIMESTAMPDIFF(DAY, TANGGAL_WAKTU_MULAI_SEWA, TANGGAL_WAKTU_SELESAI_SEWA)), diskon_promo_pembayaran=((select persenan_promo from promo where id_promo='$id_promo')/100)*sub_total_pembayaran, biaya_ekstensi_pembayaran=0, total_pembayaran=(sub_total_pembayaran-diskon_promo_pembayaran)+biaya_ekstensi_pembayaran WHERE nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    
                    echo
                    '<script>
                        window.location = "../page/showTransaksiPembayaranCustomerPage.php?id='.$nomor_transaksi.'"
                    </script>';
                }
            }
        } 

    }else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>
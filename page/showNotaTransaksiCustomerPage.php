<?php
    include '../component/sidebarCustomer.php'
?>

<?php
    include '../db.php';
        
    $nomor_transaksi = $_GET['id'];
    $temp = mysqli_query($con, "SELECT format_nomor_transaksi, nomor_transaksi, tanggal_transaksi, nama_customer, nama_pegawai, nama_driver, kode_promo, tanggal_waktu_mulai_sewa, tanggal_waktu_selesai_sewa, tanggal_waktu_pengembalian, nama_mobil, harga_sewa_mobil, TIMESTAMPDIFF(DAY, TANGGAL_WAKTU_MULAI_SEWA, TANGGAL_WAKTU_SELESAI_SEWA) AS Durasi, harga_sewa_mobil*TIMESTAMPDIFF(DAY, TANGGAL_WAKTU_MULAI_SEWA, TANGGAL_WAKTU_SELESAI_SEWA) as sub_total1, harga_sewa_driver, harga_sewa_driver*TIMESTAMPDIFF(DAY, TANGGAL_WAKTU_MULAI_SEWA, TANGGAL_WAKTU_SELESAI_SEWA) as sub_total2, sub_total_pembayaran, diskon_promo_pembayaran, biaya_ekstensi_pembayaran, total_pembayaran from transaksi left join customer using (id_customer) left join pegawai using (id_pegawai) left join driver using (id_driver) left join promo using (id_promo) left join aset_mobil using (id_mobil) where nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con));
    $user = mysqli_fetch_array($temp);
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <div class="title" style="justify-content: space-between; text-align: right;">
            <a onclick="window.print();">
                <button type="button" class="btn btn-success">Cetak</button>
            </a>
            <a href="./listRiwayatTransaksiCustomerPage.php">
                <button type="button" class="btn btn-danger">Kembali</button>
            </a>
        </div>

        <div style="text-align: center;">
            <h4 style="color: #1f4063;"><b>Nota Transaksi</b></h4>
            <br>
            <h4 style="color: #1f4063;"><b>Atma Jogja Rental</b></h4>
            <hr>
        </div>
        <h5 style="color: #1f4063;"><b>Nota Transaksi Sewa Mobil</b></h5>
        <div class="container" style="background-color: #FFFFFF; border: 1px solid #1f4063;" >
            <div style="text-align: center;">
                <h5 style="color: #1f4063;"><b>Atma Rental</b></h5>
            </div>
            <?php
                echo '
                <div class="title" style="justify-content: space-between; display: flex;">
                    <h6 style="color: #1f4063;">'.$user[0].''.$user[1].'</h6>
                    <h6 style="color: #1f4063;">'.$user[2].'</h6>
                </div>';
            ?>
            <div class="container" style="background-color: #FFFFFF; border-top: 1px solid #1f4063;" >
                <table class="table table-borderless">
                    <tr>
                        <?php
                            echo '
                                <td>CUST</td>
                                <td>'.$user[3].'</td>
                                <td>PRO</td>';
                                if($user[6]==NULL) {
                                    echo '
                                        <td>-</td>';
                                }else {
                                    echo '
                                        <td>'.$user[6].'</td>';
                                } 
                        ?>
                    </tr>
                    <tr>
                        <?php
                            echo '<td>CS</td>
                            <td>'.$user[4].'</td>';
                        ?>
                    </tr>
                    <tr>
                        <?php
                            echo '
                                <td>DRV</td>';
                                if($user[5]==NULL) {
                                    echo '
                                        <td>-</td>';
                                }else {
                                    echo '
                                        <td>'.$user[5].'</td>';
                                } 
                        ?>
                    </tr>
                </table>
            </div>
            <div class="container" style="background-color: #FFFFFF; border-top: 1px solid #1f4063;" >
                <div style="text-align: center;">
                    <h5 style="color: #1f4063;"><b>Nota Transaksi</b></h5>
                </div>
            </div>
            <div class="container" style="background-color: #FFFFFF; border-top: 1px solid #1f4063;" >
                <table class="table">
                    <tr>
                        <td>Tgl Mulai</td>
                        <td><?php echo $user[7]; ?></td>
                    </tr>
                    <tr>
                        <td>Tgl Selesai</td>
                        <td><?php echo $user[8]; ?></td>
                    </tr>
                    <tr>
                        <td>Tgl Pengembalian</td>
                        <td><?php echo $user[9]; ?></td>
                    </tr>
                </table>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Satuan</th>
                            <th scope="col">Durasi</th>
                            <th scope="col">Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $user[10]; ?></td>
                            <td><?php echo $user[11]; ?></td>
                            <td><?php echo $user[12]; ?> hari</td>
                            <td><?php echo $user[13]; ?></td>
                        </tr>
                        <?php
                            if($user[5]!=NULL) {
                                echo '
                                    <tr>
                                        <td>Driver '.$user[5].'</td>
                                        <td>'.$user[14].'</td>
                                        <td>'.$user[12].' hari</td>
                                        <td>'.$user[15].'</td>
                                    </tr>';
                            }
                        ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th scope="col"><?php echo $user[16]; ?></th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Disc</td>
                            <td><?php echo $user[17]; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Denda</td>
                            <td><?php echo $user[18]; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Total</td>
                            <th scope="col"><?php echo $user[19]; ?></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    </aside>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></swindow.location>
</body>
</html>
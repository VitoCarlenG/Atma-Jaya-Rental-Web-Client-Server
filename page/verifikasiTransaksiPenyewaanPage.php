<?php
    include '../component/sidebarCustomerService.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <div class="title" style="justify-content: space-between; display: flex;">
            <h4 style="color: #1f4063;">Verifikasi Transaksi Penyewaan</h4>
        </div>
        
        <hr>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nomor Transaksi</th>
                <th scope="col">Tgl Transaksi</th>
                <th scope="col">Customer</th>
                <th scope="col">Mobil</th>
                <th scope="col">Driver</th>
                <th scope="col">Promo</th>
                <th scope="col">Tgl Mulai Sewa</th>
                <th scope="col">Tgl Selesai Sewa</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>

            <form action="./verifikasiTransaksiPenyewaanPage.php" method="post">
                <input class="form-control" id="nama_customer" name="nama_customer" placeholder="Cari Berdasarkan Nama Customer" aria-describedby="emailHelp">
                <button type="submit" hidden class="btn btn-success" name="cari">Cari</button>
            </form>


            <tbody>
                <?php

                if(isset($_POST['cari'])) {
                    include('../db.php');

                    $nama_customer = $_POST['nama_customer'];

                    $query = mysqli_query($con, "SELECT format_nomor_transaksi, nomor_transaksi, tanggal_transaksi, nama_customer, nama_mobil, nama_driver, kode_promo, tanggal_waktu_mulai_sewa, tanggal_waktu_selesai_sewa FROM transaksi join customer using (id_customer) left join promo using (id_promo) join aset_mobil using (id_mobil) left join driver using (id_driver) where nama_customer LIKE '%$nama_customer%' AND status_transaksi='Menunggu Verifikasi Dari Customer Service'") or die(mysqli_error($con));
                }else {
                    $query = mysqli_query($con, "SELECT format_nomor_transaksi, nomor_transaksi, tanggal_transaksi, nama_customer, nama_mobil, nama_driver, kode_promo, tanggal_waktu_mulai_sewa, tanggal_waktu_selesai_sewa FROM transaksi join customer using (id_customer) left join promo using (id_promo) join aset_mobil using (id_mobil) left join driver using (id_driver) where status_transaksi='Menunggu Verifikasi Dari Customer Service'") or die(mysqli_error($con));
                }

                if(mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak Ada Transaksi Penyewaan Yang Perlu Diverifikasi </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_array($query)){
                    echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <th scope="row">'.$data[0], $data[1].'</th>
                            <td>'.$data[2].'</td>
                            <td>'.$data[3].'</td>
                            <td>'.$data[4].'</td>';

                            if($data[5]==NULL) {
                                echo '<td>-</td>';
                            }else {
                                echo '<td>'.$data[5].'</td>';
                            }

                            if($data[6]==NULL) {
                                echo '<td>-</td>';
                            }else {
                                echo '<td>'.$data[6].'</td>';
                            }
                            
                          echo '
                            <td>'.$data[7].'</td>
                            <td>'.$data[8].'</td>
                            <td> 
                                <a href="../process/verifikasiTransaksiPenyewaanProcess.php?id='.$data[1].'&stats=0"
                                    onClick="return confirm ( \'Apakah Anda Yakin Ingin Menolak Transaksi Penyewaan Ini?\')">
                                    <button type="button" class="btn btn-danger">Refuse</button>
                                </a>
                                
                                <a href="../process/verifikasiTransaksiPenyewaanProcess.php?id='.$data[1].'&stats=1"
                                    onClick="return confirm ( \'Apakah Anda Yakin Ingin Memverifikasi Transaksi Penyewaan Ini?\')">
                                    <button type="button" class="btn btn-success">Verify</button>
                                </a>
                            </td>
                        </tr>';
                    $no++;
                    }
                }
            ?>
            </tbody>
            </table>
    </div>
    </aside>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></swindow.location>
</body>
</html>
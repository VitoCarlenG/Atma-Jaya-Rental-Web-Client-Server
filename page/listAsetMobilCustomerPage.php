<?php
    include '../component/sidebarCustomer.php'
?>

<?php
    $stats=$_GET['stats'];
    $tanggal_waktu_sewa=$_GET['tanggal_waktu_sewa'];
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <div class="title" style="justify-content: space-between; display: flex;">
            <h4 style="color: #1f4063;">Pilih Mobil</h4>
            <a href="./getStartedPage.php">
                <button type="button" class="btn btn-danger">← Kembali Ke Pemilihan Transaksi</button>
            </a>
        </div>
        
        <hr>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Mobil</th>
                <th scope="col">Tipe</th>
                <th scope="col">Warna</th>
                <th scope="col">Harga Sewa</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            
            <form action="./listAsetMobilCustomerPage.php?stats=<?php echo $stats; ?>&tanggal_waktu_sewa=<?php echo $tanggal_waktu_sewa; ?>" method="post">
                <input class="form-control" id="nama_mobil" name="nama_mobil" placeholder="Cari Berdasarkan Nama Mobil" aria-describedby="emailHelp">
                <button type="submit" hidden class="btn btn-success" name="cari">Cari</button>
            </form>

            <tbody>
                <?php

                if(isset($_POST['cari'])){
                    include('../db.php');

                    $nama_mobil = $_POST['nama_mobil'];

                    $query = mysqli_query($con, "SELECT id_mobil, nama_mobil, tipe_mobil, warna_mobil, harga_sewa_mobil FROM aset_mobil WHERE nama_mobil LIKE '%$nama_mobil%' AND status_ketersediaan_mobil=1 AND status_mobil=1 AND DATEDIFF(periode_kontrak_akhir_mobil, CURRENT_DATE)>=$tanggal_waktu_sewa") or die(mysqli_error($con));
                }else{
                    $query = mysqli_query($con, "SELECT id_mobil, nama_mobil, tipe_mobil, warna_mobil, harga_sewa_mobil FROM aset_mobil where status_ketersediaan_mobil=1 AND status_mobil=1 AND DATEDIFF(periode_kontrak_akhir_mobil, CURRENT_DATE)>=$tanggal_waktu_sewa") or die(mysqli_error($con));
                }

                if(mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak Ada Mobil Yang Tersedia </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_array($query)){
                    echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data[1].'</td>
                            <td>'.$data[2].'</td>
                            <td>'.$data[3].'</td>
                            <td>Rp'.$data[4].',00</td>
                            <td>

                                <a href="./showAsetMobilCustomerPage.php?id_mobil='.$data[0].'&stats='.$stats.'&tanggal_waktu_sewa='.$tanggal_waktu_sewa.'">
                                    <button type="button" class="btn btn-info">Show</button>
                                </a>';

                                if($stats==1) {
                                    echo'
                                    <a href="./listDriverCustomerPage.php?id_mobil='.$data[0].'"
                                        onClick="return confirm ( \'Apakah Anda Yakin Ingin Memilih Mobil Ini?\')">
                                        <button type="button" class="btn btn-success">Pilih</button>
                                    </a>';
                                }else {
                                    echo '
                                    <a href="./listPromoCustomerPage.php?id_mobil='.$data[0].'&id_driver='.NULL.'"
                                        onClick="return confirm ( \'Apakah Anda Yakin Ingin Memilih Mobil Ini?\')">
                                        <button type="button" class="btn btn-success">Pilih</button>
                                    </a>';
                                }

                                echo ' 
                                
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
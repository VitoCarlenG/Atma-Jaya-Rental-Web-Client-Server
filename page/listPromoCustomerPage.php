<?php
    include '../component/sidebarCustomer.php'
?>

<?php
    include '../db.php';
        
    $id_mobil = $_GET['id_mobil'];
    $id_driver = $_GET['id_driver'];
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <div class="title" style="justify-content: space-between; display: flex;">
            <h4 style="color: #1f4063;">Pilih Promo</h4>

            <div>
                <a href="./getStartedPage.php">
                    <button type="button" class="btn btn-danger">← Kembali Ke Pemilihan Transaksi</button>
                </a>
                
                <a href="../process/createTransaksiProcess.php?id_mobil=<?php echo $id_mobil; ?>&id_driver=<?php echo $id_driver; ?>&id_promo=<?php echo NULL; ?>" onclick="return confirm('Apakah Anda Yakin Tidak Ingin Menggunakan Promo?')">
                    <button type="button" class="btn btn-success">Tanpa Promo</button>
                </a>
            </div>
        </div>
        
        <hr>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Promo</th>
                <th scope="col">Jenis Promo</th>
                <th scope="col">Keterangan Promo</th>
                <th scope="col">Persenan Promo</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            
            <form action="./listPromoCustomerPage.php?id_mobil=<?php echo $id_mobil; ?>&id_driver=<?php echo $id_driver; ?>" method="post">
                <input class="form-control" id="kode_promo" name="kode_promo" placeholder="Cari Berdasarkan Kode Promo" aria-describedby="emailHelp">
                <button type="submit" hidden class="btn btn-success" name="cari">Cari</button>
            </form>

            <tbody>
                <?php

                if(isset($_POST['cari'])){
                    include('../db.php');

                    $kode_promo = $_POST['kode_promo'];

                    $query = mysqli_query($con, "SELECT * FROM promo WHERE kode_promo LIKE '%$kode_promo%' AND status_promo=1 AND aktivasi_promo=1") or die(mysqli_error($con));
                }else{
                    $query = mysqli_query($con, "SELECT * FROM promo WHERE status_promo=1 AND aktivasi_promo=1") or die(mysqli_error($con));
                }

                if(mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak Ada Promo Yang Tersedia </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_array($query)){
                    echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data[1].'</td>
                            <td>'.$data[2].'</td>
                            <td>'.$data[3].'</td>
                            <td>'.$data[4].'%</td>
                            <td>
                                <a href="../process/createTransaksiProcess.php?id_mobil='.$id_mobil.'&id_driver='.$id_driver.'&id_promo='.$data[0].'"
                                    onClick="return confirm ( \'Apakah Anda Yakin Ingin Memilih Promo Ini?\')">
                                    <button type="button" class="btn btn-success">Pilih</button>
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
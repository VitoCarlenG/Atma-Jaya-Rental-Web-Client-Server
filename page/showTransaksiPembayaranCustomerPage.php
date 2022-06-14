<?php
    include '../component/sidebarCustomer.php'
?>

<?php
    include '../db.php';
        
    $nomor_transaksi = $_GET['id'];
    $temp = mysqli_query($con, "SELECT * from transaksi where nomor_transaksi='$nomor_transaksi'") or die(mysqli_error($con));
    $user = mysqli_fetch_array($temp);
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 style="color: #1f4063;">Transaksi Pembayaran</h4>
        <hr>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Waktu Pengembalian</label>
                <input class="form-control" disabled value="<?php echo $user[12]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Sub Total Pembayaran</label>
                <input class="form-control" disabled value="Rp<?php echo $user[18]; ?>,00">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Diskon</label>
                <input class="form-control" disabled value="<?php
                        if($user[21]==0) {
                            echo 'Rp-';
                        }else {
                            echo 'Rp', $user[21], ',00';
                        }
                    ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Denda</label>
                <input class="form-control" disabled value="<?php
                        if($user[19]==0) {
                            echo 'Rp-';
                        }else {
                            echo 'Rp', $user[19], ',00';
                        }
                    ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Total Pembayaran</label>
                <input class="form-control" disabled value="Rp<?php echo $user[20]; ?>,00">
            </div>

            <form action="../process/updateTransaksiPembayaranProcess.php" method="post">
                <input type="hidden" name="nomor_transaksi" value="<?php echo $user[0]; ?>">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Metode Pembayaran</label>

                    <div class="mb-3">
                        <input type="radio" id="metode_pembayaran" name="metode_pembayaran" required value="0" <?php if($user[13] == 0) { echo 'checked'; } ?> /> Tunai
                        <br><br>
                        <input type="radio" id="metode_pembayaran" name="metode_pembayaran" required value="1" <?php if($user[13] == 1) { echo 'checked'; } ?> /> Nontunai
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bukti Pembayaran</label>
                    <input class="form-control" type="url" id="bukti_pembayaran" required name="bukti_pembayaran" placeholder="Upload Link Bukti Pembayaran" aria-describedby="emailHelp">
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" name="ubah">Checkout</button>
                    <a href="./showTransaksiBerjalanPage.php" class="btn btn-danger" role="button" aria-disabled="true">Kembali</a>
                </div>
            </form>
        
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
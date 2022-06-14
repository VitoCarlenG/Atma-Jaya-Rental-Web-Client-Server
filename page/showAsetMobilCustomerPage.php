<?php
    include '../component/sidebarCustomer.php'
?>

<?php
    include '../db.php';
        
    $id_mobil = $_GET['id_mobil'];
    $stats = $_GET['stats'];
    $tanggal_waktu_sewa = $_GET['tanggal_waktu_sewa'];

    $temp = mysqli_query($con, "SELECT NAMA_MOBIL, TIPE_MOBIL, JENIS_TRANSMISI_MOBIL, JENIS_BAHAN_BAKAR_MOBIL, VOLUME_BAHAN_BAKAR_MOBIL, WARNA_MOBIL, KAPASITAS_PENUMPANG_MOBIL, FASILITAS_MOBIL, TANGGAL_TERAKHIR_KALI, VOLUME_BAGASI_MOBIL, HARGA_SEWA_MOBIL, GAMBAR_MOBIL from aset_mobil where id_mobil='$id_mobil'") or die(mysqli_error($con));
    $user = mysqli_fetch_array($temp);
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 style="color: #1f4063;">Data Mobil</h4>
        <hr>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input class="form-control" disabled value="<?php echo $user[0]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipe</label>
                <input class="form-control" disabled value="<?php echo $user[1]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Warna</label>
                <input class="form-control" disabled value="<?php echo $user[5]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Transmisi</label>
                <input class="form-control" disabled value="<?php echo $user[2]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Bahan Bakar</label>
                <input class="form-control" disabled value="<?php echo $user[3]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Volume Bahan Bakar</label>
                <input class="form-control" disabled value="<?php echo $user[4]; ?> liter">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Volume Bagasi</label>
                <input class="form-control" disabled value="<?php echo $user[9]; ?> mm">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kapasitas Penumpang</label>
                <input class="form-control" disabled value="<?php echo $user[6]; ?> orang">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fasilitas</label>
                <input class="form-control" disabled value="<?php echo $user[7]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Terakhir Kali Servis</label>
                <input class="form-control" disabled value="<?php echo $user[8]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Gambar</label>
                <input class="form-control" disabled value="<?php
                            if($user[11]==NULL) {
                                echo 'Belum ada data';
                            }else {
                                echo $user[11];
                            }
                        ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga Sewa</label>
                <input class="form-control" disabled value="Rp<?php echo $user[10]; ?>,00">
            </div>

            <div class="d-grid gap-2">
                <a href="./listAsetMobilCustomerPage.php?stats=<?php echo $stats; ?>&tanggal_waktu_sewa=<?php echo $tanggal_waktu_sewa; ?>" class="btn btn-danger" role="button" aria-disabled="true">Kembali</a>
            </div>
        
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
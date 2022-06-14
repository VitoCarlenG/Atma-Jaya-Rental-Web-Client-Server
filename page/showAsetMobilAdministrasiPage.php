<?php
    include '../component/sidebarAdministrasi.php'
?>

<?php
    include '../db.php';
        
    $id_mobil = $_GET['id'];
    $getKategoriAset = mysqli_query($con, "SELECT KATEGORI_ASET_MOBIL from aset_mobil where id_mobil='$id_mobil'") or die(mysqli_error($con));
    $fetchKategoriAset = mysqli_fetch_array($getKategoriAset);

    if($fetchKategoriAset[0] == 0) {
        $temp = mysqli_query($con, "SELECT * from aset_mobil where id_mobil='$id_mobil'") or die(mysqli_error($con));
        $user = mysqli_fetch_array($temp);
    }else {
        $temp = mysqli_query($con, "SELECT ID_MOBIL, ID_PEMILIK, PLAT_NOMOR_MOBIL, NOMOR_STNK_MOBIL, NAMA_MOBIL, TIPE_MOBIL, JENIS_TRANSMISI_MOBIL, JENIS_BAHAN_BAKAR_MOBIL, VOLUME_BAHAN_BAKAR_MOBIL, WARNA_MOBIL, KAPASITAS_PENUMPANG_MOBIL, FASILITAS_MOBIL, KATEGORI_ASET_MOBIL, PERIODE_KONTRAK_MULAI_MOBIL, PERIODE_KONTRAK_AKHIR_MOBIL, TANGGAL_TERAKHIR_KALI, VOLUME_BAGASI_MOBIL, HARGA_SEWA_MOBIL, STATUS_KETERSEDIAAN_MOBIL, GAMBAR_MOBIL, NAMA_PEMILIK, NOMOR_TELEPON_PEMILIK from aset_mobil join pemilik_kendaraan using (id_pemilik) where id_mobil='$id_mobil'") or die(mysqli_error($con));
        $user = mysqli_fetch_array($temp);
    }
    
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 style="color: #1f4063;">Data Aset Mobil</h4>
        <hr>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Aset Mobil</label>
                <input class="form-control" disabled value="<?php echo $user[0]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input class="form-control" disabled value="<?php echo $user[4]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipe</label>
                <input class="form-control" disabled value="<?php echo $user[5]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Warna</label>
                <input class="form-control" disabled value="<?php echo $user[9]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Plat</label>
                <input class="form-control" disabled value="<?php echo $user[2]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor STNK</label>
                <input class="form-control" disabled value="<?php echo $user[3]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Transmisi</label>
                <input class="form-control" disabled value="<?php echo $user[6]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Bahan Bakar</label>
                <input class="form-control" disabled value="<?php echo $user[7]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Volume Bahan Bakar</label>
                <input class="form-control" disabled value="<?php echo $user[8]; ?> liter">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Volume Bagasi</label>
                <input class="form-control" disabled value="<?php echo $user[16]; ?> mm">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kapasitas Penumpang</label>
                <input class="form-control" disabled value="<?php echo $user[10]; ?> orang">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fasilitas</label>
                <input class="form-control" disabled value="<?php echo $user[11]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Terakhir Kali Servis</label>
                <input class="form-control" disabled value="<?php echo $user[15]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Gambar</label>
                <input class="form-control" disabled value="<?php
                            if($user[19]==NULL) {
                                echo 'Belum ada data';
                            }else {
                                echo $user[19];
                            }
                        ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga Sewa</label>
                <input class="form-control" disabled value="Rp<?php echo $user[17]; ?>,00">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status Ketersediaan</label>
                <input class="form-control" disabled value="<?php
                            if($user[18]==0) {
                                echo 'Tidak Tersedia';
                            }else {
                                echo 'Tersedia';
                            }
                        ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kategori Aset</label>
                <input class="form-control" disabled value="<?php
                            if($user[12]==0) {
                                echo 'Milik Perusahaan';
                            }else {
                                echo 'Milik Mitra';
                            }
                        ?>">
            </div>

            <?php
                if($fetchKategoriAset[0] == 1) {
                    echo '<div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Pemilik Aset</label>
                    <input class="form-control" disabled value="'.$user[20].'">
                    </div>';

                    echo '<div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nomor Telepon Pemilik Aset</label>
                    <input class="form-control" disabled value="'.$user[21].'">
                    </div>';

                    echo '<div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Mulai Kontrak</label>
                    <input class="form-control" disabled value="'.$user[13].'">
                    </div>';

                    echo '<div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Selesai Kontrak</label>
                    <input class="form-control" disabled value="'.$user[14].'">
                    </div>';
                }
            ?>

            <div class="d-grid gap-2">
                <a href="./listAsetMobilAdministrasiPage.php" class="btn btn-danger" role="button" aria-disabled="true">Kembali</a>
            </div>
        
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
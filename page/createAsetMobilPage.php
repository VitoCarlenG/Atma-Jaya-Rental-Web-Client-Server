<?php
    include '../component/sidebarAdministrasi.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 style="color: #1f4063;">Tambah Aset Mobil</h4>
        <hr>
        <form action="../process/createAsetMobilProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Mobil</label>
                <input class="form-control" id="nama_mobil" name="nama_mobil" required placeholder="Nama Mobil" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipe Mobil</label>
                <input class="form-control" id="tipe_mobil" name="tipe_mobil" required placeholder="Tipe Mobil" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Warna</label>
                <input class="form-control" id="warna_mobil" name="warna_mobil" required placeholder="Warna" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Plat</label>
                <input class="form-control" id="plat_nomor_mobil" name="plat_nomor_mobil" required placeholder="Nomor Plat" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor STNK</label>
                <input class="form-control" id="nomor_stnk_mobil" name="nomor_stnk_mobil" required placeholder="Nomor STNK" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Transmisi</label>
                <input class="form-control" id="jenis_transmisi_mobil" name="jenis_transmisi_mobil" required placeholder="Jenis Transmisi" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Bahan Bakar</label>
                <input class="form-control" id="jenis_bahan_bakar_mobil" name="jenis_bahan_bakar_mobil" required placeholder="Jenis Bahan Bakar" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Volume Bahan Bakar</label>
                <input class="form-control" type="number" id="volume_bahan_bakar_mobil" name="volume_bahan_bakar_mobil" required placeholder="Volume Bahan Bakar (liter)" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Volume Bagasi</label>
                <input class="form-control" type="number" id="volume_bagasi_mobil" name="volume_bagasi_mobil" required placeholder="Volume Bagasi (mm)" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kapasitas Penumpang</label>
                <input class="form-control" type="number" id="kapasitas_penumpang_mobil" name="kapasitas_penumpang_mobil" required placeholder="Kapasitas Penumpang (orang)" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fasilitas</label>
                <input class="form-control" id="fasilitas_mobil" name="fasilitas_mobil" required placeholder="Fasilitas" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Terakhir Kali Servis</label>
                <input class="form-control" id="tanggal_terakhir_kali" name="tanggal_terakhir_kali" required placeholder="Tanggal Terakhir Kali Servis" type="date" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Gambar</label>
                <input class="form-control" type="url" id="gambar_mobil" name="gambar_mobil" placeholder="Link Gambar" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga Sewa</label>
                <input class="form-control" type="number" id="harga_sewa_mobil" name="harga_sewa_mobil" required placeholder="Harga Sewa (Rp)" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kategori Aset</label>
                <div class="mb-3">
                    <input checked onclick="document.getElementById('id_pemilik').hidden = true; document.getElementById('periode_kontrak_mulai_mobil').hidden = true; document.getElementById('periode_kontrak_akhir_mobil').hidden = true; document.getElementById('id_pemilik').required = false; document.getElementById('periode_kontrak_mulai_mobil').required = false; document.getElementById('periode_kontrak_akhir_mobil').required = false; document.getElementById('pemilik_aset').hidden = true; document.getElementById('tanggal_mulai_kontrak').hidden = true; document.getElementById('tanggal_selesai_kontrak').hidden = true;" type="radio" id="kategori_aset_mobil" name="kategori_aset_mobil" required value="0"/> Milik Perusahaan
                    <br><br>
                    <input onclick="document.getElementById('id_pemilik').hidden = false; document.getElementById('periode_kontrak_mulai_mobil').hidden = false; document.getElementById('periode_kontrak_akhir_mobil').hidden = false; document.getElementById('id_pemilik').required = true; document.getElementById('periode_kontrak_mulai_mobil').required = true; document.getElementById('periode_kontrak_akhir_mobil').required = true; document.getElementById('pemilik_aset').hidden = false; document.getElementById('tanggal_mulai_kontrak').hidden = false; document.getElementById('tanggal_selesai_kontrak').hidden = false;" type="radio" id="kategori_aset_mobil" name="kategori_aset_mobil" required value="1"/> Milik Mitra
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" id="pemilik_aset" class="form-label" hidden>Pemilik Aset</label>
                <select class="form-select" aria-label="Default select example" name="id_pemilik" id="id_pemilik" hidden placeholder="Daftar Mitra">
                    <?php
                        include('../db.php');

                        $query = mysqli_query($con, "SELECT * from pemilik_kendaraan") or die(mysqli_error($con));

                        echo '<option value="" selected hidden>Pilih Mitra</option>';

                        while($data = mysqli_fetch_array($query)) {
                            echo '<option value="'.$data[0].'">'.$data[0].' - '.$data[2].' - '.$data[4].'</option>';
                        }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" id="tanggal_mulai_kontrak" class="form-label" hidden>Tanggal Mulai Kontrak</label>
                <input class="form-control" name="periode_kontrak_mulai_mobil" id="periode_kontrak_mulai_mobil" hidden placeholder="Tanggal Mulai Kontrak" type="date" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" id="tanggal_selesai_kontrak" class="form-label" hidden>Tanggal Selesai Kontrak</label>
                <input class="form-control" name="periode_kontrak_akhir_mobil" id="periode_kontrak_akhir_mobil" hidden placeholder="Tanggal Selesai Kontrak" type="date" aria-describedby="emailHelp">
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="create">Tambah Aset Mobil</button>
                <a href="./listAsetMobilAdministrasiPage.php" class="btn btn-danger" role="button" aria-disabled="true">Batal</a>
            </div>
        </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include '../component/sidebarAdministrasi.php'
?>

<?php
    if(isset($_GET['id'])) {
        include '../db.php';
        
        $id_driver=$_GET['id'];

        $query = mysqli_query($con, "SELECT * FROM driver WHERE id_driver=$id_driver") or die(mysqli_error($con));
        $data = mysqli_fetch_array($query); 
    }
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 style="color: #1f4063;">Edit Driver</h4>
        <hr>
        <form action="../process/updateDriverProcess.php" method="post">
            <input type="hidden" name="id_driver" value="<?php echo $data[0]; ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                <input class="form-control" id="nama_driver" name="nama_driver" required placeholder="Nama Lengkap" aria-describedby="emailHelp" value="<?php echo $data[2]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
                <input class="form-control" id="alamat_driver" name="alamat_driver" required placeholder="Alamat Lengkap" aria-describedby="emailHelp" value="<?php echo $data[3]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                <input class="form-control" id="tanggal_lahir_driver" name="tanggal_lahir_driver" required placeholder="Tanggal Lahir" type="date" aria-describedby="emailHelp" value="<?php echo $data[4]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>

                <div class="mb-3">
                    <input type="radio" id="jenis_kelamin_driver" name="jenis_kelamin_driver" required value="1" <?php if($data[5] == 1) { echo 'checked';  } ?>/> Pria
                    <br><br>
                    <input type="radio" id="jenis_kelamin_driver" name="jenis_kelamin_driver" required value="0" <?php if($data[5] == 0) { echo 'checked';  } ?>/> Wanita
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input class="form-control" type="email" id="email_driver" name="email_driver" required placeholder="Email" aria-describedby="emailHelp" value="<?php echo $data[6]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                <input class="form-control" type="tel" id="nomor_telepon_driver" name="nomor_telepon_driver" required placeholder="Nomor Telepon" aria-describedby="emailHelp" value="<?php echo $data[7]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Bahasa</label>

                <div class="mb-3">
                    <input type="radio" id="bahasa_driver" name="bahasa_driver" required value="0" <?php if($data[8] == 0) { echo 'checked';  } ?>/> Bahasa Indonesia
                    <br><br>
                    <input type="radio" id="bahasa_driver" name="bahasa_driver" required value="1" <?php if($data[8] == 1) { echo 'checked';  } ?>/> Bahasa Indonesia + Bahasa Inggris
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga Sewa</label>
                <input class="form-control" type="number" id="harga_sewa_driver" name="harga_sewa_driver" required placeholder="Harga Sewa (Rp)" aria-describedby="emailHelp" value="<?php echo $data[16]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status Ketersediaan</label>

                <div class="mb-3">
                    <input type="radio" id="status_ketersediaan_driver" name="status_ketersediaan_driver" required value="1" <?php if($data[14] == 1) { echo 'checked'; } ?> /> Tersedia
                    <br><br>
                    <input type="radio" id="status_ketersediaan_driver" name="status_ketersediaan_driver" required value="0" <?php if($data[14] == 0) { echo 'checked'; } ?> /> Tidak Tersedia
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Foto</label>
                <input class="form-control" type="url" id="foto_driver" name="foto_driver" placeholder="Link Foto" aria-describedby="emailHelp" value="<?php echo $data[18]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link SIM</label>
                <input class="form-control" type="url" id="sim_driver" name="sim_driver" placeholder="Link SIM" aria-describedby="emailHelp" value="<?php echo $data[9]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Bebas Napza</label>
                <input class="form-control" type="url" id="bebas_napza_driver" name="bebas_napza_driver" placeholder="Link Bebas Napza" aria-describedby="emailHelp" value="<?php echo $data[10]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Kesehatan Jiwa</label>
                <input class="form-control" type="url" id="kesehatan_jiwa_driver" name="kesehatan_jiwa_driver" placeholder="Link Kesehatan Jiwa" aria-describedby="emailHelp" value="<?php echo $data[11]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Kesehatan Jasmani</label>
                <input class="form-control" type="url" id="kesehatan_jasmani_driver" name="kesehatan_jasmani_driver" placeholder="Link Kesehatan Jasmani" aria-describedby="emailHelp" value="<?php echo $data[12]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link SKCK</label>
                <input class="form-control" type="url" id="skck_driver" name="skck_driver" placeholder="Link SKCK" aria-describedby="emailHelp" value="<?php echo $data[13]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input class="form-control" type="password" id="password_driver" name="password_driver" placeholder="Password" aria-describedby="emailHelp" required>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="ubah" onclick="return confirm('Apakah Anda Yakin Ingin Meng-update Data Driver Ini?')">Edit Driver</button>
                <a href="./listDriverAdministrasiPage.php" class="btn btn-danger" role="button" aria-disabled="true">Batal</a>
            </div>
            </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
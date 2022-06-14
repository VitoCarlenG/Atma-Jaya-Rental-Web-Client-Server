<?php
    include '../component/sidebarAdministrasi.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 style="color: #1f4063;">Tambah Driver</h4>
        <hr>
        <form action="../process/createDriverProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                <input class="form-control" id="nama_driver" name="nama_driver" required placeholder="Nama Lengkap" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
                <input class="form-control" id="alamat_driver" name="alamat_driver" required placeholder="Alamat Lengkap" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                <input class="form-control" id="tanggal_lahir_driver" name="tanggal_lahir_driver" required placeholder="Tanggal Lahir" type="date" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>

                <div class="mb-3">
                    <input type="radio" id="jenis_kelamin_driver" name="jenis_kelamin_driver" required value="1"/> Pria
                    <br><br>
                    <input type="radio" id="jenis_kelamin_driver" name="jenis_kelamin_driver" required value="0"/> Wanita
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input class="form-control" type="email" id="email_driver" name="email_driver" required placeholder="Email" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                <input class="form-control" type="tel" id="nomor_telepon_driver" name="nomor_telepon_driver" required placeholder="Nomor Telepon" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Bahasa</label>

                <div class="mb-3">
                    <input type="radio" id="bahasa_driver" name="bahasa_driver" required value="0"/> Bahasa Indonesia
                    <br><br>
                    <input type="radio" id="bahasa_driver" name="bahasa_driver" required value="1"/> Bahasa Indonesia + Bahasa Inggris
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga Sewa</label>
                <input class="form-control" type="number" id="harga_sewa_driver" name="harga_sewa_driver" required placeholder="Harga Sewa (Rp)" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Foto</label>
                <input class="form-control" type="url" id="foto_driver" name="foto_driver" placeholder="Link Foto" aria-describedby="emailHelp">
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="create">Tambah Driver</button>
                <a href="./listDriverAdministrasiPage.php" class="btn btn-danger" role="button" aria-disabled="true">Batal</a>
            </div>
            </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include '../component/sidebarAdministrasi.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 style="color: #1f4063;">Tambah Pegawai</h4>
        <hr>
        <form action="../process/createPegawaiProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                <input class="form-control" id="nama_pegawai" name="nama_pegawai" required placeholder="Nama Lengkap" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                <select class="form-select" aria-label="Default select example" name="id_jabatan" id="id_jabatan" required placeholder="Pilih Jabatan">
                    <option value="" selected hidden>Pilih Jabatan</option>
                    <option value="1">Manager</option>
                    <option value="2">Administrasi</option>
                    <option value="3">Customer Service</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                <input class="form-control" id="tanggal_lahir_pegawai" name="tanggal_lahir_pegawai" required placeholder="Tanggal Lahir" type="date" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>

                <div class="mb-3">
                    <input type="radio" id="jenis_kelamin_pegawai" name="jenis_kelamin_pegawai" required value="1"/> Pria
                    <br><br>
                    <input type="radio" id="jenis_kelamin_pegawai" name="jenis_kelamin_pegawai" required value="0"/> Wanita
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
                <input class="form-control" id="alamat_pegawai" name="alamat_pegawai" required placeholder="Alamat Lengkap" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                <input class="form-control" type="tel" id="nomor_telepon_pegawai" name="nomor_telepon_pegawai" required placeholder="Nomor Telepon" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input class="form-control" type="email" id="email_pegawai" name="email_pegawai" required placeholder="Email" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Foto</label>
                <input class="form-control" type="url" id="foto_pegawai" name="foto_pegawai" placeholder="Link Foto" aria-describedby="emailHelp">
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="create">Tambah Pegawai</button>
                <a href="./listPegawaiPage.php" class="btn btn-danger" role="button" aria-disabled="true">Batal</a>
            </div>
            </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include '../component/sidebarAdministrasi.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 style="color: #1f4063;">Tambah Pemilik Aset</h4>
        <hr>
        <form action="../process/createPemilikAsetProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                <input class="form-control" id="nama_pemilik" name="nama_pemilik" required placeholder="Nama Lengkap" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor KTP</label>
                <input class="form-control" id="nomor_ktp_pemilik" name="nomor_ktp_pemilik" required placeholder="Nomor KTP" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
                <input class="form-control" id="alamat_pemilik" name="alamat_pemilik" required placeholder="Alamat Lengkap" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                <input class="form-control" type="tel" id="nomor_telepon_pemilik" name="nomor_telepon_pemilik" required placeholder="Nomor Telepon" aria-describedby="emailHelp">
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="create">Tambah Pemilik Aset</button>
                <a href="./listPemilikAsetPage.php" class="btn btn-danger" role="button" aria-disabled="true">Batal</a>
            </div>
            </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
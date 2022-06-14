<?php
    include '../component/sidebarManager.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 style="color: #1f4063;">Tambah Promo</h4>
        <hr>
        <form action="../process/createPromoProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Promo</label>
                <input class="form-control" id="kode_promo" name="kode_promo" required placeholder="Kode Promo" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Promo</label>
                <input class="form-control" id="jenis_promo" name="jenis_promo" required placeholder="Jenis Promo" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Keterangan Promo</label>
                <input class="form-control" id="keterangan_promo" name="keterangan_promo" required placeholder="Keterangan Promo" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Persenan Promo</label>
                <input class="form-control" id="persenan_promo" name="persenan_promo" required type="number" min="0" max="100" placeholder="Persenan Promo" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status Promo</label>

                <div class="mb-3">
                    <input type="radio" id="status_promo" name="status_promo" required value="1"/> Aktif
                    <br><br>
                    <input type="radio" id="status_promo" name="status_promo" required value="0"/> Tidak Aktif
                </div>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="create">Tambah Promo</button>
                <a href="./listPromoManagerPage.php" class="btn btn-danger" role="button" aria-disabled="true">Batal</a>
            </div>
            </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
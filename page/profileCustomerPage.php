<?php
    include '../component/sidebarCustomer.php'
?>

<?php
    include '../db.php';
        
    $user=$_SESSION['user'];
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 style="color: #1f4063;">Profile Customer</h4>
        <hr>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Customer</label>
                <input class="form-control" disabled value="<?php echo $user[1], $user[0]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input class="form-control" disabled value="<?php echo $user[2]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input class="form-control" disabled value="<?php echo $user[3]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                <input class="form-control" disabled value="<?php echo $user[4]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <input class="form-control" disabled value="<?php
                        if($user[5]==0) {
                            echo 'Wanita';
                        }else {
                            echo 'Pria';
                        }
                    ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input class="form-control" disabled value="<?php echo $user[6]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                <input class="form-control" disabled value="<?php echo $user[7]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Foto Tanda Pengenal</label>
                <input class="form-control" disabled value="<?php echo $user[8]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Foto SIM</label>
                <input class="form-control" disabled value="<?php
                        if($user[9]==NULL) {
                            echo 'Belum ada data';
                        }else {
                            echo $user[9];
                        }
                    ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status Verifikasi</label>
                <input class="form-control" disabled value="<?php
                        if($user[11]==0) {
                            echo 'Belum diverifikasi';
                        }
                        else {
                            echo 'Terverifikasi';
                        }
                    ?>">
            </div>

            <div class="d-grid gap-2">
                <a href="./updateProfileCustomerPage.php" class="btn btn-primary" role="button" aria-disabled="true">Edit Profile</a>
            </div>
        
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
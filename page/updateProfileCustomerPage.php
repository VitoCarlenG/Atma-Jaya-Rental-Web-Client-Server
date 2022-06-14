<?php
    include '../component/sidebarCustomer.php'
?>

<?php
    include '../db.php';
        
    $user=$_SESSION['user'];
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 style="color: #1f4063;">Edit Profile Customer</h4>
        <hr>
        
        <form action="../process/updateProfileCustomerProcess.php" method="post">
            <input type="hidden" name="id_customer" value="<?php echo $user[0]; ?>">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                <input class="form-control" id="nama_customer" name="nama_customer" required placeholder="Nama Lengkap" aria-describedby="emailHelp" value="<?php echo $user[2]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
                <input class="form-control" id="alamat_customer" name="alamat_customer" required placeholder="Alamat Lengkap" aria-describedby="emailHelp" value="<?php echo $user[3]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                <input class="form-control" id="tanggal_lahir_customer" name="tanggal_lahir_customer" required placeholder="Tanggal Lahir" type="date" aria-describedby="emailHelp" value="<?php echo $user[4]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>

                <div class="mb-3">
                    <input type="radio" id="jenis_kelamin_customer" name="jenis_kelamin_customer" required value="1" <?php if($user[5] == 1) { echo 'checked';  } ?>/> Pria
                    <br><br>
                    <input type="radio" id="jenis_kelamin_customer" name="jenis_kelamin_customer" required value="0" <?php if($user[5] == 0) { echo 'checked';  } ?>/> Wanita
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                <input class="form-control" type="tel" id="nomor_telepon_customer" name="nomor_telepon_customer" required placeholder="Nomor Telepon" aria-describedby="emailHelp" value="<?php echo $user[7]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input class="form-control" type="email" id="email_customer" name="email_customer" required placeholder="Email" aria-describedby="emailHelp" value="<?php echo $user[6]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Foto Tanda Pengenal</label>
                <input class="form-control" type="url" required id="tanda_pengenal_customer" name="tanda_pengenal_customer" placeholder="Link Foto Tanda Pengenal" aria-describedby="emailHelp" value="<?php echo $user[8]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Foto SIM</label>
                <input class="form-control" type="url" id="sim_customer" name="sim_customer" placeholder="Link Foto SIM" aria-describedby="emailHelp" value="<?php echo $user[9]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input class="form-control" type="password" id="password_customer" name="password_customer" required placeholder="Password" aria-describedby="emailHelp">
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="ubah" onclick="return confirm('Apakah Anda Yakin Ingin Meng-update Profile?')">Edit Profile</button>
                <a href="./profileCustomerPage.php" class="btn btn-danger" role="button" aria-disabled="true">Batal</a>
            </div>
        </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
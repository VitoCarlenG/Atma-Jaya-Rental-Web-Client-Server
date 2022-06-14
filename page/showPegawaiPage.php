<?php
    include '../component/sidebarAdministrasi.php'
?>

<?php
    include '../db.php';
        
    $id_pegawai = $_GET['id'];
    $temp = mysqli_query($con, "SELECT * from pegawai where id_pegawai='$id_pegawai'") or die(mysqli_error($con));
    $user = mysqli_fetch_array($temp);
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 style="color: #1f4063;">Data Pegawai</h4>
        <hr>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Pegawai</label>
                <input class="form-control" disabled value="<?php echo $user[0]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input class="form-control" disabled value="<?php echo $user[2]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                <input class="form-control" disabled value="<?php
                            if($user[1]==1) {
                                echo 'Manager';
                            }else if($user[1]==2) {
                                echo 'Administrasi';
                            }else {
                                echo 'Customer Service';
                            }
                        ?>">
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
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input class="form-control" disabled value="<?php echo $user[6]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                <input class="form-control" disabled value="<?php echo $user[7]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input class="form-control" disabled value="<?php echo $user[8]; ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Foto</label>
                <input class="form-control" disabled value="<?php
                        if($user[3]==NULL) {
                            echo 'Belum ada data';
                        }else {
                            echo $user[3];
                        }
                    ?>">
            </div>

            <div class="d-grid gap-2">
                <a href="./listPegawaiPage.php" class="btn btn-danger" role="button" aria-disabled="true">Kembali</a>
            </div>
        
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
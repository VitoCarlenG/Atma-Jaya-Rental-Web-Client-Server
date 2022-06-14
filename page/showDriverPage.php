<?php
    include '../component/sidebarAdministrasi.php'
?>

<?php
    include '../db.php';
        
    $id_driver = $_GET['id'];
    $temp = mysqli_query($con, "SELECT * from driver where id_driver='$id_driver'") or die(mysqli_error($con));
    $user = mysqli_fetch_array($temp);
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 style="color: #1f4063;">Data Driver</h4>
        <hr>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Driver</label>
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
                <label for="exampleInputEmail1" class="form-label">Bahasa</label>
                <input class="form-control" disabled value="<?php
                            if($user[8]==0) {
                                echo 'Bahasa Indonesia';
                            }else {
                                echo 'Bahasa Indonesia + Bahasa Inggris';
                            }
                        ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga Sewa</label>
                <input class="form-control" disabled value="<?php if($user[16]==NULL){echo 'Rp-';} else{echo 'Rp', $user[16], ',00';} ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Rerata Rating</label>
                <input class="form-control" disabled value="<?php if($user[17]==NULL){echo '0';} else{echo $user[17];} ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status Ketersediaan</label>
                <input class="form-control" disabled value="<?php
                            if($user[14]==0) {
                                echo 'Tidak Tersedia';
                            }else {
                                echo 'Tersedia';
                            }
                        ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Foto</label>
                <input class="form-control" disabled value="<?php
                            if($user[18]==NULL) {
                                echo 'Belum ada data';
                            }else {
                                echo $user[18];
                            }
                        ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link SIM</label>
                <input class="form-control" disabled value="<?php
                            if($user[9]==NULL) {
                                echo 'Belum ada data';
                            }else {
                                echo $user[9];
                            }
                        ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Bebas Napza</label>
                <input class="form-control" disabled value="<?php
                            if($user[10]==NULL) {
                                echo 'Belum ada data';
                            }else {
                                echo $user[10];
                            }
                        ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Kesehatan Jiwa</label>
                <input class="form-control" disabled value="<?php
                            if($user[11]==NULL) {
                                echo 'Belum ada data';
                            }else {
                                echo $user[11];
                            }
                        ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Kesehatan Jasmani</label>
                <input class="form-control" disabled value="<?php
                            if($user[12]==NULL) {
                                echo 'Belum ada data';
                            }else {
                                echo $user[12];
                            }
                        ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link SKCK</label>
                <input class="form-control" disabled value="<?php
                            if($user[13]==NULL) {
                                echo 'Belum ada data';
                            }else {
                                echo $user[13];
                            }
                        ?>">
            </div>

            <div class="d-grid gap-2">
                <a href="./listDriverAdministrasiPage.php" class="btn btn-danger" role="button" aria-disabled="true">Kembali</a>
            </div>
        
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
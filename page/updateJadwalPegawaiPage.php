<?php
    include '../component/sidebarManager.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 style="color: #1f4063;">Edit Jadwal Pegawai</h4>
        <hr>
        <form action="../process/updateJadwalPegawaiProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pegawai</label>
               
                <select class="form-select" aria-label="Default select example" name="id_pegawai" id="id_pegawai" required placeholder="Daftar Pegawai">
                    <?php
                        include('../db.php');

                        $id_pegawai = $_GET['id_pegawai'];

                        //$query = mysqli_query($con, "SELECT id_pegawai, nama_pegawai, nama_jabatan from pegawai join jabatan using (id_jabatan)") or die(mysqli_error($con));
                        $queryTemp = mysqli_query($con, "SELECT id_pegawai, nama_pegawai, nama_jabatan from pegawai join jabatan using (id_jabatan) where id_pegawai=$id_pegawai") or die(mysqli_error($con));
                        $fetchQueryTemp = mysqli_fetch_array($queryTemp);

                        echo '<option value="'.$fetchQueryTemp[0].'" selected>'.$fetchQueryTemp[0].' - '.$fetchQueryTemp[1].' - '.$fetchQueryTemp[2].'</option>';

                    ?>
                </select>
            </div>
            
            <?php
                $old_id_jadwal = $_GET['id_jadwal'];
            ?>
            
            <input type="hidden" name="old_id_jadwal" value="<?php echo $old_id_jadwal; ?>">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jadwal</label>
               
                <select class="form-select" aria-label="Default select example" name="id_jadwal" id="id_jadwal" required placeholder="Daftar Jadwal">
                    <?php
                        include('../db.php');
            
                        $id_jadwal = $_GET['id_jadwal'];

                        $query3 = mysqli_query($con, "SELECT * from shift") or die(mysqli_error($con));
                        $query3Temp = mysqli_query($con, "SELECT * from shift where id_jadwal=$id_jadwal") or die(mysqli_error($con));
                        $fetchQuery3Temp = mysqli_fetch_array($query3Temp);

                        echo '<option value="'.$fetchQuery3Temp[0].'" selected hidden>'.$fetchQuery3Temp[0].' - '.$fetchQuery3Temp[1].' - Shift '.$fetchQuery3Temp[2].'</option>';

                        while($query4 = mysqli_fetch_array($query3)) {
                            echo '<option value="'.$query4[0].'">'.$query4[0].' - '.$query4[1].' - Shift '.$query4[2].'</option>';
                        }
                    ?>
                </select>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="ubah" onclick="return confirm('Apakah Anda Yakin Ingin Meng-update Data Jadwal Pegawai Ini?')">Edit Jadwal Pegawai</button>
                <a href="./listJadwalPegawaiPage.php" class="btn btn-danger" role="button" aria-disabled="true">Batal</a>
            </div>
            </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include '../component/sidebarManager.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <div class="title" style="justify-content: space-between; display: flex;">
            <h4 style="color: #1f4063;">Daftar Jadwal Pegawai</h4>
            <a href="./createJadwalPegawaiPage.php">
                <button type="button" class="btn btn-danger">Tambah</button>
            </a>
        </div>
        
        <hr>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Jabatan Pegawai</th>
                <th scope="col">Hari Kerja</th>
                <th scope="col">Shift Kerja</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            
            <form action="./listJadwalPegawaiPage.php" method="post">
                <input class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Cari Berdasarkan Nama Pegawai" aria-describedby="emailHelp">
                <button type="submit" hidden class="btn btn-success" name="cari">Cari</button>
            </form>

            <tbody>
                <?php

                if(isset($_POST['cari'])){
                    include('../db.php');

                    $nama_pegawai = $_POST['nama_pegawai'];

                    $query = mysqli_query($con, "SELECT nama_pegawai, nama_jabatan, hari_jadwal, shift_jadwal, id_pegawai, id_jadwal FROM detail_jadwal join pegawai using (id_pegawai) join shift using (id_jadwal) join jabatan using (id_jabatan) WHERE nama_pegawai LIKE '%$nama_pegawai%'") or die(mysqli_error($con));
                }else{
                    $query = mysqli_query($con, "SELECT nama_pegawai, nama_jabatan, hari_jadwal, shift_jadwal, id_pegawai, id_jadwal FROM detail_jadwal join pegawai using (id_pegawai) join shift using (id_jadwal) join jabatan using (id_jabatan)") or die(mysqli_error($con));
                }

                if(mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak Ada Data Jadwal Pegawai </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_array($query)){
                    echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data[0].'</td>
                            <td>'.$data[1].'</td>
                            <td>'.$data[2].'</td>
                            <td>'.$data[3].'</td>';
                            
                            echo'
                            <td>

                                <a href="./updateJadwalPegawaiPage.php?id_pegawai='.$data[4].'&id_jadwal='.$data[5].'">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                </a>
                                <a href="../process/deleteJadwalPegawaiProcess.php?id_pegawai='.$data[4].'&id_jadwal='.$data[5].'"
                                    onClick="return confirm ( \'Apakah Anda Yakin Ingin Menghapus Data Jadwal Pegawai Ini?\')">
                                    <button type="button" class="btn btn-secondary">Hapus</button>
                                </a>
                            </td>
                        </tr>';
                    $no++;
                    }
                }
            ?>
            </tbody>
            </table>
    </div>
    </aside>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></swindow.location>
</body>
</html>
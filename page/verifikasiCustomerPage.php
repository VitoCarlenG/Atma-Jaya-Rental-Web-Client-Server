<?php
    include '../component/sidebarCustomerService.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <div class="title" style="justify-content: space-between; display: flex;">
            <h4 style="color: #1f4063;">Verifikasi Customer</h4>
        </div>
        
        <hr>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Customer</th>
                <th scope="col">Email</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            
            <form action="./verifikasiCustomerPage.php" method="post">
                <input class="form-control" id="nama_customer" name="nama_customer" placeholder="Cari Berdasarkan Nama Customer" aria-describedby="emailHelp">
                <button type="submit" hidden class="btn btn-success" name="cari">Cari</button>
            </form>

            <tbody>
                <?php

                if(isset($_POST['cari'])){
                    include('../db.php');

                    $nama_customer = $_POST['nama_customer'];

                    $query = mysqli_query($con, "SELECT id_customer, nama_customer, email_customer, nomor_telepon_customer FROM customer WHERE nama_customer LIKE '%$nama_customer%' AND verifikasi_customer=0") or die(mysqli_error($con));
                }else{
                    $query = mysqli_query($con, "SELECT id_customer, nama_customer, email_customer, nomor_telepon_customer FROM customer WHERE verifikasi_customer=0") or die(mysqli_error($con));
                }

                if(mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak Ada Data Customer </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_array($query)){
                    echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data[1].'</td>
                            <td>'.$data[2].'</td>
                            <td>'.$data[3].'</td>
                            <td>
                                <a href="./showCustomerPage.php?id='.$data[0].'">
                                    <button type="button" class="btn btn-info">Show</button>
                                </a>

                                <a href="../process/verifikasiCustomerProcess.php?id='.$data[0].'"
                                    onClick="return confirm ( \'Apakah Anda Yakin Ingin Memverifikasi Data Customer Ini?\')">
                                    <button type="button" class="btn btn-success">Verify</button>
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
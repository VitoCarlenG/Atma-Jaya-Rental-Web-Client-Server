<?php
    include '../component/sidebarCustomer.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <div class="title" style="justify-content: space-between; display: flex;">
            <h4 style="color: #1f4063;">Riwayat Transaksi</h4>
        </div>
        
        <hr>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nomor Transaksi</th>
                <th scope="col">Tgl Transaksi</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php

                include('../db.php');

                $user=$_SESSION['user'];
                $id_customer=$user[0];

                $query = mysqli_query($con, "SELECT format_nomor_transaksi, nomor_transaksi, tanggal_transaksi, status_transaksi, rating_driver, rating_rental, id_driver FROM transaksi where id_customer='$id_customer' AND (status_transaksi='Selesai' OR status_transaksi='Ditolak')") or die(mysqli_error($con));
          

                if(mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak Ada Riwayat Transaksi </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_array($query)){
                    echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <th scope="row">'.$data[0], $data[1].'</th>
                            <td>'.$data[2].'</td>
                            <td>'.$data[3].'</td>
                            <td>';
                            
                                if($data[3]=='Selesai') {
                                    echo'
                                    <a href="./showNotaTransaksiCustomerPage.php?id='.$data[1].'">
                                        <button type="button" class="btn btn-success">Nota</button>
                                    </a>';
                                }else {
                                    echo '-';
                                }

                                if($data[3]=='Selesai' && $data[6]==NULL) {
                                    if($data[5]==NULL) {
                                        echo'
                                        <a href="./createRatingTransaksiPage.php?id='.$data[1].'&stats=0">
                                            <button type="button" class="btn btn-info">Rate</button>
                                        </a>';
                                    }
                                }else if($data[3]=='Selesai' && $data[6]!=NULL) {
                                    if($data[4]==NULL && $data[5]==NULL) {
                                        echo'
                                        <a href="./createRatingTransaksiPage.php?id='.$data[1].'&stats=1&id_driver='.$data[6].'">
                                            <button type="button" class="btn btn-info">Rate</button>
                                        </a>';
                                    }
                                }

                                echo ' 
                                
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
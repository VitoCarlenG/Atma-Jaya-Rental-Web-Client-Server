<?php
    include '../component/sidebarCustomer.php'
?>

<?php
    include('../db.php');

    $user=$_SESSION['user'];
    $id=$_GET['id'];

    $id_customer=$user[0];
    
    $query2 = mysqli_query($con, "SELECT sim_customer FROM customer where id_customer='$id_customer'") or die(mysqli_error($con));
    $data2 = mysqli_fetch_array($query2);

    if($data2[0]==NULL) {
        echo '<script>alert("Silahkan Melengkapi Data SIM Anda Terlebih Dahulu!"); window.location = "./profileCustomerPage.php"</script>';
    }else {
        if(isset($_POST['create'])) {
            include('../db.php');

            $tanggal_waktu_mulai_sewa=$_POST['tanggal_waktu_mulai_sewa'];
            $tanggal_waktu_selesai_sewa=$_POST['tanggal_waktu_selesai_sewa'];

            $date1=new DateTime($tanggal_waktu_mulai_sewa);
            $date2=new DateTime($tanggal_waktu_selesai_sewa);
            $tanggal_waktu_sewa=$date1->diff($date2);

            $date3=new DateTime();

            if($date1<$date3) {
                echo
                '<script>
                alert("Tanggal Waktu Mulai Sewa Tidak Boleh Lebih Kecil Dari Tanggal Waktu Sekarang!"); window.location = "./updateCreateTransaksiWithoutDriverPage.php?id='.$id.'"
                </script>';
            }else if($tanggal_waktu_sewa->days<1) {
                echo
                '<script>
                alert("Durasi Waktu Sewa Minimal Sehari!"); window.location = "./updateCreateTransaksiWithoutDriverPage.php?id='.$id.'"
                </script>';
            }else {
                $_SESSION['tanggal_waktu_mulai_sewa'] = $tanggal_waktu_mulai_sewa;
                $_SESSION['tanggal_waktu_selesai_sewa'] = $tanggal_waktu_selesai_sewa;

                echo '<script>window.location = "./updateListAsetMobilCustomerPage.php?stats=0&tanggal_waktu_sewa='.$tanggal_waktu_sewa->days.'&id='.$id.'"</script>';
            }
            
        }

        echo '

        <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >

        <h4 style="color: #1f4063;">Pilih Tanggal Waktu Sewa</h4>
        
        <hr>

        <form action="./updateCreateTransaksiWithoutDriverPage.php?id='.$id.'" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Waktu Mulai Sewa</label>
                <input class="form-control" name="tanggal_waktu_mulai_sewa" id="tanggal_waktu_mulai_sewa" placeholder="Tanggal Waktu Mulai Sewa" required type="datetime-local" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Waktu Selesai Sewa</label>
                <input class="form-control" name="tanggal_waktu_selesai_sewa" id="tanggal_waktu_selesai_sewa" placeholder="Tanggal Waktu Selesai Sewa" required type="datetime-local" aria-describedby="emailHelp">
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="create">Lanjutkan</button>
                <a href="./updateGetStartedPage.php?id='.$id.'" class="btn btn-danger" role="button" aria-disabled="true">Kembali</a>
            </div>
        </form>
            
        </div>
        </aside>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></swindow.location>
        </body>
        </html>';
    }
?>
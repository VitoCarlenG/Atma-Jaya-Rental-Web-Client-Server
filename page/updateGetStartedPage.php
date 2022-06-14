<?php
    include '../component/sidebarCustomer.php'
?>

<?php
    include('../db.php');

    $user=$_SESSION['user'];
    $id=$_GET['id'];

    if($user[11] == 0) {
        echo '<script>alert("Dokumen Customer Belum Diverifikasi"); window.location = "./profileCustomerPage.php"</script>';
    }else {
        echo '
            <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1f4063; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <h4 style="color: #1f4063;">Pilih Transaksi</h4>
            <hr>
                <div class="d-grid gap-2">
                    <a href="./updateCreateTransaksiWithDriverPage.php?id='.$id.'" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Penyewaan Mobil Dengan Driver</a>
                    <a href="./updateCreateTransaksiWithoutDriverPage.php?id='.$id.'" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Penyewaan Mobil Tanpa Driver</a>
                </div>
                <br>
                <div class="d-grid gap-2">
                    <a href="./showTransaksiBerjalanPage.php" class="btn btn-outline-secondary" role="button" aria-disabled="true">Lihat Transaksi Yang Sedang Berjalan</a>
                </div>
            
            </div>
        </aside>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
        </html>';
    }
?>
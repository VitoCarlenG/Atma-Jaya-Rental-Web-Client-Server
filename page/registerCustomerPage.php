<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="../style.css" rel="stylesheet">

        <link rel="icon" href="../resource/AJR.png" type="image/ico">
        <title>Atma Jaya Rental</title>
    </head>

    <body style="overflow-y: hidden; overflow-x: hidden;">
        <nav class="navbar navbar-dark fixed-top">
            <div class="container">
                <a href="../index.php">
                    <img src="../resource/Logo.png" alt="Atma Jaya Rental" style="width: 220px;">
                </a>

                <img src="../resource/Slogan.png" alt="Harga Pas, Hati Senang" style="width: 245px;">
            </div>
        </nav>

        <div class="bg bg-light text-dark" style="background-image: url('../resource/Background.png');">
            <div class="container min-vh-100 d-flex align-items-center justify-content-center" style="padding-top: 5%;">
                <div class="card text-dark bg-light ma-5 shadow " style="min-width: 55rem;">
                    <div class="card-header fw-bold">Register</div>
                    <div class="card-body">
                        <form action="../process/registerCustomerProcess.php" method="post">

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input class="form-control" id="nama_customer" name="nama_customer" required placeholder="Nama Lengkap" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
                                <input class="form-control" id="alamat_customer" name="alamat_customer" required placeholder="Alamat Lengkap" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                                <input class="form-control" type="date" id="tanggal_lahir_customer" required name="tanggal_lahir_customer" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>

                                <div class="mb-3">
                                    <input type="radio" id="jenis_kelamin_customer" name="jenis_kelamin_customer" required value="1"/> Pria
                                    &nbsp;
                                    <input type="radio" id="jenis_kelamin_customer" name="jenis_kelamin_customer" required value="0"/> Wanita
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input class="form-control" type="email" id="email_customer" required placeholder="Example@gmail.com" name="email_customer" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                                <input class="form-control" type="tel" id="nomor_telepon_customer" required placeholder="Nomor Telepon" name="nomor_telepon_customer" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanda Pengenal</label>
                                <input class="form-control" type="url" id="tanda_pengenal_customer" required name="tanda_pengenal_customer" placeholder="Link Foto KTP/Kartu Pelajar" aria-describedby="emailHelp">
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="register">Register</button>
                            </div>

                        </form>
                        <p class="mt-2 mb-0">Sudah punya akun? <a href="./loginPage.php" class="text-primary">Login Disini!</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="id">
<?php
session_start();
require_once("config/koneksi.php");

if (isset($_SESSION["email"])) {

    if (isset($_POST['batalkan_btn'])) {
        $id_penjualan = $_POST['id_penjualan'];

        // Hapus data pemesanan dari database
        $delete_query = mysqli_query($koneksi, "DELETE FROM penjualan WHERE id_penjualan = '$id_penjualan'");

        if ($delete_query) {
            header('location:pemesanan.php');
        } else {
            echo "Gagal membatalkan pemesanan.php";
        }
    }

    if (isset($_POST['submit_bukti'])) {
        $folder = 'assets/images/penjualan/';

        if (isset($_FILES['bukti_transfer']) && $_FILES['bukti_transfer']['error'] == 0) {
            $name_p = $_FILES['bukti_transfer']['name'];
            $sumber_p = $_FILES['bukti_transfer']['tmp_name'];

            move_uploaded_file($sumber_p, $folder . $name_p);

            // Update the existing record with the uploaded file name
            $id_penjualan = $_POST['id_penjualan'];
            $update_query = mysqli_query($koneksi, "UPDATE penjualan SET bukti_transfer = '$name_p' WHERE id_penjualan = '$id_penjualan'");

            if ($update_query) {
                echo 'Berhasil di bayar';
            } else {
                echo 'Gagal update bukti pembayaran';
            }
        } else {
            echo 'Gagal upload bukti pembayaran';
        }
    }

?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>VIC COMP | Desk Setup Store</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/checkout.css">
    <link rel="stylesheet" href="assets/css/order.css">

</head>

<body>
    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <h2>VIC COMP <em>STORE</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">More</a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="about-us.php">About Us</a>
                                <a class="dropdown-item" href="blog.php">Blog</a>
                                <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                            </div>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="checkout.php">Checkout</a></li>

                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                        <?php
                        if (isset($_SESSION['email'])) { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="true" aria-expanded="false">Account</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="akun.php">My Account</a>
                                    <a class="dropdown-item active" href="pemesanan.php">Order History</a>
                                    <a class="dropdown-item" href="logout.php">logout</a>
                                </div>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item"><a class="nav-link" href="login.php">Sign in</a></li>
                        <?php } ?>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <style>
        .riwayat {
            margin: 50px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-action {
            margin-right: 5px;
        }
    </style>

    <!-----etok------>
    <br><br><br>
    <div class="container riwayat pemesanan">
        <h2>Riwayat Pemesanan</h2>
        <h5>Notes : Transfer melalui Rekening berikut :</h5>
        <h5>DANA : 083157476170 <br> Transfer bank : 0702222056(BCA)</h5>

        <table>
            <form action="" method="post" enctype="multipart/form-data">
                <thead class="table pemesanan">
                    <tr>
                        <th>ID</th>
                        <th>Nama Pembeli</th>
                        <th>Email Pembeli</th>
                        <th>Nama Produk</th>
                        <th>Total Tagihan</th>
                        <th>Waktu Pembelian</th>
                        <th>Status</th>
                        <th>Bayar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM penjualan WHERE email = '{$_SESSION['email']}'");
                    if ($sql) {
                        while ($result = mysqli_fetch_array($sql)) {
                    ?>
                            <tr>
                                <td><?php echo $result['id_penjualan']; ?></td>
                                <td><?php echo $result['nama']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $result['jumlah_produk']; ?></td>
                                <td><?php echo number_format($result['total_tagihan'], 0, ',', '.'); ?></td>
                                <td><?php echo $result['date']; ?></td>
                                <td><?php echo $result['status']; ?></td>
                                <td>
                                    <input type="file" name="bukti_transfer">
                                </td>
                                <td>
                                    <!-- Tombol Bayar -->
                                    <form method='post' action='pemesanan.php'>
                                        <input type='hidden' name='id_penjualan' value='<?php echo $result['id_penjualan']; ?>'>
                                        <button type='submit' class='btn btn-success' name='submit_bukti'>Bayar</button>
                                    </form>

                                    <!-- Tombol Batalkan -->
                                    <form method='post' action='pemesanan.php' onsubmit="return confirm('Apakah anda yakin ingin membatalkan pemesanan?');">
                                        <input type='hidden' name='id_penjualan' value='<?php echo $result['id_penjualan']; ?>'>
                                        <button type='submit' class='btn btn-danger' name='batalkan_btn'>Batalkan</button>
                                    </form>
                                </td>
                            </tr>
                    <?php
                        }

                    }
                    ?>
                </tbody>
            </form>
        </table>

    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright © 2023 VIC COMP - Create by: <a href="https://www.adtyawd/">adtyawd</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>

</body>

</html>

<?php
} else { ?>
    <script>
        alert("Harap LOGIN terlebih dahulu");
        window.location.href = 'index.php';
    </script>
<?php
}
?>

<?php
if (isset($_POST['submit_produk'])) {
    $folder = '../assets/images/produk/';
    $name_p = $_FILES['gambar']['name'];
    $sumber_p = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($sumber_p, $folder.$name_p);
    
    $id_produk = $_POST['id_produk'];
    $merk = $_POST['merk'];
    $deskripsi = $_POST['deskripsi'];
    $harga_awal = $_POST['harga_awal'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];

    $insert = mysqli_query($koneksi, "INSERT INTO produk (gambar, id_produk, merk, deskripsi, harga_awal, harga, status) VALUES ('$name_p', '$id_produk', '$merk', '$deskripsi','$harga_awal', '$harga', '$status')");

    if($insert){
        echo 'Data berhasil disimpan';
      } else {
        echo 'Gagal disimpan';
      }
}
?>
<div>
    <section class="panel">
        <h2 align="center">Halaman Tambah produk</h2>
        <a href="index.php?page=produk"> << Kembali ke Produk Management</a>
        <form method="post" action="" enctype="multipart/form-data">
            <input type="text" name="id_produk" placeholder="ID Produk" class="form-control"> <br>
            <input type="file" name="gambar" class="form-control"> <br>
            <input type="text" name="merk" placeholder="Merk" class="form-control"> <br>
            <input type="text" name="harga_awal" placeholder="Harga Awal" class="form-control"> <br>
            <input type="text" name="harga" placeholder="Harga" class="form-control"> <br>
            <input type="text" name="deskripsi" placeholder="Deskripsi" class="form-control"> <br>
            <select name="status" class="form-control">
                <option value="tersedia">Tersedia</option>
                <option value="dipinjam">Habis</option>
            </select><br>
            <input type="submit" name="submit_produk" value="Tambah Produk" class="submit">
        </form>
    </section>
</div>

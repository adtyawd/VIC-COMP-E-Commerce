<div class="col-lg-12"><h3>Data produk</h3></div>
<?php
    if(isset($_GET['action'])){
        if($_GET['action']=="hapus"){
            $id = $_GET['id'];
            $sql = mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk = '$id'");
            if($sql){
                echo 'produk berhasil dihapus';
            } else {
                echo 'produk gagal dihapus';
            }
        }
    }
?>

<div class="col-lg-12">
    <section class="panel">
        <a href="index.php?page=adm_tambah_produk" class="btn btn-success">TAMBAH</a>
        <table class="table">
            <tr>
                <th>Gambar</th>
                <th>Merk</th>
                <th>Harga Awal</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM produk");
            $no = 1;
            if ($sql) {
                while ($result = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td><?php echo $result['gambar']; ?></td>
                        <td><?php echo $result['merk']; ?></td>
                        <td><?php echo $result['harga_awal']; ?></td>
                        <td><?php echo $result['harga']; ?></td>
                        <td><?php echo $result['deskripsi']; ?></td>
                        <td><?php echo $result['status']; ?></td>
                        <td>
                            <a href="index.php?page=adm_edit_produk&id=<?php echo $result['id_produk']; ?>"
                                class="btn btn-warning">EDIT</a>
                            <!-- Tambahkan konfirmasi di dalam atribut onclick -->
                            <a href="javascript:void(0);" onclick="konfirmasiHapus('<?php echo $result['id_produk']; ?>')"
                                class="btn btn-danger">HAPUS</a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </section>
</div>

<!-- Tambahkan bagian ini untuk menampilkan alert konfirmasi -->
<script>
    function konfirmasiHapus(id) {
        var konfirmasi = confirm("Apakah anda ingin menghapus produk ini?");

        if (konfirmasi) {
            // Redirect ke halaman dengan aksi hapus jika pengguna menekan OK
            window.location.href = "index.php?page=produk&action=hapus&id=" + id;
        }
        // Jika pengguna menekan Cancel, tidak ada tindakan yang diambil
    }
</script>


<style>
    .thumbnail-img {
        width: 100px; /* Sesuaikan lebar thumbnail sesuai kebutuhan */
        height: auto; /* Tinggi otomatis disesuaikan agar menjaga rasio aspek gambar */
        display: block; /* Membuat gambar menjadi blok agar dapat diberi margin atau padding */
        margin: 0 auto; /* Memberi margin otomatis ke kiri dan kanan untuk memusatkan thumbnail */
    }
</style>



<div class="col-lg-12"><h3>Data penjualan</h3></div>
<?php
    if(isset($_GET['action'])){
        if($_GET['action']=="hapus"){
            $id = $_GET['id'];
            $sql = mysqli_query($koneksi, "DELETE FROM penjualan WHERE id_penjualan = '$id'");
            if($sql){
                echo 'penjualan berhasil dihapus';
            } else {
                echo 'penjualan gagal dihapus';
            }
        }
    }

    if (isset($_POST['proses_btn'])) {
        $id_penjualan = $_POST['id_penjualan'];
        $status = $_POST['status'];
    
        // Update status di database
        $update_query = mysqli_query($koneksi, "UPDATE penjualan SET status = '$status' WHERE id_penjualan = '$id_penjualan'");
    
        if ($update_query) {
            echo 'Status penjualan berhasil diperbarui';
        } else {
            echo 'Gagal memperbarui status penjualan';
        }
    } else {
        echo 'Aksi tidak valid';
    }
?>

<div class="col-lg-12">
    <section class="panel">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Produk dan Jumlah</th>
                <th>Nama Pembeli</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>No Phone</th>
                <th>Metode Pembayaran</th>
                <th>Total Tagihan</th>
                <th>Tanggal</th>
                <th>Bukti Tf</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM penjualan");
            $no = 1;
            if ($sql) {
                while ($result = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td><?php echo $result['id_penjualan']; ?></td>
                        <td><?php echo $result['jumlah_produk']; ?></td>
                        <td><?php echo $result['nama']; ?></td>
                        <td><?php echo $result['email']; ?></td>
                        <td><?php echo $result['alamat']; ?></td>
                        <td><?php echo $result['no_telp']; ?></td>
                        <td><?php echo $result['metode_pembayaran']; ?></td>
                        <td><?php echo $result['total_tagihan']; ?></td>
                        <td><?php echo $result['date']; ?></td>
                        <td>
                            <a href="../assets/images/penjualan/<?php echo $result['bukti_transfer']; ?>" data-lightbox="bukti-transfer">
                                <img src="../assets/images/penjualan/<?php echo $result['bukti_transfer']; ?>" alt="" class="thumbnail-img">
                            </a>
                        </td>
                        <td>
                        <form method="post" action="">
                            <input type="hidden" name="id_penjualan" value="<?php echo $result['id_penjualan']; ?>">
                            <select name="status" class="form-select">
                                <option selected><?php echo $result['status']; ?></option>
                                <option value="Verifikasi Pembayaran">Verifikasi Pembayaran</option>
                                <option value="Sedang Dikemas">Sedang Dikemas</option>
                                <option value="Sedang Diantar">Sedang Diantar</option>
                                <option value="Pesanan Berhasil">Pesanan Berhasil</option>
                                <option value="Pesanan Gagal">Pesanan Gagal</option>
                                <option value="Pesanan Batal">Pesanan Batal</option>
                            </select>
                        
                    </td>
                        <td>
                        <button type="submit" class="btn btn-success" name="proses_btn">Proses</button>
                            <!-- Tambahkan konfirmasi di dalam atribut onclick -->
                            <a href="javascript:void(0);" onclick="konfirmasiHapus('<?php echo $result['id_penjualan']; ?>')"
                                class="btn btn-danger">HAPUS</a>
                        </td>
                        </form>
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
        var konfirmasi = confirm("Apakah anda ingin menghapus penjualan ini?");

        if (konfirmasi) {
            // Redirect ke halaman dengan aksi hapus jika pengguna menekan OK
            window.location.href = "index.php?page=penjualan&action=hapus&id=" + id;
        }
        // Jika pengguna menekan Cancel, tidak ada tindakan yang diambil
    }
</script>

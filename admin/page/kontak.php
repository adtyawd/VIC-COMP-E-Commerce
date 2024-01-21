<div class="col-lg-12"><h3>Data Pesan Pelanggan</h3></div>
<?php
    if(isset($_GET['action'])){
        if($_GET['action']=="hapus"){
            $id = $_GET['id'];
            $sql = mysqli_query($koneksi, "DELETE FROM kontak WHERE id = '$id'");
            if($sql){
                echo 'pesan berhasil dihapus';
            } else {
                echo 'pesan gagal dihapus';
            }
        }
    }
?>
<div class="col-lg-12">
    <section class="panel">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
            </tr>
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM kontak");
            $no=1;
            if ($sql){
                while ($result=mysqli_fetch_array($sql)){
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $result['nama']; ?></td>
                        <td><?php echo $result['email']; ?></td>
                        <td><?php echo $result['pesan']; ?></td>
                        <td>
                            <a href="index.php?page=anggota&action=hapus&id=<?php echo $result['id']; ?>"
                            class="btn btn-danger">HAPUS</a>
                        </td>
                      </tr>
                    <?php
                     $no++;
                }
            }
          ?>
     </table>
  </section>
</div>
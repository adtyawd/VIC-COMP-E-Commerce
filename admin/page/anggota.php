<div class="col-lg-12"><h3>Data Anggota</h3></div>
<?php
    if(isset($_GET['action'])){
        if($_GET['action']=="hapus"){
            $id = $_GET['id'];
            $sql = mysqli_query($koneksi, "DELETE FROM users WHERE id = '$id'");
            if($sql){
                echo 'Anggota berhasil dihapus';
            } else {
                echo 'anggota gagal dihapus';
            }
        }
    }
?>
<div class="col-lg-12">
    <section class="panel">
        <a href="index.php?page=adm_tambah_anggota" class="btn btn-success">TAMBAH</a>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM users");
            $no=1;
            if ($sql){
                while ($result=mysqli_fetch_array($sql)){
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $result['nama']; ?></td>
                        <td><?php echo $result['gender']; ?></td>
                        <td><?php echo $result['email']; ?></td>
                        <td><?php echo $result['password']; ?></td>
                        <td>
                            <a href="index.php?page=adm_edit_anggota&id=<?php echo $result['id']; ?>"
                            class="btn btn-warning">EDIT</a>
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
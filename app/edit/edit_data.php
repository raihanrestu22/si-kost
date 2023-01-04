<?php
$id_penghuni = $_GET['id_penghuni'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_penghuni WHERE id_penghuni='$id_penghuni'");
$view = mysqli_fetch_array($query);
?>
<session class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Penghuni</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form metode="get" action='update/update_data.php'>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name='nama' value="<?php echo $view['nama'];?>">
                        <input type="text" class="form-control" placeholder="Nama" name='id_penghuni' value="<?php echo $view['id_penghuni'];?>" hidden>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" placeholder="Alamat" name='alamat' value="<?php echo $view['alamat'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>No_hp</label>
                        <input type="text" class="form-control" placeholder="No_hp" name='no_hp' value="<?php echo $view['no_hp'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" placeholder="Password" name='password' value="<?php echo $view['password'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Level</label>
                        <input type="text" class="form-control" placeholder="Level"  name='level' value="<?php echo $view['level'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Id_kamar</label>
                        <input type="text" class="form-control" placeholder="Id_kamar" name='id_kamar' value="<?php echo $view['id_kamar'];?>">
                      </div>
                    </div>
                    <button type="submit" class="btn-btn-sm btn-info">Simpan</button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
    </div>
</session>
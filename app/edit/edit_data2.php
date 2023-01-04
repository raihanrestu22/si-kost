<?php
$id_kamar = $_GET['id_kamar'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_kamar WHERE id_kamar='$id_kamar'");
$view = mysqli_fetch_array($query);
?>
<session class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Kamar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form metode="get" action='update/update_data2.php'>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Lantai</label>
                        <input type="text" class="form-control" placeholder="Lantai" name='lantai' value="<?php echo $view['lantai'];?>">
                        <input type="text" class="form-control" placeholder="Lantai" name='id_kamar' value="<?php echo $view['id_kamar'];?>" hidden>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kapasitas</label>
                        <input type="text" class="form-control" placeholder="Kapasitas" name='kapasitas' value="<?php echo $view['kapasitas'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Fasilitas</label>
                        <input type="text" class="form-control" placeholder="Fasilitas" name='fasilitas' value="<?php echo $view['fasilitas'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tarif</label>
                        <input type="text" class="form-control" placeholder="Tarif" name='tarif' value="<?php echo $view['tarif'];?>">
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
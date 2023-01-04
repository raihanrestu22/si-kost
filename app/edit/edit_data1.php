<?php
$id_tagihan = $_GET['id_tagihan'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_tagihan WHERE id_tagihan='$id_tagihan'");
$view = mysqli_fetch_array($query);
?>
<session class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Tagihan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form metode="get" action='update/update_data1.php'>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Bulan</label>
                        <input type="text" class="form-control" placeholder="Bulan" name='bulan' value="<?php echo $view['bulan'];?>">
                        <input type="text" class="form-control" placeholder="Bulan" name='id_tagihan' value="<?php echo $view['id_tagihan'];?>" hidden>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tahun</label>
                        <input type="text" class="form-control" placeholder="Tahun" name='tahun' value="<?php echo $view['tahun'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Id_penghuni</label>
                        <input type="text" class="form-control" placeholder="Id_penghuni" name='id_penghuni' value="<?php echo $view['id_penghuni'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tagihan</label>
                        <input type="text" class="form-control" placeholder="Tagihan"  name='tagihan' value="<?php echo $view['tagihan'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Status</label>
                        <input type="text" class="form-control" placeholder="Status" name='status' value="<?php echo $view['status'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tgl_bayar</label>
                        <input type="text" class="form-control" placeholder="Tgl_bayar" name='tgl_bayar' value="<?php echo $view['tgl_bayar'];?>">
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
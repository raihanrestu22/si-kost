    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Tagihan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id_tagihan</th>
                    <th>bulan</th>
                    <th>tahun</th>
                    <th>id_penghuni</th>
                    <th>tagihan</th>
                    <th>status</th>
                    <th>tgl_bayar</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_tagihan");
                    while($tagihan = mysqli_fetch_array($query)){
                    ?>
                  <tr>
                    <td width='5%'><?php echo $tagihan['id_tagihan'];?></td>
                    <td><?php echo $tagihan['bulan'];?></td>
                    <td><?php echo $tagihan['tahun'];?></td>
                    <td><?php echo $tagihan['id_penghuni'];?></td>
                    <td><?php echo $tagihan['tagihan'];?></td>
                    <td><?php echo $tagihan['status'];?></td>
                    <td><?php echo $tagihan['tgl_bayar'];?></td>
                    <td>
                      <a onclick="hapus_data1(<?php echo $tagihan['id_tagihan'];?>)" class="btn-btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-data1&& id_tagihan=<?php echo $tagihan ['id_tagihan'];?>" class="btn-btn-sm btn-success">Edit</a>
                    </td>

                  </tr>
                  <?php }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Tagihan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_data1.php">
            <div class="modal-body">
              <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Id_tagihan" name="id_tagihan" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Bulan" name="bulan" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Tahun" name="tahun" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Id_penghuni" name="id_penghuni" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Tagihan" name="tagihan" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Status" name="status" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Tgl_bayar" name="tgl_bayar" required>
                </div>
              </div>
            
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<script>
  function hapus_data1(data_id){
    // alert('Ok')
    // window.location=("delete/hapus_data1.php?id_tagihan="+data_id);
    Swal.fire({
      title: 'Apakah Data akan Dihapus?',
      // showDenyButton: false,
      showCancelButton: true,
      confirmButtonText: 'Hapus Data',
      confirmButtonColor: 'red',
      // denyButtonText: `Don't save`,
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
          window.location=("delete/hapus_data1.php?id_tagihan="+data_id);
      } 
    })
  }

</script> 
  
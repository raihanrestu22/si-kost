    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Penghuni</h3>
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
                    <th>id_penghuni</th>
                    <th>nama</th>
                    <th>alamat</th>
                    <th>no_hp</th>
                    <th>password</th>
                    <th>level</th>
                    <th>id_kamar</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_penghuni");
                    while($penghuni = mysqli_fetch_array($query)){
                    ?>
                  <tr>
                    <td width='5%'><?php echo $penghuni['id_penghuni'];?></td>
                    <td><?php echo $penghuni['nama'];?></td>
                    <td><?php echo $penghuni['alamat'];?></td>
                    <td><?php echo $penghuni['no_hp'];?></td>
                    <td><?php echo $penghuni['password'];?></td>
                    <td><?php echo $penghuni['level'];?></td>
                    <td><?php echo $penghuni['id_kamar'];?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $penghuni['id_penghuni'];?>)" class="btn-btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-data&& id_penghuni=<?php echo $penghuni['id_penghuni'];?>" class="btn-btn-sm btn-success">Edit</a>
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
              <h4 class="modal-title">Tambah Data Penghuni</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_data.php">
            <div class="modal-body">
              <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="No_hp" name="no_hp" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Password" name="password" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Level" name="level" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Id_kamar" name="id_kamar" required>
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
  function hapus_data(data_id){
    // alert('Ok')
    // window.location=("delete/hapus_data.php?id_penghuni="+data_id);
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
          window.location=("delete/hapus_data.php?id_penghuni="+data_id);
      } 
    })
  }

</script> 
  
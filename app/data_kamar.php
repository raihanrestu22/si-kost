    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kamar</h3>
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
                    <th>id_kamar</th>
                    <th>lantai</th>
                    <th>kapasitas</th>
                    <th>fasilitas</th>
                    <th>tarif</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_kamar");
                    while($kamar = mysqli_fetch_array($query)){
                    ?>
                  <tr>
                    <td width='5%'><?php echo $kamar['id_kamar'];?></td>
                    <td><?php echo $kamar['lantai'];?></td>
                    <td><?php echo $kamar['kapasitas'];?></td>
                    <td><?php echo $kamar['fasilitas'];?></td>
                    <td><?php echo $kamar['tarif'];?></td>
                    <td>
                      <a onclick="hapus_data2(<?php echo $kamar['id_kamar'];?>)" class="btn-btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-data2&& id_kamar=<?php echo $kamar['id_kamar'];?>" class="btn-btn-sm btn-success">Edit</a>
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
              <h4 class="modal-title">Tambah Data Kamar</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_data2.php">
            <div class="modal-body">
              <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Id_kamar" name="id_kamar" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Lantai" name="lantai" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Kapasitas" name="kapasitas" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Fasilitas" name="fasilitas" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Tarif" name="tarif" required>
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
  function hapus_data2(data_id){
    // alert('Ok')
    // window.location=("delete/hapus_data2.php?id_kamar="+data_id);
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
          window.location=("delete/hapus_data2.php?id_kamar="+data_id);
      } 
    })
  }

</script> 
  
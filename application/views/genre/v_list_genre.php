
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Genre</h3>
  </div>
            <form action="<?php echo base_url(); ?>Genre/simpan_data" method="post" enctype="multipart/form-data" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Genre </label>
                  <input type="text" class="form-control" name="nama" id="exampleInputtext1" placeholder=""  required="" >
                </div>
                </div>
              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-success btn"><i class="fa fa-paper-plane"></i>Save</button>
              </div>
            </form>
            <hr>
            <div class="box-body" style="overflow-x: scroll; ">
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Genre</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($genre as $rows) { ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $rows['name']; ?></td>
                  <td>
               <a href="<?php echo base_url(); ?>Genre/edit_Genre/<?php echo $rows['id_genre'] ?>" class="btn btn-primary btn-xs" title="Edit"><i class="fa fa-pencil"></i></a>
                 <a onClick="javascript: return confirm('Are you sure to Delete Data');" href="<?php echo base_url(); ?>Genre/data_hapus/<?php echo $rows['id_genre'] ?>" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('apakah anda yakin data ber id=<?php //ubah ?> ingin dihapus ?') "><i class="fa fa-trash"></i></a>
                  </td>
                <?php $no++ ?>
              <?php } ?>
              </table>
            </div>



<div class="box-header with-border">
              <h3 class="box-title">Edit Genre</h3>
            </div>
            <form action="<?php echo base_url(); ?>genre/simpan_edit_data/<?php echo $data_genre['id_genre']; ?>" method="post" enctype="multipart/form-data" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Genre</label>
                  <input type="hidden" name="id_genre" value="<?php echo $data_genre['id_genre']; ?>">
                  <input type="text" class="form-control" name="nama" id="exampleInputtext1" placeholder=""  required="" value="<?= $data_genre['name']; ?>">
                </div>
              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-success btn"><i class="fa fa-paper-plane"></i>Update</button>
              </div>
            </form>

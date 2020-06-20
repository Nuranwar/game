
      <div class="box-header with-border">
        <h3 class="box-title">Edit Data User</h3>
      </div>
      <style type="text/css">
      .warna{color: #FF0000;}
      </style>
        <form action="<?php echo base_url() ?>game/simpan_edit_data/<?php echo $data_game['id_game'] ?>" method="post" enctype="multipart/form-data" role="form">
          <div class="box-body">
                <div class="form-group">
                   <input type="hidden" name="id_genre" value="<?php echo $data_game['id_genre'] ?>">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="title" class="form-control" id="exampleInputtext1" placeholder="" required="" value="<?= $data_game['title']?>" >
                </div>

                <div class="form-group">
                  <label>Jenis Genre</label>
                  <select class="form-control" name="id_genre">
                      <?php foreach ($genre as $rows) { ?>
                      <?php if ($data_game['name']==$rows['name']) { ?>
                        <option value="<?php echo $rows['id_genre'] ?>" selected><?php echo $rows['name']; ?></option>
                      <?php }else{ ?>
                        <option value="<?php echo $rows['id_genre']?>"><?php echo $rows['name'] ?></option>      
                      <?php } ?>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                  <img width="200" height="200" src="<?php echo base_url();?>assets/assets/images/<?= $data_game['image'] ?>">
                  <input type="hidden" name="gambar_lama" value="<?php echo $data_game['image'] ?>">
                  <input type="file" class="form-control" name="image" id="exampleInputtext1">
                  <p class="help-block" style="color: #FF0000;">*Pilih Image Jika Ingin Merubah Image Game</p>
                </div >
              </div>
              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-success btn"><i class="fa fa-paper-plane"></i>Save</button>
              </div>
            </form>

            



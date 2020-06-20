
            <style type="text/css">
              .warna{
                color: #FF0000;
              }
            </style>
            <form action="<?php echo base_url(); ?>game/simpan_data" method="post" enctype="multipart/form-data" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input required="" type="text" class="form-control" name="title" id="exampleInputtext1" placeholder="" value="<?=set_value('title')?>"  >
                </div>
                
                <div class="form-group">
                  <label>Jenis Genre</label>
                  <select class="form-control" name="genre" required="" >
                      <option value=''>-- Pilih --</option>
                    <?php foreach ($genre as $rows) { ?>
                      <option value="<?php echo $rows['id_genre']?>"><?php echo $rows['name'] ?></option>         
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input type="file" class="form-control" name="image" id="exampleInputtext1">
                  <div class="warna"><?php echo form_error('image');?></div>
                </div>
              </div>
                
              
              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-success btn"><i class="fa fa-paper-plane"></i>Save</button>
              </div>
            </form>

      <div class="box-header with-border">
        <h3 class="box-title">Edit Data User</h3>
      </div>
      <style type="text/css">
      .warna{color: #FF0000;}
      </style>
        <form action="<?php echo base_url() ?>transaksi/simpan_edit_data/<?php echo $data_transaksi['id_transaction'] ?>" method="post" enctype="multipart/form-data" role="form">
          <div class="box-body">
                <div class="form-group">
                  <input type="hidden" name="id_genre" value="<?php echo $data_transaksi['id_transaction'] ?>">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="text" name="price" class="form-control" id="exampleInputtext1" placeholder="" required="" value="<?= $data_transaksi['price']?>" >
                </div>

                <div class="form-group">
                  <label>Nama Game</label>
                  <select class="form-control" name="id_game">
                      <?php foreach ($game as $rows) { ?>
                      <?php if ($data_transaksi['title']==$rows['title']) { ?>
                        <option value="<?php echo $rows['id_game'] ?>" selected><?php echo $rows['title']; ?></option>
                      <?php }else{ ?>
                        <option value="<?php echo $rows['id_game']?>"><?php echo $rows['title'] ?></option>      
                      <?php } ?>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Stock</label>
                  <input type="number" name="stock" class="form-control" id="exampleInputtext1" placeholder="" required="" value="<?= $data_transaksi['stock']?>" >
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-success btn"><i class="fa fa-paper-plane"></i>Save</button>
              </div>
            </form>

            



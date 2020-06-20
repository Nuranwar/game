
            <style type="text/css">
              .warna{
                color: #FF0000;
              }
            </style>
            <form action="<?php echo base_url(); ?>transaksi/simpan_data" method="post" enctype="multipart/form-data" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga</label>
                  <input required="" type="number" class="form-control" name="price" id="exampleInputtext1" placeholder="" value="<?=set_value('price')?>"  >
                </div>
                
                <div class="form-group">
                  <label>Nama Game</label>
                  <select class="form-control" name="id_game" required="" >
                      <option value=''>-- Pilih --</option>
                    <?php foreach ($game as $rows) { ?>
                      <option value="<?php echo $rows['id_game']?>"><?php echo $rows['title'] ?></option>         
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Stock</label>
                  <input type="number" class="form-control" name="stock" id="exampleInputtext1" required="">
                </div>
              </div>
                
              
              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-success btn"><i class="fa fa-paper-plane"></i>Save</button>
              </div>
            </form>
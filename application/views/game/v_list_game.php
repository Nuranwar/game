
<div class="box-body" style="overflow-x: scroll; ">
 <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <a href="<?php echo base_url(); ?>game/add_data" class="btn btn-primary" style="margin-bottom:20px; "><i class="fa fa-plus"></i>Tambah Game</a>
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Genre</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($game as $rows) { ?>
               
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $rows['title']; ?></td>
                  <td>
                    <?php if ($rows['image'] == null) { ?>
                      <p>No File</p>
                    <?php }else{ ?>
                    <a href="<?php echo base_url().'game/download/'.$rows['image'] ?>"><i class="ace-icon fa fa-download"></i>
                    <?php } ?>
                    </a>
                  </td>
                <td><?php echo $rows['name']; ?> </td>
                  <td>
                    <a href="<?php echo base_url(); ?>game/edit_game/<?php echo $rows['id_game']; ?>" class="btn btn-primary btn-xs" title="Edit"><i class="fa fa-pencil"></i></a>
                    <a onClick="javascript: return confirm('Are you sure to Delete Data');" href="<?php echo base_url(); ?>game/data_hapus/<?php echo $rows['id_game'] ?>" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('apakah anda yakin data ber id=<?php //ubah ?> ingin dihapus ?') "><i class="fa fa-trash"></i></a>
                  </td>             
                <?php $no++ ?>
              <?php } ?>
              </table>
              </div>


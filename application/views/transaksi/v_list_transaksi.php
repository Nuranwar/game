
<div class="box-body" style="overflow-x: scroll; ">
 <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <a href="<?php echo base_url(); ?>transaksi/add_data" class="btn btn-primary" style="margin-bottom:20px; "><i class="fa fa-plus"></i>Tambah Transaksi</a>
                <tr>
                  <th>No</th>
                  <th>Harga</th>
                  <th>Nama Game</th>
                  <th>Stok</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($transaksi as $rows) { ?>
               
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $rows['price']; ?></td>
                  <td><?php echo $rows['title']; ?></td>
                  <td><?php echo $rows['stock']; ?> </td>
                  <td>
                    <a href="<?php echo base_url(); ?>transaksi/edit_data/<?php echo $rows['id_transaction']; ?>" class="btn btn-primary btn-xs" title="Edit"><i class="fa fa-pencil"></i></a>
                    <a onClick="javascript: return confirm('Are you sure to Delete Data');" href="<?php echo base_url(); ?>transaksi/data_hapus/<?php echo $rows['id_transaction'] ?>" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('apakah anda yakin data ber id=<?php //ubah ?> ingin dihapus ?') "><i class="fa fa-trash"></i></a>
                  </td>             
                <?php $no++ ?>
              <?php } ?>
              </table>
              </div>


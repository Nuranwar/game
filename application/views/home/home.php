<div class="alert alert-info alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <marquee direction="left" scrollamount="4" align="center" font-size="50px"><h4>Game Center terbesar di Indonesia</h4></marquee>

</div>
<!-- <div class="box-body" style="overflow-x: scroll; "> -->
	<div class="box-body">
	<a href="<?php echo base_url(); ?>transaksi/add_data" class="btn btn-primary" style="margin-bottom:20px; "><i class="fa fa-plus"></i>Tambah Stock</a>
</div>
<?php foreach ($transaksi as $rows) { ?>

	<div style="width: 350px;min-height: 200px;background-color: #c0c0c0; margin-right: 10px;margin-left: 10px;float: left;margin-top: 10px;">
		<div >
			<img style="width: 100%;height: 250px;" src="<?php echo base_url(); ?>assets/assets/images/<?php echo $rows['image']; ?>" alt="">
		</div>
		<div style="height: 30px; background-color: #333333">
			<h4 style="color: #ffffff; float: left;"><?php echo $rows['title']; ?></h4>
			<h4 style="color: #ffffff; float: right;"><?php echo $rows['name']; ?></h4>
		</div>
		<center>
			<div style="height: 30px; background-color: #000000">
			<h4 style="color: #ffffff; float: left;"><?php echo $rows['price']; ?></h4>
			<h4 style="color: #ffffff; float: right;">Stock : <?php echo $rows['stock']; ?></h4>
		</div>
			<form method="post" action="<?php echo base_url() ?>transaksi/simpan_edit_data2/<?php echo $rows['id_transaction'] ?>">
				<input type="hidden" name="price" value="<?php echo $rows['price'] ?>" />
				<input type="hidden" name="id_game" value="<?php echo $rows['id_game'] ?>" />
				<input type="hidden" name="stock" value="<?php echo $rows['stock'] ?>" />
				<input type="submit" name="submit" value="Buy" class="button">
			</form>	
		</center>								
	</div>
	 <?php } ?>



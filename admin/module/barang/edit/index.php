 <!--sidebar end-->

 <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
 <!--main content start-->
 <?php 
	$id = $_GET['barang'];
	$hasil = $lihat -> barang_edit($id);
?>
 <a href="index.php?page=barang" class="btn btn-primary mb-3"><i class="fa fa-angle-left"></i> Balik </a>
 <h4>Edit Barang</h4>
 <?php if(isset($_GET['success'])){?>
 <div class="alert alert-success">
     <p>Edit Data Berhasil !</p>
 </div>
 <?php }?>
 <?php if(isset($_GET['remove'])){?>
 <div class="alert alert-danger">
     <p>Hapus Data Berhasil !</p>
 </div>
 <?php }?>
<div class="card card-body">
	<div class="table-responsive">
		<table class="table table-striped">
			<form action="fungsi/edit/edit.php?barang=edit" method="POST">
				<tr>
					<td>Item Id</td>
					<td><input type="text" readonly="readonly" class="form-control" value="<?php echo $hasil['Item_Id'];?>"
							name="id"></td>
				</tr>
				<tr>
					<td>Category</td>
					<td>
						<select name="kategori" class="form-control">
							<option value="<?php echo $hasil['Category'];?>"><?php echo $hasil['Category'];?></option>
							<option value="#">Choose Category</option>
							<?php  $kat = $lihat -> kategori(); foreach($kat as $isi){ 	?>
							<option value="<?php echo $isi['Choose_Category'];?>"><?php echo $isi['Choose_Category'];?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Name Of Goods</td>
					<td><input type="text" class="form-control" value="<?php echo $hasil['Name_Of_Goods'];?>" name="nama"></td>
				</tr>
				<tr>
					<td>Brand Of Goods</td>
					<td><input type="text" class="form-control" value="<?php echo $hasil['Brand_Of_Goods'];?>" name="merk"></td>
				</tr>
				<tr>
					<td>Purchase Price</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['Purchase_Price'];?>" name="beli"></td>
				</tr>
				<tr>
					<td>Selling Price</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['Selling_Price'];?>" name="jual"></td>
				</tr>
				<tr>
					<td>Unit Of Goods</td>
					<td>
						<select name="satuan" class="form-control">
							<option value="<?php echo $hasil['Unit_Of_Goods'];?>"><?php echo $hasil['Unit_Of_Goods'];?>
							</option>
							<option value="#">Pilih Satuan</option>
							<option value="PCS">PCS</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Stock</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['Stock'];?>" name="stok"></td>
				</tr>
				<tr>
					<td>Date Update</td>
					<td><input type="text" readonly="readonly" class="form-control" value="<?php echo  date("j F Y, G:i");?>"
							name="tgl"></td>
				</tr>
				<tr>
					<td></td>
					<td><button class="btn btn-primary"><i class="fa fa-edit"></i> Update Data</button></td>
				</tr>
			</form>
		</table>
	</div>
</div>
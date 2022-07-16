<?= $this->extend('layout/listLayout')?>
<?= $this->section('list')?>
<div class="card px-2 pt-2 border-dark mb-3">
<div class="card-header border-dark mb-3">
	<h5>Products list</h5>
	<h6><a href="<?= base_url('add-product'); ?>" class="btn btn-primary btn-sm float-start" >Add</a></h6>
	<h6><a href="<?= base_url('admin-page'); ?>" class="btn btn-danger btn-sm float-end" >Back</a></h6>
</div>	
<?php
                    if(session()->has("success")){
                        ?>
                            <div class="alert alert-success">
                                <?= session("success") ?>
                            </div>
                        <?php
                    }
                ?>
<div class="card-body">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Product ID</th>
				<th>Product Name</th>
				<th>Product Description</th>
				<th>Product Image</th>
				<th>Unit Price</th>
				<th>Available quantity</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<?php foreach($products as $row){?>
		<tbody>
			<tr>
				<?php echo ' <td>'.$row['product_id'].'</td> '; ?>
				<?php echo ' <td>'.$row['product_name'].'</td> '; ?>
				<?php echo ' <td>'.$row['product_description'].'</td> '; ?>
				<?php echo' <td><img src = "uploads/'.$row['product_image'].'" style="width: 180px; height:70px;"></td>'?>
				<?php echo ' <td>'.$row['unit_price'].'</td> '; ?>
				
				<?php echo ' <td>'.$row['available_quantity'].'</td> '; ?>
				<td>
                                    <a href="<?= base_url('Admin/Product/editProduct/' . $row['product_id']); ?>" class="btn btn-info" >Edit</a>
                                    <a href="<?= base_url('Admin/Product/deleteProduct/' . $row['product_id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')">Delete</a>
                                </td>
			</tr>
		</tbody>
	<?php } ?>
	</table>
</div>
</div>


<?= $this->endSection()?>
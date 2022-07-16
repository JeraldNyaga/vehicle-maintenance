<?= $this->extend('layout/formLayout')?>
<?= $this->section('itemForm')?>

<!--Registration-->

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 rounded">
			<h4 >Product details</h4>
			
			<?php
			if(session()->get("error")){
				?>
				<div class="alert alert-danger">
					<?= session()->get("error") ?>
				</div>
				<?php
			}
			?> 
			<?php if (isset($validation)) : ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
                <?php endif; ?>
			<form action="<?= base_url('add-product')?>" method="POST" id="form-product" enctype="multipart/form-data">
				<div class="form-group p-2" >
					<label for="product_name">Product name</label>
					<input type="text" id="product_name" name="product_name" class="form-control"  placeholder="Enter the name of the product">
				</div>
				<div class="form-group p-2">
					<label for="product_description">Product description</label>
					<input type="text" name='product_description' id="product_description" class="form-control"  placeholder="Enter the descrption of the product">
				</div>
				<div class="form-group p-2">
					<label for="product_image">Product image</label>
					<input type="file" name='product_image' id="product_image" class="form-control" accept=".png, .jpg, .jpeg">
				</div>

				<div class="form-group p-2">
					<label for="unit_price">Product prize</label>
					<input type="number" name='unit_price' id="unit_price" class="form-control"  placeholder="Enter the prize of the product" >  
				</div>
				
				<div class="form-group p-2">
					<label for="subcategory_id">Subcategory</label>
					<select class="form-control" id="subcategory_id" name="subcategory_id">
						<option value="">Select a Subcategory</option>
						<?php
						foreach($subcategories as $row)
						{
							echo '<option value="'.$row['subcategory_id'].'">'.$row['subcategory_name'].'</option>';
						}

						?>  
					</select>
				</div>
				<div class="form-group p-2">
					<label for="available_quantity">Quantity available</label>
					<input type="number" name='available_quantity' id="available_quantity" class="form-control"  placeholder="Enter the quantity available" >  
				</div>

				<div class="form-group p-2" style="align-items: center;">
					<button class="btn btn-primary btn-block" type="submit" name="Add/Edit_items" id="btn_save">Add Product</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?= $this->endSection()?>

	<?= $this->section('scripts')?>
$(#btn_save).on('click', function()
	{
	
		var product_name = $(#product_name).val();
		var product_description = $(#product_description).val();
		var product_image = $(#product_image).val();
		var unit_prize = $(#unit_prize).val();
		var subcategory_id = $(#subcategory_id).find(":selected").val();
		$.ajax({
		type: "POST",
		url:"add-product",
		dataType: "JSON",
		data: {product_name: "product_name",product_description : "product_description ",product_image : "product_image ",unit_prize : "unit_prize ", subcategory_id: "subcategory_id"},
		success:function (data){
		if (data==1){
		$('[name = "product_name"]').val("");
		$('[name = "product_description"]').val("");
		$('[name = "product_image"]').val("");
		$('[name = "unit_prize"]').val("");
            $('[name = "subcategory_id"]').val();
                  alert("Data Inserted");
	}
	else{
	 alert("Data Not Inserted");
}
	},error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error at add data');
                }
	})
	})

	<?= $this->endSection()?>
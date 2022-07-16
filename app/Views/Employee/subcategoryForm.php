<?= $this->extend('layout/formLayout')?>
<?= $this->section('subCategoryForm')?>

<!--Registration-->

<div class="container">
	<div class="row" >
		<div class="col-md-4 col-md-offset-4 rounded">
			<h4 style="text-align: center;">Sub-category details</h4>
			
			<?php if (isset($validation)) : ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
                <?php endif; ?> 
			<form  action="<?= base_url('add-subcategory')?>" method="POST" id="form-subcategory">
				<div class="form-group p-2" >
					<label for="subcategory_name">Subcategory name</label>
					<input type="text" id="subcategory_name" name="subcategory_name" class="form-control"  placeholder="Enter the subcategory name">
				</div>
				<div class="form-group p-2">
					<label for="category">Category</label>
					<select class="form-control" id="category" name="category">
						<option value="">Select a category</option>
						<?php
						foreach($categories as $row)
						{
							echo '<option value="'.$row['category_id'].'">'.$row['category_name'].'</option>';
						}

						?>  
					</select>
				</div>
			
					
					<div class="form-group p-2" style="align-items: center;">
						<button class="btn btn-primary btn-block" type="submit" name="Add/Edit_subcategory" id="btn_save">Add/Edit Subcategory</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?= $this->endSection()?>

	<?= $this->section('scripts')?>

	$(#btn_save).on('click', function()
	{
		var subcategory_name = $(#subcategory_name).val();
		var category = $(#category).find(":selected").val();
		$.ajax({
		type: "POST",
		url:"add-subcategory",
		dataType: "JSON",
		data: {subcategory_name: "subcategory_name", category: "category"},
		success:function (data){
		if (data==1){
		$('[name = "subcategory_name"]').val("");
            $('[name = "category"]').val();
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
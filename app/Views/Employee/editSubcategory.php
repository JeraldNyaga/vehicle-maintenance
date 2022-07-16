<?= $this->extend('layout/formLayout')?>
<?= $this->section('categoryForm')?>

<!--Registration-->

<div class="container">
	<div class="row" style="margin-top: 45px">
		<div class="col-md-4 col-md-offset-4 rounded">
			<h4 style="text-align: center;">Subcategory details</h4>
			<?php if (isset($validation)) {?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
                <?php } ?>
			<form action="<?= base_url('Admin/Product/editsubcategory/' . $subcategory['subcategory_id']) ?>" method="POST" id="form-category">
				<div class="form-group p-2" >
					<label for="subcategory_name">Subcategory name</label>
					<input type="text" id="subcategory_name" name="subcategory_name" class="form-control" value="<?= $subcategory['subcategory_name'] ?>"  placeholder="Enter the subcategory name">
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
					<button class="btn btn-primary btn-block" type="submit" name="add/edit_Category">Edit Subcategory</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?= $this->endSection()?>

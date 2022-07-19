<?= $this->extend('Admin/formLayout')?>
<?= $this->section('content')?>

<!--Registration-->

<div class="container">
	<div class="row" style="margin-top: 45px">
		<div class="col-md-4 col-md-offset-4 rounded">
			<h4 style="text-align: center;">Category details</h4>
			<?php if (isset($validation)) {?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
                <?php } ?>
			<form action="<?= base_url('Admin/Product/editCategory/' . $category['category_id']) ?>" method="POST" id="form-category">
				<div class="form-group p-2" >
					<label for="category_name">Category Name</label>
					<input type="text" id="category_name" name="category_name" class="form-control" value="<?= $category['category_name'] ?>" placeholder="Enter the name of cloth category">


				</div>
				<div class="form-group p-2" style="align-items: center;">
					<button class="btn btn-primary btn-block" type="submit" name="add/edit_Category">Edit Category</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?= $this->endSection()?>

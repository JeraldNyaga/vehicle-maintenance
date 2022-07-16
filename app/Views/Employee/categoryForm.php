<?= $this->extend('layout/formLayout')?>
<?= $this->section('categoryForm')?>

<!--Registration-->

<div class="container">
	<div class="row" style="margin-top: 45px">
		<div class="col-md-4 col-md-offset-4 rounded">
			<h4 style="text-align: center;">Category details</h4>
			
			<?php if (isset($validation)) : ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
                <?php endif; ?>
			<form action="<?= base_url('add-category')?>" method="POST" id="form-category">
				<div class="form-group p-2" >
					<label for="category_name">Category Name</label>
					<input type="text" id="category_name" name="category_name" class="form-control"  placeholder="Enter the name of cloth category">


				</div>
				<div class="form-group p-2" style="align-items: center;">
					<button class="btn btn-primary btn-block" type="submit" name="add/edit_Category">Add Category</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?= $this->endSection()?>

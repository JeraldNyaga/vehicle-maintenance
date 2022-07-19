<?= $this->extend('Employee/formLayout')?>
<?= $this->section('content')?>

<div class="container" >
	<div class="row" >
		<div class="col-md-4 col-md-offset-3 rounded">
			<h4 >Edit Repair</h4>
			<?php
 // To print success flash message
            if (session()->get("success")) {
            ?>
                <div class="alert alert-success">
                    <?= session()->get("success") ?>
                </div>
            <?php
            }
            ?>

            <?php
            // To print error messages
          if (isset($validation)) : ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
                <?php endif; ?>
			<form method="POST" action="<?= base_url('admin-edit-repair'.$repair['hist_id'])?>" id="new-repair" style="align-content:left">
			<div class="form-group p-2" >
					<label for="task_id">Task</label><br>
					<select name="task_id" id="task_id">
                    <option selected hidden><?= $repair['task_id'] ?></option>
						<?php
						foreach($tasks as $row)
						{
							echo '<option value="'.$row['task_id'].'">'.$row['task_name'].'</option>';
						}

						?>  
                    </select>
				</div>
				<div class="form-group p-2" >
					<label for="product_id">Spare Part</label><br>
					<select name="product_id" id="product_id">
                    <option selected hidden><?= $repair['product_id'] ?></option>
						<?php
						foreach($products as $row1)
						{
							echo '<option value="'.$row1['product_id'].'">'.$row1['product_name'].'</option>';
						}

						?>  
                    </select>
				</div>
				<div class="form-group p-2" >
					<label for="quantity">Quantity</label>
					<input type="text" id="quantity" name="quantity" class="form-control">
				</div>
				
					
				<div class="form-group p-2">
					<button class="btn btn-primary btn-block" type="submit">Edit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?= $this->endSection()?>
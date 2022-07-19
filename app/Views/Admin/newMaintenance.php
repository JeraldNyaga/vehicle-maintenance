<?= $this->extend('Employee/formLayout')?>
<?= $this->section('content')?>

<div class="container" >
	<div class="row" >
		<div class="col-md-4 col-md-offset-3 rounded">
			<h4 >Create vehicle Log</h4>
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
			<form method="POST" action="<?= base_url('admin-add-maintenance')?>" id="new-repair" style="align-content:left"> 
				<div class="form-group p-2" >
					<label for="v_plate">Vehicle</label><br>
					<select name="v_plate" id="v_plate">
                    <option selected hidden>Select Vehicle</option>
						<?php
						foreach($vehicle as $row)
						{
							echo '<option value="'.$row['v_plate'].'">'.$row['v_plate'].'</option>';
						}

						?>  
                    </select>
				</div>
				<div class="form-group p-2" >
					<label for="mileage">Mileage</label>
					<input type="text" id="mileage" name="mileage" class="form-control">
				</div>
				
					
				<div class="form-group p-2">
					<button class="btn btn-primary btn-block" type="submit">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?= $this->endSection()?>
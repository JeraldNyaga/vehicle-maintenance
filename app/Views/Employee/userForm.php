<?= $this->extend('layout/formLayout')?>
<?= $this->section('usersForm')?>
	
	<!--Registration-->

	<div class="container">
		<div class="row" style="margin-top: 45px">
			<div class="col-md-4 col-md-offset-4 rounded">
				<h4 style="text-align: center;">User details</h4>
				<?php if(isset($validation1)) : ?>
          <div class="alert alert-warning">
            <?= $validation1->listErrors()  ?>
          </div>
        <?php endif; ?>
				<form action="" method="POST" id="form-user">
					<div class="form-group p-2" >
						<label for="email">Email</label>
						<input type="text" id="email" name="email" class="form-control"  placeholder="Enter your Email">
					</div>
					<div class="form-group p-2">
						<label for="fname">First Name</label>
						  <input type="text" name='fname' id="fist_name" class="form-control"  placeholder="Enter your First Name">
					</div>
					<div class="form-group p-2">
						<label for="password">Password</label>
						<input type="text" name='sname' id="last_name" class="form-control"  placeholder="Enter your Second Name">
					</div>

					<div class="form-check">
			        <input class="form-check-input" type="radio" name="gender" id="female_gender" value="female" >
			        <label class="form-check-label" for="female_gender">
			          Female
			        </label>
				      </div>
				      <div class="form-check">
				        <input class="form-check-input" type="radio" name="gender" id="male_gender" value="male">
				        <label class="form-check-label" for="male_gender">
				         Male
				        </label>
				      </div>
					<div class="form-group p-2" style="align-items: center;">
						<button class="btn btn-primary btn-block" type="submit" name="add/edit_user">Add/Edit User</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<?= $this->endSection()?>

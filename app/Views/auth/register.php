<?= $this->extend('auth/formLayout')?>
<?= $this->section('register')?>

<div class="container" >
	<div class="row" >
		<div class="col-md-4 col-md-offset-3 rounded">
			<h4 >Signup</h4>
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
			<form method="POST" action="<?= base_url('register-user')?>" id="user-register">
				<div class="form-group p-2" >
					<label for="first_name">First name</label>
					<input type="text" id="first_name" name="first_name" class="form-control"  placeholder="Enter your First name">
				</div>
				<div class="form-group p-2" >
					<label for="last_name">Last name</label>
					<input type="text" id="last_name" name="last_name" class="form-control"  placeholder="Enter your Last name">
				</div>
				<div class="form-group p-2" >
					<label for="email">Email</label>
					<input type="text" id="email" name="email" class="form-control"  placeholder="Enter your Email">
				</div>
				<div class="form-group p-2" >
					<label for="password">Password</label>
					<input type="password" id="password" name="password" class="form-control"  placeholder="Enter your Password">
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="gender" id="female_gender" value="Female">
					<label class="form-check-label" for="female_gender">
						Female
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="gender" id="male_gender" value="Male">
					<label class="form-check-label" for="male_gender">
						Male
					</label>
				</div>
				<div class="form-group p-2">
					<button class="btn btn-primary btn-block" type="submit">Sign up</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?= $this->endSection()?>
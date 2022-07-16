<?= $this->extend('auth/formLayout')?>
<?= $this->section('login')?>
	<!--Login-->
	
	<div class="container" >
		<div class="row" >
			<div class="col-md-4 col-md-offset-3 rounded" >
				<h4 >Sign in</h4>
				<?php if(isset($validation)): ?>
          <div class="alert alert-warning">
            <?= $validation->listErrors()  ?>
          </div>
      <?php endif; ?> <?php if (session()->get("emailError")) : ?>
                    <div class="col-12">
                        <div class="alert alert-warning" role="alert">
                            <?=  session()->get("emailError") ?>
                        </div>
                    </div>
                <?php endif; ?>
        	<?php if (session()->get("passError")) : ?>
          <div class="alert alert-warning">
            <?=  session()->get("passError")  ?>
          </div>
          <?php endif; ?>
           

        <?php if (session()->get("success")) : 
            ?>
                <div class="alert alert-success">
                    <?= session()->get("success") ?>
                </div>
            <?php endif; ?>
				<form action="<?= base_url('login-user');?>" method="POST">
					<div class="form-group p-2" >
						<label for="email">Email</label>
						<input type="text" id="email" name="email" class="form-control"  placeholder="Enter your Email">
					</div>
					<div class="form-group p-2">
						<label for="password">Password</label>
						<input type="password" id="password" name="password"   class="form-control" placeholder="Enter your Password">
					</div>
						<input type="datetime" id="time" name="time"   class="form-control" hidden>
					
					<div class="form-group p-2">
						<button class="btn btn-primary btn-block" type="submit">Sign in</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<?= $this->endSection()?>
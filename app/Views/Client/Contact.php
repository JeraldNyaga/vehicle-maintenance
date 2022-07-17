<?= $this->extend('Client/layout')?>
<?= $this->section('content')?>
<nav class="container-fluid navbar navbar-expand-lg navbar-dark py-1" style="background-color:black;  color:#fff;" >
  <div class= "container-fluid">
    <a class="navbar-brand" href="#"><img src="<?php echo  base_url('assets/HomeImages/logo.png'); ?>" alt="" width="auto" height="80"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Appointment</a></li>
        <li class="nav-item"><a class="nav-link active" href="#footer">Contact</a></li>
      </ul>
      <ul class="navbar-nav d-flex justify-content-end ">
        <?php if (!session()->get('loggedUser')) : ?>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('register-user'); ?>">Register</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('login-user'); ?>">Login</a></li>
      <?php endif;?>
      <?php if (session()->get('loggedUser')) : ?>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url('logout-user'); ?>">Logout</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url('-profile'); ?>">Welcome <?php 
      echo session()->get("first_name"); ?>,</a></li>
    <?php endif;?>
  </ul>
</div>
</div>
</nav>
<div class="contact-form">
<div class="container" >
	<div class="row " >
		<div class="col-md-8  rounded">
			<h4 >SContact Us</h4>
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
      <form method="POST" action="<?= base_url('contact-us')?>" id="contactform">
        <div class="form-group p-2" >
          <label for="name">Name</label>
          <input type="text" id="name" name="name" class="form-control"  placeholder="Enter your name">
        </div>
        <div class="form-group p-2" >
         <label for="email">Email</label>
         <input type="text" id="email" name="email" class="form-control"  placeholder="Enter your Email">
       </div>
       <div class="form-group p-2" >
         <label for="phone">Phone</label>
         <input type="text" id="phone" name="phone" class="form-control"  placeholder="0712345678">
       </div>
       <div class="form-group p-2" >
         <label for="message">Message</label>
         <textarea type="password" id="message" name="message" class="form-control"  placeholder="We love hearing from you"></textarea> 
       </div>
       <div class="form-group p-2">
         <button class="btn btn-primary btn-block" type="submit">Send</button>
       </div>
     </form>
   </div>
 </div>
</div>
</div>
<?=$this->endSection()?>
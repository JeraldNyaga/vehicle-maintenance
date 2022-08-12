<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php if (!empty($page_title)) echo $page_title;?></title>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/formStyle.css')?>">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--CSS-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
   <link rel="stylesheet" href=" <?php echo  base_url('assets/css/bootstrap.min.css'); ?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/css/appointment.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo  base_url('assets/fonts/icomoon/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo  base_url('assets/css/style.css'); ?>">
</head>
<nav class="container-fluid navbar navbar-expand-lg sticky-top navbar-dark py-1" style="background-color:black;  color:#fff;" >
    <div class= "container-fluid">
        <a class="navbar-brand" href="#"><img src="<?php echo  base_url('assets/HomeImages/logo.png'); ?>" alt="" width="auto" height="80"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo base_url('client-home'); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('client-home'); ?>">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('client-vehicle-logs'); ?>">Maintenance log</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('contact-us'); ?>">Contact</a></li>
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

<div class="px-5 py-4">
<?= $this->renderSection('list')?>	
</div>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-3.6.0.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.bundle.min.js')?>"></script>
<!-- 
<?= $this->renderSection('scripts')?> -->
</body>
</html>
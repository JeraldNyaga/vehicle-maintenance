<?= $this->extend('Client/layout')?>
<?= $this->section('content')?>
  <nav class="container-fluid navbar navbar-expand-lg sticky-top navbar-dark py-1" style="background-color:black;  color:#fff;" >
    <div class= "container-fluid">
        <a class="navbar-brand" href="#"><img src="<?php echo  base_url('assets/HomeImages/logo.png'); ?>" alt="" width="auto" height="80"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item"><a class="nav-link " aria-current="page" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Appointment</a></li>
                <li class="nav-item"><a class="nav-link" href="#footer">Contact</a></li>
            </ul>
            <ul class="navbar-nav d-flex justify-content-end ">
            <?php if (!session()->get('loggedUser')) : ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('register-user'); ?>">Register</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('login-user'); ?>">Login</a></li>
                <?php endif;?>
                <?php if (session()->get('loggedUser')) : ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('logout-user'); ?>">Logout</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?php echo base_url('-profile'); ?>">Welcome <?php 
                echo session()->get("first_name"); ?>,</a></li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="main-body">

      <!-- Breadcrumb -->
      <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Dashboard.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">User Profile</li>
        </ol>
      </nav>
      <!-- /Breadcrumb -->

      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="Profile_images/avatar_1.png" alt="Admin" class="rounded-circle" width="150">
              <div class="mt-3">
            <h4>Admin</h4>
          </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  Kenneth Valdez
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  fip@jukmuh.al
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  (239) 816-9029
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Mobile</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  (320) 380-4539
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  Bay Area, San Francisco, CA
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-info" id="form-btn">Edit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
     </div>


     <!-- Edit Profile Form -->
      <div class="card" id="profile-edit" style="display: none;">
            <div class="card-body">
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="Kenneth Valdez">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="fip@jukmuh.al">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="(239) 816-9029">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Mobile</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="(320) 380-4539">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="Bay Area, San Francisco, CA">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9 text-secondary">
                  <input type="button" class="btn btn-primary px-4" value="Save Changes">
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
  <?=$this->endSection()?>
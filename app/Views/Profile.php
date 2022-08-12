<!DOCTYPE html>
<html>
<head>
  <title><?php if (!empty($page_title)) echo $page_title;?></title>
  <link rel="stylesheet" type="text/css" href="css/Profile_Style.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
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
           <div class="col-md-12">
          <?php foreach($profile->getResultArray() as $row): ?>
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?php echo"".$row['first_name']." ".$row['last_name'].""?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php echo"".$row['email'].""?>
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
        <?php endforeach?>
     </div>


     
    </div>
  </div>
  <script src="<?php echo base_url('assets/js/Profile.js'); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

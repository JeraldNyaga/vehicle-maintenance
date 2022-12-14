  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
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
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/Profile_Style.css')?>">

    <title><?php if (!empty($page_title)) echo $page_title;?></title>
  </head>
  <body>
 

<?= $this->renderSection('content')?>

<div class="footer">
<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify"> <i>Honest, trustworthy and reliable automotive services are at the heart of all we do at Auto Vehicle Specialist. Our mission is to make our customers and their families safer on the road through our high quality services and advice. We provide our customers with a true sense of trust and peace of mind.</i></p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Our Services</h6>
            <ul class="footer-links">
              <li><a href="#">Mechanical work</a></li>
              <li><a href="#">Painting</a></li>
              <li><a href="#">Car polishing</a></li>
              <li><a href="#">Body work</a></li>
             
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
          <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</div>
<script src="<?php echo base_url('assets/js/home.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/Profile.js'); ?>"></script>
  <script src="<?php echo  base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
  <script src="<?php echo  base_url('assets/js/popper.min.js'); ?>"></script>
  <script src=" <?php echo  base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo  base_url('assets/js/jquery.validate.min.js'); ?>"></script>
  <script src="<?php echo  base_url('assets/js/main.js'); ?>"></script>
</body>
</html>
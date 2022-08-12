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
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
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
    <div class="aboveFold" style="background:linear-gradient(0deg, rgba(0,0,0, 0.5), rgba(0,0,0, 0.5)), url('<?php echo  base_url('assets/HomeImages/main.jpg'); ?>');display:grid;position:relative;background-size: cover;height:80%; width:100%;">
    <div class="content">
      <h1>Fix Once Perfectly</h1>
      <h2>Our specialty is auto care in a professional manner</h2> 
    <button class="btn btn-primary booknow"><a href="<?php echo  base_url('book-appointment'); ?>">Book Appointment</a> </button>
      </div>
    </div>
    <div class="button">
    <button class="btn btn-primary booknow"><a href="<?php echo  base_url('book-appointment'); ?>">Book Your Appointment Today</a> </button>
    </div>
    <div class="services">
        <h3>Our Services</h3>
        <!-- Slideshow container -->
        <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
        <div class="text">Mechanic</div>
        <img src="<?php echo  base_url('assets/HomeImages/Mechanic.png'); ?>" style="width:100%">
        </div>

        <div class="mySlides fade">
        <div class="text">Body Work</div>
        <img src="<?php echo  base_url('assets/HomeImages/Body work.png'); ?>" style="width:100%">
        </div>

        <div class="mySlides fade">
        <div class="text">Painting</div>
        <img src="<?php echo  base_url('assets/HomeImages/Car painting.png'); ?>" style="width:100%">
        </div>
        <div class="mySlides fade">
        <div class="text">Car Polishing</div>
        <img src="<?php echo  base_url('assets/HomeImages/Car polishing.png'); ?>" style="width:100%">
        
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        </div>
    </div>
    <div class="flex-container">
    <div class="row">
      <img src="<?php echo  base_url('assets/HomeImages/faq.jpg'); ?>" alt="">
    </div>
    <div class="row">
        <button type="button" class="questions">Should I consider using synthetic motor oil?</button>
        <div class="content">
        <p>Full synthetic oils provide better engine performance and protection than conventional and synthetic blend motor oils.Although conventional oil can provide adequate lubrication performance, it can’t compete with the overall engine performance and protection provided by synthetics.</p>
        </div>
        <button type="button" class="questions">What parts should be replaced at what intervals?</button>
        <div class="content">
            <ol>
        <li>Filters, which get dirty and need to be changed.</li>  
        <li>Brakes and belts, which wear down and lose effectiveness.</li>  
        <li>Engine oil, power steering fluid, and other fluids, which need to be refilled, changed, or flushed.</li>
        </ol>
        </div>
        <button type="button" class="questions">How will you know your brakes are worn out?</button>
        <div class="content">
        <p>Listen for squeaking, squealing, metal-on-metal grinding and other noises that indicate wear. Some minor noises can be eliminated by cleaning the brakes, but persistent, prominent noises usually mean parts are worn.
        Brakes should also be inspected every six months.
        </p>
        </div>
        <button type="button" class="questions">What is the process by Engine maintenance?</button>
        <div class="content">
        <ol>
            <li>Change engine oil at regular intervals</li>
            <li>Keep check on the cooling system</li>
            <li>Check the air filter and get it cleaned when dirty</li>
            <li> <b>Don’t ignore the check engine light</b></li>
            <li>Replace your fuel filter</li>
            <li>Replace spark plugs and wires</li>
        </ol>
        </div>
    </div>
    </div>


<?=$this->endSection()?>
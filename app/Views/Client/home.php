<?= $this->extend('Client/layout')?>
<?= $this->section('content')?>

    <div class="aboveFold" style="background:linear-gradient(0deg, rgba(0,0,0, 0.5), rgba(0,0,0, 0.5)), url('<?php echo  base_url('assets/HomeImages/main.jpg'); ?>');display:grid;position:relative;background-size: cover;height:80%; width:100%;">
    <div class="content">
      <h1>Fix Once Perfectly</h1>
      <h2>Safe in our hands</h2>
      <h3>Our specialty is auto care in a professional manner</h3> 
    <button class="btn btn-primary booknow"><a href="appointment.php">Book Appointment</a> </button>
      </div>
    </div>
    <div class="button">
    <button class="btn btn-primary booknow"><a href="appointment.php">Book Your Appointment Today</a> </button>
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
        <button type="button" class="questions">How do I keep track of routine maintenance?</button>
        <div class="content">
        <p>Lorem ipsum...</p>
        </div>
        <button type="button" class="questions">What is the process by Engine maintenance?</button>
        <div class="content">
        <p>Lorem ipsum...</p>
        </div>
    </div>
    </div>


<?=$this->endSection()?>
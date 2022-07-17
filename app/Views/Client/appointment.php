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
                <li class="nav-item"><a class="nav-link active" href="#">Appointment</a></li>
                <li class="nav-item"><a class="nav-link" href="#footer">Contact</a></li>
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
    <!--Appointment Page-->
    <div class="appointment-page">
        <div class="auto-container">
            <div class="sec-title">
                <h2>Make an <span>Appointment</span></h2>
                <p>We are one of the leading auto repair shops serving customers in Tucson. All mechanic services<br> are performed by highly qualified mechanics.</p>
            </div>

            <!-- Service form-->
            <div class="service-form">
                <form>
                    <div class="vehicle-detail">
                        <div class="row clearfix">
                            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="title"><h3>Vehicle Year</h3></div>
                                <div class="range-slider-one">
                                   <select class="custom-select-box">
                    <option selected disabled hidden>Choose Year</option>
                        <option>2003</option>
                        <option>2004</option>
                        <option>2005</option>
                        <option>2006</option>
                        <option>2007</option>
                        <option>2008</option>
                        <option>2009</option>
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                    </select>
                                </div>
                            </div>

                            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="title"><h3>Vehicle Make</h3></div>
                                <div class="field-inner">
                                     <select class="custom-select-box">
                        <option selected disabled hidden>Choose Make</option>
                        <option>Toyota</option>
                        <option>Honda</option>
                        <option>Hyundai</option>
                        <option>Nissan</option>
                        <option>Volkswagen</option>
                        <option>Mercedes</option>
                        <option>Peugot</option>
                        <option>BMW</option>
                    </select>
                                </div>
                            </div>

                            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="title"><h3>Vehicle Mileage</h3></div>
                                <input type="text" name="v-mileage" placeholder="Vehicle Mileage">
                            </div>

                            <div class="form-group col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                <div class="title"><h3>Appointment Date</h3></div>
                                <div class="field-inner">
                                    <input type="date" name="bookDate" >
                                </div>
                            </div>

                            <div class="form-group col-lg-6 col-md-4 col-sm-12 col-xs-12">
                                <div class="title"><h3>Preffered Time Frame</h3></div>
                                <div class="field-inner">
                                    <input type="time" name="bookTime" step="1800" min="09:00:00"
            max="16:30:00">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="services-needed">
                        <div class="title"><h3>Select Services Needed</h3></div>
                        <div class="row clearfix">
                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-1">
                                    <label for="service-1">Air Conditioning </label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-2">
                                    <label for="service-2">Brakes Repair </label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-3">
                                    <label for="service-3">Engine Diagnostic</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-4">
                                    <label for="service-4">Heating & Cooling</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-5">
                                    <label for="service-5">Oil, Lube</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-6">
                                    <label for="service-6">Steering & Suspension</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-7">
                                    <label for="service-7">Transmission Repair</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-8">
                                    <label for="service-8">Battery Service</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-9">
                                    <label for="service-9">Exhaust Systems</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-10">
                                    <label for="service-10">Emissions</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-11">
                                    <label for="service-11">Pvt Maintenance</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-12">
                                    <label for="service-12">Tire Pressure</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-13">
                                    <label for="service-13">Tire Service</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-14">
                                    <label for="service-14">Other</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!--End Appointment Form-->

            <!--Contact Form-->
            <div class="contact-form">
                <div class="title"><h3>Contact Details</h3></div>
                <form>
                    <div class="row clearfix">
                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <input type="text" name="name" placeholder="Enter Your Name">
                        </div>

                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <input type="email" name="email" placeholder="Enter Your Email Address">
                        </div>

                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                            <input type="text" name="subject" placeholder="Enter Your Subject">
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea placeholder="Additional Questions or Comments"></textarea>
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="theme-btn">Submit Now</button>
                        </div>
                    </div>
                </form>
            </div><!--End Contact Form-->

        </div>
    </div>
    <!--End Appointment Page-->


<?=$this->endSection()?>
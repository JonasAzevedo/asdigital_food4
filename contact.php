<?php include('header.php'); ?>

<!-- CONTACT US STARTS HERE -->
<div class="container-fluid contact con-back">
    <div class="container">
        <div class="row text-center">
            <h1>CONTACT <span>US</span></h1>
        </div>
        <div class="row">
            <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="#">
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Name">
                            <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email">
                            <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject">
                        </div><!-- End Left Inputs -->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                            <textarea name="message" id="message" class="form textarea" placeholder="Message"></textarea>
                        </div><!-- End Right Inputs -->
                        <div class="relative fullwidth col-xs-12">
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button> 
                        </div><!-- End Bottom Submit -->
                        <div class="clear"></div>
                    </form>

                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                    </div>

                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->
        </div>
    </div>
</div>
<!-- CONTACT US ENDS HERE -->

<!-- REAL FOOD STARTS HERE -->
<div class="container-fluid real-food">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <img src="images/tomato.png" class="img-responsive">
            </div>
            <div class="col-sm-7">
                <h1>ONLY REAL <br> FOOD </h1>
                <p>
                    Real food that keeps up with your pace. Locations close to where you are or delivered directly to you. Stripped down, sealable packaging. The easiest way to eat well. 
                </p>
                <a href="orders.html">GET TYME</a>
            </div>
        </div>
    </div>
</div>
<!-- REAL FOOD ENDS HERE -->

<!-- PARALLAX SECTION STARTS HERE -->
<div class="container-fluid parallax-3">
</div>
<!-- PARALLAX SECTION ENDS HERE -->

<?php include('footer.php'); ?>
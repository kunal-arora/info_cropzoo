<?php
    require 'includes/head.php';

    include 'includes/header.php';
?>
       
    <!-- crop-about-page-container -->
    <div class="contact-us-page-container">
        
        <section class="container-fluid page-banner">
            
            <div class="row">
                <div class="col-xs-12 col-sm-12 banner-image" 
                     data-bottom-top='background-position: 50% 0%' 
                     data-top-bottom='background-position: 50% 50%'>
                    
                    <div class="container">
                        <h1>Contact us</h1>
                    </div>
                    
                </div>
            </div>

        </section>

        <section class="container-fluid section first-section-shadow ">

            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h3 class="section-heading">ENQUIRY</h3>
                        <p class="section-subheading text-muted">For any enquiries and special orders please send us your details:</p>
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-left">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-send">Send Enquiry</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-sm-6 col-xs-12 address-section">
                        <h3 class="section-heading">
                            FRUTTA-E-VERDURA FOOD SOLUTIONS PRIVATE LIMITED
                        </h3>
                        <p>
                            Regd. Office: 27-28, 2nd Floor, Double Storey, New Rajinder Nagar, New Delhi - 110060
                        </p>
                        <p>
                            Office/Warehouse: D-23, Upper Ground Floor, Rajan Babu Road, Adarsh Nagar, New Delhi - 110033
                        </p>
                        <p>                            
                            Tel: <a class="" href="tel:+919811755299">[Himanshu - Sales & Marketing Head] +91 9811755299</a> 
                        </p>
                        <p>
                            E-mail: <a class="" href="mailto:support@cropzoo.com">support@cropzoo.com</a>
                        </p>
                        <p>                            
                            CIN - U74999DL2017PTC323145
                        </p>
                    </div>

                </div>
            </div>
        </section>    	

    </div>
    <!-- /crop-about-page-container -->



<?php
    include 'includes/footer.php';
?>  
<script src="js/vendor/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/contact.js"></script>

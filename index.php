<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include_once 'includes/head.php'; ?>
    <title>Home</title>
  </head>
    <link rel="icon" href="./assets/medical-pills-pot-icon%20(2).png"  >
        <!--Bootstrap CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>
               
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
                <!-- Font Awesome CDN-->
        <script src="https://kit.fontawesome.com/dd6d077d8c.js" crossorigin="anonymous"></script>
                <!-- SlickSlider-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>
        <link rel="stylesheet" href="./css/style1.css">
  <body>
    <?php
    include_once 'includes/nav.php'; 
    include_once 'includes/db.inc.php';
    ?>
    <div class="header">
        <a href="#" class="logo"><i class="fas fa-heartbeat"></i> MedExpress.</a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="#about">about</a>
            <a href="login.php">Login</a>
            <a href="signup.php">Sign-Up</a>
            <a href="#review">Review</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </div>
    <!-- Header Section End -->

    <!-- Home Section starts -->
    <section class="home" id="home">
        <div class="image">
            <img src="./image/home-img.svg" alt="home-img.svg">
        </div>
        <div class="content">
            <h3>Your health, delivered.</h3>
            <p>Get well faster, Trusted meds, conveniently at your door step.</p>
            <a href="contact.php" class="btn">contact us <span class="fas fa-chevron-right"></span> </a>
        </div>
    </section>
    <!-- Home Section End -->

    <!-- icons section starts  -->
    <section class="icons-container">
        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>140+</h3>
            <p>Trusted medicines</p>
        </div>
        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>1040+</h3>
            <p>satisfied patients</p>
        </div>
        <div class="icons">
            <i class="fas fa-hospital"></i>
            <h3>80+</h3>
            <p>Cities Covered</p>
        </div>
    </section>
    <!-- icons section End  -->

    <!-- Service section Starts  -->
    <section class="services" id="services">
        <h1 class="heading">our <span>services</span></h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-ambulance"></i>
                <h3>24/7 Delivery</h3>
                <p>Order your medications online anytime, anywhere. No more waiting in long lines at a physical pharmacy.</p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>expert doctors</h3>
                <p>Our friendly and knowledgeable customer service team is here to answer your questions and assist you with your orders.</p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>medicines</h3>
                <p>We source our products from reputable suppliers and maintain high standards for quality control.</p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>total care</h3>
                <p>We provide accurate and up-to-date information on our website to help you make informed decisions about your health.</p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
    </section>
    <!-- Service section End  -->

    <!-- About section Starts  -->
    <section class="about" id="about">
        <h1 class="heading"><span>about</span> us</h1>
        <div class="row">
            <div class="image">
                <img src="./image/about-img.svg" alt="">
            </div>
            <div class="content">
                <h3>we take care of your healthy life</h3>
                <p>At MedExpress, we're committed to making your health and wellbeing a priority. We understand that life can be busy, and getting the medication you need shouldn't add to the stress. That's why we offer a convenient and reliable way to access a wide range of healthcare products.</p>
                <p>MedExpress is your one-stop shop for all your non-emergency healthcare needs. We're here to help you take control of your health and well-being, conveniently and affordably.</p>
                <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
    </section>
    <!-- About section End  -->

    <!-- Doctors section Starts  -->
    <section class="doctors" id="doctors">
        <h1  class="heading">our <span>E-Support</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="./image/WhatsApp Image 2024-04-12 at 11.22.20 PM.jpeg" alt="">
                <h3>Dr.Manas Chaudhary</h3>
                <span>expert Telemedicine Doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>
            <div class="box">
                <img src="./image/WhatsApp Image 2024-04-12 at 11.22.16 PM.jpeg" alt="">
                <h3>Dr. Om Dalbhanjan</h3>
                <span>expert Emergency Room Doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>
            <div class="box">
                <img src="./image/YIWC5393.JPG" alt="">
                <h3>Dr. Swarali Kulkarni</h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Doctors section Ends  -->

    <!-- Review section Starts  -->
    <section class="review" id="review">
        <h1 class="heading">client's <span>review</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="./image/WhatsApp Image 2024-04-13 at 2.06.54 PM.jpeg" alt="">
                <h3>Sana Patil</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">MedExpress was a fantastic experience! I needed to get a travel vaccination before my trip, and they were able to fit me in quickly and efficiently. The staff was incredibly friendly and helpful, and the doctor answered all my questions thoroughly.  I was in and out within an hour, which was amazing considering I hadn't booked an appointment.  Definitely recommend for anyone needing urgent care or quick medical services.</p>
            </div>
            <div class="box">
                <img src="./image/WhatsApp Image 2024-04-13 at 2.08.28 PM (1).jpeg" alt="">
                <h3>Atharva Karval</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">I loved the ease of booking my prescribed medicines online at MedExpress.  The website was user-friendly, and I could choose a time that worked for my schedule.  The clinic was clean and well-organized, and the wait time was minimal.  The doctor was attentive and listened to my concerns, and I appreciated the follow-up call the next day to check on how I was feeling.  Will definitely use MedExpress again!</p>
            </div>
            <div class="box">
                <img src="./image/WhatsApp Image 2024-04-13 at 2.06.33 PM.jpeg" alt="">
                <h3>Shweta Ingole</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">MedExpress was a breath of fresh air compared to traditional urgent care centers.  The upfront pricing was very affordable, and there were no hidden costs.  The doctor explained everything clearly and answered all my questions in a way I could understand.  They even offered some follow-up resources online, which I found helpful.  Highly recommend for anyone needing quality care without breaking the bank.</p>
            </div>
        </div>
    </section>
     <!-- Review section End  -->

    <!-- Footer section Starts  -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>our services</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> 27/7 Delivery</a>
                <a href="#"> <i class="fas fa-chevron-right"></i> E-Support</a>
                <a href="#"> <i class="fas fa-chevron-right"></i> Hygenic Packaging</a>
                <a href="#"> <i class="fas fa-chevron-right"></i> ML Based Recommendation System</a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +91-8421574604</a>
                <a href="#"> <i class="fas fa-phone"></i> +91-7507506401</a>
                <a href="#"> <i class="fas fa-envelope"></i> medexpress.info.com</a>
                <a href="#"> <i class="fas fa-envelope"></i> medexpress.info.@gmail.com</a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i>  Pune, India- 411001</a>
            </div>
            <div class="box">
              <h3 class="footer-heading mb-4">Navigation</h3>
              <ul class="list-unstyled">
              <li><a href="https://g.co/kgs/a3dbKG7">OUR OFFICE</a></li>
              <li><a href="#">MEDICAL PRODUCTS</a></li>
              <li><a href="contact.php">CONTACT </a></li>
              <li><a href="#"> SUPPORT</a></li>
            </ul>
          </div>
            </div>
        </div>
        <div class="credit">created by <span>MedExpress</span> | all right reserved</div>
    </section>
             
        
        </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script type="text/javascript" src="index.js"></script>


<div id="webchat"/>

<script src="https://cdn.jsdelivr.net/npm/rasa-webchat@1.5.0/lib/index.min.js"></script>
 <script> WebChat.default.init({

    selector: "#webchat",

    customData: {"language": "en"}, // arbitrary custom data. Stay minimal as this will be added to the socket

    socketUrl: "http://localhost:5500",

    socketPath: "/socket.io/",

    title: "pharmacy",

    subtitle: "assistant",

  })
    </script>
<?php include_once 'includes/footer.php'; ?> 

  </body>
</html>
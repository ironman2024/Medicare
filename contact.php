<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/medical-pills-pot-icon%20(2).png">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>
    <!-- Font Awesome CDN -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dd6d077d8c.js" crossorigin="anonymous"></script>
    <!-- SlickSlider -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>
    <link rel="stylesheet" href="./css/style1.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            font-size: 1.6rem;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow-x: hidden;
            background-image: url("https://www.bpwealth.com/images/contactus.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
        }

        .centered-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Adjust as needed */
            flex-direction: column;
        }

        .contact-title h1,
        .contact-title h2 {
            color: white;
            text-transform: uppercase;
        }

        .contact-form {
            width: 80%;
            max-width: 500px; /* Limit maximum width */
            margin-top: 30px; /* Adjust as needed */
        }

        .form-control {
            border: var(--border);
            background-color: transparent;
            color: white;
            font-size: 1.6rem;
            text-align: center;
            transition: all 0.5s;
        }

        .form-control::placeholder {
            color: white;
            opacity: 0.5;
        }

        .form-control:focus {
            outline: none;
            border-bottom-color: var(--green);
        }

        .submit {
            background-color: var(--green);
            border: 2px solid var(--green);
            color: #fff;
            font-size: 1.7rem;
            text-transform: uppercase;
            transition: all 0.5s;
        }

        .submit:hover {
            background-color: #fff;
            color: var(--green);
        }
    </style>
    <title>Contact Details</title>
</head>
<body>
    <div class="centered-content">
        <?php
            if(isset($_POST['submit'])) {        
                $dbServer = 'localhost';
                $dbUser = 'root';
                $dbPassword = '';
                $dbName = 'pharmacy';
                $conn = mysqli_connect($dbServer, $dbUser, $dbPassword, $dbName);
                if (isset($_POST['submit'])) {
                    $uname = $_POST['uname'];
                    $email = $_POST['email'];
                    $msg = $_POST['message'];
                    $sql = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES('$uname','$email','$msg') ";
                    $res = mysqli_query($conn, $sql);
                    if(!$sql) {
                        echo mysqli_error();
                    } else {
                        echo mysqli_insert_id($conn);
                    }
                }
            }
        ?>
        <div class="contact-title">
            <h1>Contact Us!</h1>
            <h2>We are always ready to serve you</h2>
        </div>
        <div class="contact-form">
            <form id="contact-form" method="post" action="index.php">
                <input type="text" name="uname" class="form-control" placeholder="Your Name" required><br>
                <input type="email" name="email" class="form-control" placeholder="Your Email" required><br>
                <textarea name="message" class="form-control" placeholder="Message" row="4" required></textarea><br>
                <input type="submit" class="form-control submit" value="Send Message">
            </form>
        </div>
    </div>
        <!-- Footer section Starts  -->
        <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>our services</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> 24/7 Delivery</a>
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
              <li><a href="#">COVID ESSENTIALS</a></li>
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

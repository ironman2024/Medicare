<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Font Awesome CDN -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style1.css">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: 'Poppins', sans-serif;
            font-size: 1.6rem;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .centered-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh; /* Adjust height to fill the viewport */
        }
        .contact-title h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            font-size: 18px; /* Increase font size */
            padding: 12px 20px; /* Adjust padding as needed */
        }
        .btn-primary {
            font-size: 18px; /* Increase font size */
            padding: 12px 20px; /* Adjust padding as needed */
        }
        #forgot {
            font-size: 16px; /* Increase font size */
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="index.php" class="logo"><i class="fas fa-heartbeat"></i> MedExpress.</a>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="index.php#about">about</a>
            <a href="index.php#blogs">Product Details</a>
            <a href="signup.php">sign-up</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </div>
    <div class="centered-content">
        <form action="php/login.inc.php" method="POST" class="center">
            <div class="contact-title">
                <h1>Login In!</h1>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">&nbsp;&nbsp;Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Login  </button>
            <a href="forgot.php" id="forgot">&nbsp;&nbsp;Forgot Password?</a>
        </form>
    </div>

    <?php
    if (isset($_SESSION['user'])) {
        header("Location: index.php");
        exit();
    }
    ?>
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
    <div class="credit">created by <span>MedExpress</span> | all right reserved</div>
  </section>
        
  <footer>
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
  }) </script>


    <!-- Bootstrap JS CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"></script>
</body>
</html>
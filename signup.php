<!doctype html>
<html lang="en">
<head>
  <link rel="icon" href="./assets/medical-pills-pot-icon%20(2).png">
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Font Awesome CDN -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/dd6d077d8c.js" crossorigin="anonymous"></script>
  <!-- SlickSlider -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
  <link rel="stylesheet" href="./css/style1.css">

  <style>
  /* Custom CSS for larger containers and bigger font */
  .container {
    max-width: 1200px; /* Adjust max-width as needed */
  }

  body {
    font-size: 18px; /* Increase font size */
  }

  /* Adjust form elements size */
  .form-control {
    font-size: 18px; /* Increase font size */
    padding: 12px 20px; /* Adjust padding as needed */
    margin: 8px 0; /* Adjust margin as needed */
    width: 100%; /* Make inputs full width */
    box-sizing: border-box; /* Include padding and border in element's total width and height */
    height: auto; /* Allow select dropdown to adjust height based on content */
  }

  /* Adjust width for select dropdown */
  select.form-control {
    width: 100%; /* Make select dropdown full width */
  }
</style>

</head>
<body>
  <?php include_once 'includes/nav.php'; ?>
  <div class="header">
      <a href="#" class="logo"><i class="fas fa-heartbeat"></i> MedExpress.</a>
      <nav class="navbar">
          <a href="index.php">home</a>
          <a href="index.php#about">about</a>
          <a href="index.php#blogs">Product Details</a>
          <a href="signup.php">sign-up</a>
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
  </div>
  <br><br>

  <form action="php/signup.inc.php" method="POST">
    <div class="row justify-content-center align-items-baseline">
    <div class="center" style="max-width: 1200px;">
      <div class="center">
        <div class="form-group">
          <label for="exampleInputName">Username</label>
          <input type="text" class="form-control" id="exampleInputName" name="username" placeholder="Enter username" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
          <label>Security Question</label>
          <select class="form-control" name="secque">
            <option>Which is your favourite color?</option>
            <option>Which is your first school?</option>
            <option>Which is your birth place?</option>
          </select>
        </div>
        <div class="form-group">
          <label for="answer">Answer</label>
          <input type="text" class="form-control" id="answer" name="secans" placeholder="Your Answer" required></input>
        </div>
        <button type="submit" class="btn btn-primary" name="signup">SignUp</button>
      </div>
      </div> 
    </div> 
  </form>
  <br>
  
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
  <?php include_once 'includes/footer.php'; ?>
</body>
</html>
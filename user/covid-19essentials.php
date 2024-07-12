<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body>
    <?php
    include_once 'includes/nav1.php'; 
    include_once 'includes/db.inc.php';
    ?> 
    <div class="header">
        <a href="#" class="logo"><i class="fas fa-heartbeat"></i> MedExpress.</a>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="index.php#about">about</a>
            <a href="index.php#blogs">Product Details</a>
            <a href="editprofile.php">Profile</a>
            <a href="viewcart.php" class="btn btn-dark" style="float: right; margin-right: 20px;">View Cart <i class="fas fa-cart-plus"></i></a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </div>
    <br><br>
    <br><br>
     <!-- Adjusted spacing -->

    <?php $i = 1; ?>
    
    <?php
    $sql = "SELECT * FROM items WHERE category='COVID-19 ESSENTIALS';";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) { ?>
        <div class="row" style="display: inline-flex; margin-left: 25px;"> <!-- Adjusted indentation -->
            <div class="card mb-3" style="width: 400px; margin-left: 20px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="../images/covid/<?php echo $row['img']; ?>" class="card-img" alt="img" style="margin-top: 20px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name']; ?></h5>
                            <p class="card-text"><?php echo $row['description']; ?></p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                            <a href="cart.php?id=<?php echo $row['id']; ?>" class="btn btn-success"><i class="fas fa-cart-plus"></i></a>
                            <button class="btn btn-danger btn-disabled"><?php echo 'Rs.'.$row['price']; ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    $i = $i + 1;
    }
    ?>

    <?php include_once 'includes/footer.php'; ?> 
    <script src="includes/jquery31.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#add").removeClass("active");
            $("#cat").addClass("active");
        });
    </script>
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

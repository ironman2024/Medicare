<?php
session_start(); // Add this line to start the session

include_once 'includes/head.php';
include_once 'includes/db.inc.php';

include_once 'includes/footer.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
    <!-- Include the CSS files -->
    <link rel="stylesheet" href="./css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/loc.css">
    <style>
        /* Custom CSS for alignment */
        .update-profile-container {
            margin-top: 50px; /* Adjust the top margin as needed */
        }
    </style>
</head>
<body>  
<?php
    include_once 'includes/nav.php'; 
    include_once 'includes/db.inc.php';
    ?>
<div class="header">
        <a href="#" class="logo"><i class="fas fa-heartbeat"></i> MedExpress.</a>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="#about">about</a>
            <a href="#review">Review</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </div>
    <div class="container update-profile-container">
        <h1 class="heading">Update Profile</h1>
        <div class="row justify-content-center">
            <form action="editprofile.php" method="POST" class="form">
                <?php
                if(isset($_POST['update'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];

                    $sql1 = "update userlogin set username='$name', email='$email', phone='$phone', address='$address' where id='$id';";
                    $result1 = mysqli_query($conn, $sql1);
                    if (!$result1) {
                        ?>
                        <div class="alert alert-danger" role="alert">
                            Error in Updating
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="alert alert-success" role="alert">
                            Profile Updated
                        </div>
                        <?php
                    }
                }
                ?>
                <div class="form-group">
                    <?php
                    $user = $_SESSION['username'];
                    $sql = "select * from userlogin where username='$user';";
                    $res = mysqli_query($conn,$sql);
                    if (mysqli_num_rows($res) > 0) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            ?>
                            <label for="id">Username</label>
                            <input type="text" class="form-control" id="id" name="id" value="<?php echo $row['id'];?>" readonly>
                            <label for="name">Username</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['username']; ?>">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['phone']; ?>">
                            <label for="address">Address</label>
                            <textarea type="text" class="form-control" id="address" name="address"><?php echo $row['address']; ?></textarea>
                            <?php
                        }
                    }
                    ?>
                </div>
                <button type="submit" class="btn btn-danger" name="update">Update Profile</button>
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

<!doctype html>
<html lang="en">
  <head>
    <?php 
    include_once 'includes/db.inc.php';
    include_once 'includes/head.php';
    ?>
    <title>Your Profile</title>
  </head>
  <body>
    <?php include_once 'includes/nav.php'; ?>
    <div class="container">
      <h1 align="center">Your Profile</h1>
      <form>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">E-Mail</th>
              <th scope="col">Address</th>
              <th scope="col">Phone</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Assuming user is logged in and you have their ID stored in session
            // Retrieve user data based on their ID
            $userId = $_SESSION['user_id']; // Adjust this to your actual session variable
            $sql = "SELECT * FROM userlogin WHERE id = $userId;";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($res);
            ?>
            <tr>
              <td><?php echo $row['username']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['address']; ?></td>
              <td><?php echo $row['phone']; ?></td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
    <?php include_once 'includes/footer.php'; ?>
    <script src="includes/jquery31.js"></script>
    <!-- Add your JavaScript code here if needed -->
  </body>
</html>

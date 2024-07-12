<?php
session_start();

include_once 'includes/db.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
  $itemId = $_POST['id'];

  // Check if user is logged in (optional, modify based on your logic)
  if (isset($_SESSION['userlogin_id'])) {
    $userloginid = $_SESSION['userloginid'];

    // Prepare SQL statement to check existing item (optional, optimize if needed)
    $checkSql = "SELECT * FROM cart WHERE userlogin_id = ? AND item_id = ?";
    $checkStmt = mysqli_prepare($conn, $checkSql);
    mysqli_stmt_bind_param($checkStmt, "ii", $userId, $itemid);
    mysqli_stmt_execute($checkStmt);
    $checkResult = mysqli_stmt_get_result($checkStmt);

    if (mysqli_num_rows($checkResult) > 0) {
      // Update quantity if item already exists
      $updateSql = "UPDATE cart SET quantity = quantity + 1 WHERE userlogin_id = ? AND items_id = ?";
      $updateStmt = mysqli_prepare($conn, $updateSql);
      mysqli_stmt_bind_param($updateStmt, "ii", $userloginid, $itemsid);

      if (mysqli_stmt_execute($updateStmt)) {
        echo "Item quantity updated in cart!";
      } else {
        echo "Failed to update item quantity in cart: " . mysqli_error($conn);
      }
    } else {
      // Retrieve item details (optional, move inside this block for optimization)
      $itemSql = "SELECT * FROM items WHERE id = ?";
      $itemStmt = mysqli_prepare($conn, $itemSql);
      mysqli_stmt_bind_param($itemStmt, "i", $itemId);
      mysqli_stmt_execute($itemStmt);
      $itemResult = mysqli_stmt_get_result($itemStmt);

      if ($itemRow = mysqli_fetch_assoc($itemResult)) {
        $name = $itemRow['name'];
        $price = $itemRow['price'];
        $quantity = 1; // Default quantity for now
        $date = date('Y-m-d'); // Current date

        // Insert new item into cart table
        $insertSql = "INSERT INTO `cart` (`id`, `name`, `price`, `quantity`,`date`) VALUES (?, ?, ?, ?, ?, ?)";
        $insertStmt = mysqli_prepare($conn, $insertSql);
        mysqli_stmt_bind_param($insertStmt, "iissis", $id, $name, $price, $quantity, $date);

        if (mysqli_stmt_execute($insertStmt)) {
          echo "Item added to cart!";
        } else {
          echo "Failed to add item to cart: " . mysqli_error($conn);
        }
      } else {
        echo "Item not found!";
      }
    }
  } else {
    // Handle case where user is not logged in (e.g., guest cart)
    echo "Please log in to add items to cart.";
  }
  
  mysqli_stmt_close($checkStmt); // Close check statement (if used)
  mysqli_stmt_close($updateStmt); // Close update statement
  mysqli_stmt_close($itemStmt); // Close item statement (if used)
  mysqli_close($conn);
} else {
  echo "Invalid request!";
}
?>
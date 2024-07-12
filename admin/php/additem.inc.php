<?php 
include_once '../includes/db.inc.php';

if (isset($_POST['add'])) {
    $itemname = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $desc = $_POST['desc'];
    // Handle image upload if needed
    $img = $_POST['img'];

    // Ensure that the category is formatted properly
    $cat = strtolower(str_replace(' ', '', $category));

    // Prepare and execute the SQL statement to insert the new item
    $sql = "INSERT INTO items (name, category, price, description, stock, img) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssdsss", $itemname, $category, $price, $desc, $stock, $img);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Redirect to the appropriate category page upon successful addition
        header("Location: ../{$cat}.php?result=success");
        exit();
    } else {
        // Redirect to the add item page with a failure message
        header("Location: ../additem.php?result=fail");
        exit();
    }
}
?>

<!-- order.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Confirmation</title>
</head>
<body>
  <h1>Order Confirmation</h1>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $quantity = $_POST['quantity'];
    $size = $_POST['size'];
    $shape = $_POST['shape'];
    $toppings = isset($_POST['toppings']) ? $_POST['toppings'] : [];
    $crust = $_POST['crust'];
    $deliveryMethod = $_POST['delivery-method'];
    $comments = $_POST['comments'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pizzaType = $_POST['pizza-type'];

    // Display order details
    echo "<h2>Order Details</h2>";
    echo "<p>Quantity: $quantity</p>";
    echo "<p>Size: $size</p>";
    echo "<p>Shape: $shape</p>";
    echo "<p>Toppings: " . implode(", ", $toppings) . "</p>";
    echo "<p>Crust Type: $crust</p>";
    echo "<p>Delivery Method: $deliveryMethod</p>";
    echo "<p>Comments: $comments</p>";

    // Display contact information
    echo "<h2>Contact Information</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";

    // Display pizza type
    echo "<h2>Pizza Type</h2>";
    echo "<p>Pizza Type: $pizzaType</p>";
  } else {
    echo "<p>No order details found. Please go back and submit the form.</p>";
  }
  ?>
</body>
</html>

<?php
include 'config.php';
include 'head.html';

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Bakary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <h1>Customer Details</h1>
    <form  action="checkout.php?price=<?php echo $_GET['price']?>" method="POST" class="w3-container">
      <p>
      <label>Name</label>
      <input name="name" class="w3-input" type="text"></p>
      <p>
      <label>Address</label>
      <input name="address" class="w3-input" type="text"></p>
      <p>
      <label>Phone Number</label>
      <input name="number" class="w3-input" type="text"></p>

        <p name="price" id='price'>Price: <?php echo $_GET['price'] ?></p>
        <input type="submit" name="submit" class="w3-btn w3-blue" value="Checkout">
    </form>
    <?php
        error_reporting(0);
        $oder_details = json_encode($_SESSION["cart"]);
        // $order_details_original = json_decode($oder_details,true);
        // print_r($order_details_original);
        $name = $_POST['name'];
        $addres = $_POST['address'];
        $number = $_POST['number'];
        $price = $_POST['price'];
        $sql = "INSERT into order_details (name,address,phone,price,order_details) values ('$name','$addres','$number','$price','$oder_details')";

        if ($_POST['submit'] ) {
            if (mysqli_query($con, $sql)) {
                echo "Item added successfully";

                session_destroy();

            } else {
                echo "Something went wrong";

            }

        }
        ?>


    
</body>

<?php


    include 'footer.html';
?>
</html>
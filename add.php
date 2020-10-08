<?php
include 'config.php';
include 'head.html';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Bakary</title>
</head>
<body class="add">
<form action="add.php" method="POST">

    <label>Item name</label>
    <input type="text" name="i_name"><br>
    <label>Item Description</label>
    <input type="text" name="i_description"><br>

    <label>Item thumbnail</label>
    <input type="text" name="thumbnail"><br>
    <label>Item price</label>
    <input type="text" name="i_price"><br>
    <input type="submit" name="submit" value="Add">
</form>
<?php
error_reporting(0);
$name = $_POST['i_name'];
$description = $_POST['i_description'];
$thumbnail = $_POST['thumbnail'];
$price = $_POST['i_price'];
$sql = "INSERT into food (name,description,price,thumbnail) values ('$name','$description','$price','$thumbnail')";

if ($_POST['submit']) {
    if (mysqli_query($con, $sql)) {
        echo "Item added successfully";

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
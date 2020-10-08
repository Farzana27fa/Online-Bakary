<?php
include 'config.php';
include 'head.html';
?>

<html>

<head>
    <title>Update existing data</title>

</head>

<body class="update">

<form action="update.php" method="POST">


    <label>Item Description</label>
    <input type="text" name="description"><br>

    <label>Item thumbnail</label>
    <input type="text" name="thumbnail"><br>
    <label>Item price</label>
    <input type="text" name="price"><br>
    <input type="submit" name="submit" value="update">
</form>

<?php
error_reporting(0);
$name = $_POST['name'];
$description = $_POST['description'];
$thumbnail = $_POST['thumbnail'];
$price = $_POST['price'];
$sql = "Update food 
SET description = '$description' , price= '$price'
WHERE name = '$name'";

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

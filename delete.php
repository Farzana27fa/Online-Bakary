<?php
include 'config.php';
include 'head.html';
?>
<html>
<head>
    <title>Delete Item</title>


</head>

<body class="delete">

<form action="delete.php" method="POST">

    <label>Item name</label>
    <input type="text" name="name"><br>

    <input type="submit" name="submit" value="Delete">
</form>


<?php
error_reporting(0);
$name = $_POST['name'];

$sql = "DELETE FROM food
WHERE name = '$name'";

if ($_POST['submit']) {
    if (mysqli_query($con, $sql)) {
        echo "Item deleted successfully";

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

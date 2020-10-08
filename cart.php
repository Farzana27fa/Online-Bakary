<?php
include 'config.php';
include 'head.html' ;

?>

<html>

<body>

<?php
error_reporting(0);
$sql = "Select * from food";
$result =  $con->query($sql);//to get all dta from food table

if ($result->num_rows > 0) {//add.php te kono input dile add korbe
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="cart">

    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>subtotal</th>
        </tr>
        <tr>
            <td> '.$row['name'].'</td>
            <td><input type="number" value="1"></td>
            <td>'.$row['price'].'</td>
        </tr>
    </table>
</div>';
    }
} else {
    echo "0 results";
}
$con->close();
?>

</body>
<?php
include 'footer.html';
?>
</html>

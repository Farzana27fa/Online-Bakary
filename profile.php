<?php
include 'config.php';
include 'head.html' ;

?>
<html>
<body>



<?php
error_reporting(0);
$sql = "Select * from user";
$result =  $con->query($sql);//to get all dta from food table

if ($result->num_rows > 0) {//add.php te kono input dile add korbe
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="prof">
                            <img src="images/pro.png" height="20px" width="20px"><br>

                                <h4>Name:'.$row['name'].'</h4>
                                <h4>Email:'.$row['email'].'</h4>
                                <h4>Mobile number:'.$row['mobile'].'</h4>
                                <h4>Address:'.$row['address'].'</h4>

                        </div>';
    }
} else {
    echo "0 results";
}
$con->close();
?>

<div style="float:right" >

    <button type="button">
        <a href="userlogout.php" >LOG-OUT</a>
    </button>

</div>
</body>

<?php
include 'footer.html';
?>

</html>

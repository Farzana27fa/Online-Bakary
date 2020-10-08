<?php
include 'config.php';
include 'head.html';
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



	<?php

                $sql = "Select * from order_details";
                $result =  $con->query($sql);//to get all dta from food table

                if ($result->num_rows > 0) {//add.php te kono input dile add korbe
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '
                            
                            <div class="menu-content">
                                <h4>Name:'.$row['name'].'<br>address'.$row['address'].'<br> Order Details: '.$row['order_details'].'</h4>
                                
                                
                            </div>
                        ';
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
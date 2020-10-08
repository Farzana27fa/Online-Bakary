<?php
  include 'config.php';
  include 'head.html';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<title>Online Bakary</title>

</head>
<body id="b">


<center>
<div id="d">

<center><form action="register.php" method="POST">

<b><label>Name:</label>
<input name="username" type="text" id="form" placeholder="Enter your name" required>
</input><br>

<b><label>Email:</label>
<input name="email" type="email" id="form" placeholder="Enter your email" required>
</input><br>

<b><label>Mobile number:</label>
<input name="mobile" type="mobile" id="form" placeholder="Enter your mobile number" required>
</input><br>

<b><label>Address:</label>
<input name="address" type="text" id="form" placeholder="Write your address" required>
</input><br>

<b><label>Password</label>
<input name="password" type="password" id="form" placeholder="Enter your Password" required>
</input><br>

<b><label>Confirm Password</label>
<input name="cpassword" type="password" id="form" placeholder="Confirm your Password" required>
</input><br>

<!button work>

<input name="signup" type="submit" id="button" value="SIGN-UP">
</input>
<a href="login.php"><input name="back" type="button" id="button" value="BACK TO LOG-IN">
</input>


</form></center>

</center>
<?php
//coding 

if(isset($_POST['signup'])){
	var_dump($_POST);
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];

	
	
	
	if($password==$cpassword){//will allow to register as duplicate email didnot find
		
		$query= "select * from user where email='$email'"; //for restriction of double registration
		$query_run= mysqli_query($con,$query);
		if($query_run){
			
			if(mysqli_num_rows($query_run) >0){
				
				echo "
		<script>
		alert('User ALready Registered ');
		window.location.href='login.php';
		</script>
		";
				
				
	}else{//db te data insert
				
	$insertion= "insert into user (username,email,mobile,address,password) values('$username','$email','$smobile','$address','$password')";//have to follow the serial of created db
	
	           
				$insertion_run = mysqli_query($con,$insertion);
				
				if($insertion_run ){
					
					echo "
		<script>
		alert('Registration Successful ');
		window.location.href='index.php';
		</script>
		";
					
				}else{
					
						echo "
		<script>
		alert('Registration Failed  ');
		window.location.href='register.php';
		</script>
		";
				}
				
				
			}
			
			
			
		}else{
			echo "
		<script>
		alert('Database Problem');
		window.location.href='register.php';
		</script>
		";
			
		}
		
		
	}
	else{
		echo "
		<script>
		alert('Password & Confirm Password not match');
		window.location.href='register.php';
		</script>
		";
	}
	
	
}
else{
	
	
}




include 'footer.html';

?>
</html>














</div>
</body>

</html>

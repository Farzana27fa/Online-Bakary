<?php
  include 'config.php';
  include 'head.html';
?>

<!DOCTYPE>
<html>

<head>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<title>Online Bakary</title>

</head>

<body id="b">
<center>

	
<div id="d">


<center>

<form action="login.php" method="POST">

<b><label>Email</label>
<input name="email" type="email" id="form" placeholder="Enter your email" required>
</input><br>
<b><label>Password</label>
<input name="password" type="password" id="form" placeholder="Enter your Password" required>
</input><br>


    <!button work>

<input name="login" type="submit" id="button" value="LOGIN">
</input><br>
Not registered?
<a href="register.php"><input name="reg" type="button" id="button" value="REGISTER">
</input>


</form></center>


<?php

    if(isset($_POST['login'])){
		
		$email= $_POST['email'];
		$password=$_POST['password'];
		
		$check = "select*from user where email='$email' AND password ='$password'";
		$check_work= mysqli_query($con,$check);
		
		if($check_work){
			if(mysqli_num_rows($check_work) > 0 ){
				
				echo"
				<script>
				alert('You are Successfully  Logged in');
				window.location.href='index.php';
				</script>
				";
				
			}else{
				
				echo"
				<script>
				alert('Password or Email not Found ');
				window.location.href('register.php');
				</script>
				";
			}
			
			
		}else{
			
			
				echo"
				<script>
				alert('Database Error  ');
				window.location.href('register.php');
				</script>
				";
		}
		
		
		
	}else{
		
		
	}





?>










</div>
</body>
<?php
include 'footer.html';
?>

</html>

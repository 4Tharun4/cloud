<?php
require("dbconnadmin.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	
	<title>AdminLogin</title>
</head>
<body>
	
		<div class="form ">
			<div class="header">
		<header>Admin Login</header>
	       </div>
		<form method="POST" >
		<div class="Login">
		<i class="material-symbols-outlined">person</i>


             <input type="text" placeholder="AdminLogin" name="Admin_Name">
		
	        </div>

	<div class="Password">
		<i class="material-symbols-outlined">Password
</i>
<input type="Password" placeholder="Password" name="Admin_Password">
		
	</div>
	<button type="submit" name="Sign in">Sign in </button>
	<div class="extra">
		<a href="#">Forget Password</a>
	</div>
	</form>
		</div>
			
	
	
			
	

	<?php
	if (isset($_POST['Sign in'])) 
	{
		echo "clicked";
	}
	{
		$query="SELECT * FROM `admin_form` WHERE `Admin_name`='$_POST[Admin_Name]' AND `Password`='$_POST[Admin_Password]'";
	 $result=mysqli_query($con,$query);
	 if(mysqli_num_rows($result)==1)
	 {
	 	session_start();
	 	$_SESSION['AdmiLoginId']=$_POST['Admin_Name'];
	 	header("Location: admin.php");
	 }
	 else{
	 	echo '<div class="alert alert-danger" role="alert">
  INCORRECT PASSWORD</div>';

	 }
	}
	

		
	
	?>


</body>
</html>
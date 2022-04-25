
<?php
$isPost=false;
$username="";
$pass="";
?>

<!DOCTYPE html>

<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="container">
	<form method="post" action="loginCheck.php">
	<!-- <form method="post" action="#"> -->
		<fieldset>
			<legend style="font-size: larger; color:#626262">LOGIN</legend>
			<div class="container2">
			<table>
				<tr>
					<td>USERNAME</td>
					<td><input type="text" name="username" ></td>
					<?php
					if(isset($_POST["submit"]))
					{
						$isPost=true;
						if(isset($_POST["username"]))
						{
							$username=$_POST["username"];
						}
					}
					if($isPost==true && $username=="")
					{
						// echo "<span style='color:red;'>required</span>";
					}
					?>
				</tr>
				<tr>
					<td>PASSWORD</td>
					<td><input type="password" name="pass"></td>
					<?php
					if(isset($_POST["submit"]))
					{
						$isPost=true;
						if(isset($_POST["pass"]))
						{
							$username=$_POST["pass"];
						}
					}
					if($isPost==true && $username=="")
					{
						// echo "<span style='color:red;'>required</span>";
					}
					?>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
			</div>
			<a id="p" style="color: red;" href="http://localhost/log/registration.php">Registration</a>
		</fieldset>
		
	</form>
	</div>
</body>
</html>
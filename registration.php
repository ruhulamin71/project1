<?php

	// if(isset($_GET['error'])){
		
	// 	if($_GET['msg'] == "invalid_user"){
	// 		echo "username/password not valid...";
	// 	}

	// 	if($_GET['msg'] == "null_username"){
	// 		echo "Username field is empty...";
	// 	}

	// 	if($_GET['msg'] == "null_password"){
	// 		echo "Password field is empty...";
	// 	}
	// }
?>

<!DOCTYPE html>

<html>
<head>
	<title>Registration Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
	<form method="post" action="login.php">
        <div class="container">
		<fieldset>
			<legend style="font-size: larger; color:#626262">SignUp</legend>
            <div class="container2">
			<table>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" ></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
                <tr>
					<td>Name</td>
					<td><input type="username" name="username"></td>
				</tr>
                <tr>
					<td>Birthday</td>
					<td><input type="date" name="date"></td>
				</tr>
                <tr>
					<td>Gender</td>
					<td><input type="radio" name="gender" value="male">Male</td>
                    <td><input type="radio" name="gender" value="female"> Female</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
            </div>
		</fieldset>
	</form>
    </div>
</body>
</html>
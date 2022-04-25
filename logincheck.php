<?php
//session
session_start();
$_SESSION["username"]="Parker";
// echo "Session variable created!";
	
	if(isset($_POST['submit'])){

		//declaration
		$uname 	= $_POST['username'];
		$pass 	= $_POST['pass'];

		//validation
		if($uname == ""){
			// echo "Username field is empty...";
			header('location: loginu.php');

		}else if ($pass==""){
			// echo "Password field is empty...";
			header('location: loginp.php');
		}
		
		else{
			if($uname == "dd" && $pass=="ddd"){
				echo "valid user!";
				header('location: home.html');
			}
			else if($uname == $pass){
				header('location:admin.php');
				}
			
			else{
				// echo "invalid user!please register...";
				echo "<P>Invalid user please <a style='color:red;'href='http://localhost/log/registration.php'>register</a></P>";
				// header('location: login.php?msg=invalid_user');
			}
		}
	}
	?>
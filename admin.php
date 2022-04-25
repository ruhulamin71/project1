        <?php
        // show userdata 
        //     if(isset($_POST['submit'])){
        //         $jsondata=file_get_contents("user.json");
        //         $json=json_decode($jsondata,true);
        //         // echo $json['user1']['name'];            
        //         echo $json ["user1"] [0] ["email"];            
        //     }
        //     //show cookie
        //     if(isset($_POST['submit1'])){
        //     setcookie("username","Cookie Set",time()+60*60*24*7*2);
        //     if(isset($_COOKIE["username"]))
        //     {
        //         echo $_COOKIE["username"];
        //     }
        // }
         ?>
         <?php
         session_start();
         ?>
<!DOCTYPE html>
<head>
    <title>AdminPage</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
    <fieldset>
    <legend style="font-size: larger; color:#626262">ADMIN</legend>
    <div class="container2">
    <H1>Hello <?php echo $_SESSION["username"]; ?></H1>
    <form action="#" method="post">
        <input type="submit" name="submit" value="Show User">
        <input type="submit" name="submit1" value="Cookie">
        <input type="submit" name="submit2" value="Logout">
    </form>
    </div>
    </fieldset>
    <fieldset>
        <div class="container3">
    <?php
            //show userdata 
            if(isset($_POST['submit'])){
                $jsondata=file_get_contents("user.json");
                $json=json_decode($jsondata,true);
                // echo $json['user1']['name'];            
                echo $json ["user1"] [0] ["email"];            
            }
            //show cookie
            if(isset($_POST['submit1'])){
            setcookie("username","Cookie Set",time()+60*60*24*7);
            if(isset($_COOKIE["username"]))
            {
                echo $_COOKIE["username"];
            }
        }
        if(isset($_POST['submit2'])){
            header('location: login.php');
        }
         ?>
    </div>
    </fieldset>
    </div>
</body>
</html>
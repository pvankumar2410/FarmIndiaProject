<?php require_once "controllerUserData.php";
require_once "connection.php";
?>
<?php
$email = $_SESSION['email'];
$password = $_SESSION['password'];

$sql = "SELECT * FROM usertable WHERE email = '$email'";
$run_Sql = mysqli_query($con, $sql);
$fetch_info = mysqli_fetch_assoc($run_Sql);
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>My Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<link  rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto" />

    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="myaccountstyle.css">

    
    
    
  </head>

  <body>

    <!-- this is the markup. you can change the details (your own name, your own avatar etc.) but don’t change the basic structure! -->

<aside class="profile-card">

    <header>
    
        <!-- here’s the avatar -->
        <a href="http://victory-design.ru/">
            <img src="http://victory-design.ru/sandbox/codepen/profile_card/avatar.svg" />
        </a>
        
        <!-- the username -->
        <h1><?php echo $fetch_info['name'] ?></h1>
        
        <!-- and role or location -->
        <h2>Aadhaar Id:  <?php echo $fetch_info['aadhaar'] ?></h2>
        <h2>Account Status:  <?php echo $fetch_info['status'] ?></h2>
        <br>
        <br>
        <h2>Email:  <?php echo $fetch_info['email'] ?></h2>
        <h2>Phone No:  <?php echo $fetch_info['phone'] ?></h2>
        <h2>D.O.B:  <?php echo $fetch_info['date'] ?></h2>
    
    </header>




    
    
    
    
    
  </body>
</html>

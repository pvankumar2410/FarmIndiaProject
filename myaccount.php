<?php
 					include 'bidding/admin/db_connect.php';
 				
 					$users = $conn->query("SELECT * FROM users order by name asc");
 					$i = 1;
 					while($row= $users->fetch_assoc()):
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
        <h1><?php echo ucwords($row['name']) ?></h1>
        
        <!-- and role or location -->
        <h2>Aadhaar Id:  <?php echo ucwords($row['aadhaar']) ?></h2>
        
        <br>
        <br>
        <h2>Email: <?php echo ucwords($row['email']) ?></h2>
        <h2>Phone No: <?php echo ucwords($row['contact']) ?></h2>
        <h2>D.O.B: <?php echo ucwords($row['date']) ?></h2>
    
    </header>




    
    <?php endwhile; ?>
    
    
    
  </body>
</html>

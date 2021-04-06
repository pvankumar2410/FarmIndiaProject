<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</head>
<body background="#ffffff">
	  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FarmIndia</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="read.php">MY JOBS</a></li>
      <li><a href="postjobs.php">NEW JOB</a></li>
       <li><a href="app.php">APPLICATIONS</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Hello , <?php echo $_SESSION['name']; ?></a></li>
    </ul>
  </div>
</nav> 
    <!-- <h1 style="color: black" >Hello FarmIndia Employeer,<br> <?php echo $_SESSION['name']; ?></h1>

      <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Manage Account
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="change-password.php">Change Password</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div> -->
</body>
</html>

<?php 
}else{
     header("Location: index1.php");
     exit();
}
 ?>

<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
<?php
if(isset($_GET['id'])){
$qry = $conn->query("SELECT * FROM users where id= ".$_GET['id']);
foreach($qry->fetch_array() as $k => $val){
  $$k=$val;
}
}
?>
 <!DOCTYPE html>
<html>
<head>
  <title>Jobs posting</title>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
 
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FarmIndia</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="read.php">MY JOBS</a></li>
      <li><a href="postjobs.php">NEW JOB</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Hello , <?php echo $_SESSION['name']; ?></a></li>
    </ul>
  </div>
</nav> 
 
 <form method="post" action="jobinsert.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="position">Position</label>
      <input type="text" class="form-control" name="Position" id="Position" placeholder="position">
    </div>
    <div class="form-group col-md-6">
      <label for="sslary">Salary</label>
      <input type="text" class="form-control" name="Salary" id="Salary" placeholder="Salary">
    </div>
  <div class="form-group col-md-6">
      <label for="Availability">Availability</label>
      <input type="text" class="form-control" name="Availability" id="Availability" placeholder="No of Availability">
    </div>
  <div class="form-group col-md-6">
    <label for="Description">Description</label>
    <input type="text" class="form-control" name="Description" id="Description" placeholder="Description">
  </div>
  
  </div>
 <button type="submit" name="submit" class="btn btn-primary col-md-3 ">Post</button> 
 
</form>
</body>
</html>
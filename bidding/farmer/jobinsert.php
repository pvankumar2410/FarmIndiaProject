<?php

include_once 'db_conn.php';
if(!isset($_SESSION))
{
session_start();
}
/*
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
 <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <nav class="home-nav">
  <a href="logout.php">Logout</a>
     </nav>

<?php 
}else{
     header("Location: index.php");
     exit();
}

if(isset($_SESSION['id'])){
$qry = $conn->query("SELECT id as a FROM users where id= ".$_SESSION['id']);
foreach($qry->fetch_array() as $k => $val){
  $$k=$val;
}
}

*/

if(isset($_POST['submit']))
{  
   $id=$_SESSION['id'];
   $Position = $_POST['Position'];
   $Salary = $_POST['Salary'];
   $Availability = $_POST['Availability'];
   $Description = $_POST['Description'];
   $sql = "INSERT INTO vacancy (position,salary,availability,user_id,description)
   VALUES ('$Position','$Salary','$Availability','$id','$Description')";
   if (mysqli_query($conn, $sql)) {
    echo "New record created successfully !";
    header("Location: postjobs.php");
   } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>

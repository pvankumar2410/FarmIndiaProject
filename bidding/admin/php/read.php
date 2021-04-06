<?php  

include('db_conn.php');
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
 

<?php 
}else{
     header("Location: index.php");
     exit();
}
 
$sql = "SELECT * FROM users JOIN vacancy where vacancy.user_id=users.id";
$result = mysqli_query($conn, $sql);
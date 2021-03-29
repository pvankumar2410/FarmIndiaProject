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
 
$sql = "SELECT * FROM users JOIN vacancy where vacancy.user_id='" . $_SESSION['id'] . "' group by vacancy.position";
$result = mysqli_query($conn, $sql);
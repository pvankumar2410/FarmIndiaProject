<?php  

if(isset($_GET['id'])){
   include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM application
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../myjobs.php?success=successfully deleted");
   }else {
      header("Location: ../myjobs.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ../myjobs.php");
}
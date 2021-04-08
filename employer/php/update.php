<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM vacancy JOIN users WHERE vacancy.id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$position = validate($_POST['position']);
	$salary = validate($_POST['salary']);
	$availability = validate($_POST['availability']);
  $description = validate($_POST['description']);


	if (empty($position)) {
		header("Location: ../update.php?id=$id&error=Name is required");
	}else if (empty($salary)) {
		header("Location: ../update.php?id=$id&error=Email is required");
	}else {
0
       $sql2 = "UPDATE vacancy 
               SET position='$position', salary='$salary', availability='$availability', description='$description' FROM vacancy  JOIN users
               WHERE vacancy.id=$id ";
       $result = mysqli_query($conn, $sql2);
       if ($result) {
       	  header("Location: ../read.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}
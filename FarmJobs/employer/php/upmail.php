<?php 

if (isset($_GET['id'])) {
	include "../db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM application join users where user_id='" . $_SESSION['id'] . "' group by email";
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

	$position = validate($_POST['firstname']);
	$salary = validate($_POST['email']);
	$availability = validate($_POST['contact']);
  $description = validate($_POST['address']);


	if (empty($position)) {
		header("Location: ../update.php?id=$id&error=Name is required");
	}else if (empty($salary)) {
		header("Location: ../update.php?id=$id&error=Email is required");
	}else {

       $sql2 = "UPDATE application 
               SET firstname='$position', email='$salary', contact='$availability', address='$description' FROM application  JOIN users
               WHERE application.id=$id ";
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
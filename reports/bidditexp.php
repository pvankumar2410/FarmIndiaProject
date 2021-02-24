<?php
include_once("inc\dbbid.php");


$sqlQuery = "SELECT id,name, password, email,contact, address,type,date_created,aadhaar,date FROM users";
$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
$developersData = array();
while( $developer = mysqli_fetch_assoc($resultSet) ) {
	$developersData[] = $developer;
}	
if(isset($_POST["dataExport"])) {	
	$fileName = "webdamn_export_".date('Ymd') . ".xls";			
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$fileName\"");	
	$showColoumn = false;
	if(!empty($developersData)) {
	  foreach($developersData as $developerInfo) {
		if(!$showColoumn) {		 
		  echo implode("\t", array_keys($developerInfo)) . "\n";
		  $showColoumn = true;
		}
		echo implode("\t", array_values($developerInfo)) . "\n";
	  }
	}
	exit;  
}
?>
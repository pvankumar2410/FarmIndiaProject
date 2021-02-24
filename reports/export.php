<?php
include_once("inc/db_connect.php");
$sqlQuery = "SELECT user_id, first_name, last_name,email, username, adhaar FROM user ";
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

$sqlQuery2 = "SELECT id,user_id, product_id, bid_amout,status, date_created, adhaar FROM user ";
$resultSet2 = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
$developersData2 = array();
while( $developer2 = mysqli_fetch_assoc($resultSet) ) {
	$developersData2[] = $developer2;
}	
if(isset($_POST["dataExport2"])) {	
	$fileName = "webdamn_export_".date('Ymd') . ".xls";			
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$fileName\"");	
	$showColoumn = false;
	if(!empty($developersData2)) {
	  foreach($developersData2 as $developerInfo2) {
		if(!$showColoumn) {		 
		  echo implode("\t", array_keys($developerInfo2)) . "\n";
		  $showColoumn = true;
		}
		echo implode("\t", array_values($developerInfo2)) . "\n";
	  }
	}
	exit;  
}
?>
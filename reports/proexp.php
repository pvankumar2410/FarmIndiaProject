<?php
include_once("inc\dbbid.php");


$sqlQuery = "SELECT id,category_id, name, description,start_bid, regular_price,bid_end_datetime,img_fname,date_created FROM products";
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
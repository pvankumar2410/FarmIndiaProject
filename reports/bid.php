<?php 
include_once("inc/db_connect2.php");
include("export2.php");
//include("inc/header.php"); 
include("header.php");
include("leftside.php");
?>

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<div class="container" align="center" >	
	<div class="card-header"><b style="font-size:25px">Bid Data</b></div>
	<div class="well-sm col-sm-12">
		<div class="btn-group pull-right">	
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">					
				<button class="btn btn-primary float-right btn-sm" type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-info">Export To Excel</button>
			</form>
		</div>
	</div>				  
	<table id="" class="table table-striped table-bordered" border="1%" align="center">
		<tr>
			<th class="text-center">bid_id</th>
			<th class="text-center">user_id</th>
			<th class="text-center">product_id</th>
			<th class="text-center">bid_amount</th>			
			<th class="text-center">status</th>
			<th class="text-center">date_created</th>
		</tr>
		<tbody>
			<?php foreach($developersData as $developer) { ?>
			   <tr>
			   <td class="text-center"><?php echo $developer ['id']; ?></td>
			   <td class="text-center"><?php echo $developer['user_id']; ?></td>
			   <td class="text-center"><?php echo $developer ['product_id']; ?></td>  
				<td><?php echo $developer ['bid_amount']; ?></td>			   
			   <td class="text-center"><?php echo $developer ['status']; ?></td>
			   <td class="text-center"><?php echo $developer['date_created']; ?></td>   
			   </tr>
			<?php } ?>
		</tbody>
    </table>		
	
</div>

<?php
include("footer.php")
?>





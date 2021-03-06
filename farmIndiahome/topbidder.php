 
<?php 
include_once("inc\dbbid.php");
include("topbidderexp.php");
//include("inc/header.php"); 

?>

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<div class="container" align="center"  >	
	<div class="card-header"><b style="font-size:29px">Statistics of Top Selling Products </b></div>
	<div class="well-sm col-sm-12">
		<div class="btn-group pull-right">	
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">					
				<button class="btn btn-primary float-right btn-sm" type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-info">Download report</button>
			</form>
		</div>

	</div>				  

		<table id="" class="table table-striped table-bordered" border="2%/" >
		<tr>
			<th class="text-center">Bid Amount</th>
			<th class="text-center">Product Id </th>
			<th class="text-center">Commoditites/Item Name</th>

		</tr>
		<tbody>
			<?php foreach($developersData as $developer) { ?>
				<!--id,name, password, email,contact, address,type,date_created,aadhaar,date-->
			   <tr>
			   <td class="text-center"><?php echo $developer ['a']; ?></td>
			   <td class="text-center"><?php echo $developer['b']; ?></td>
			   <td class="text-center"><?php echo $developer['d']; ?></td>
  
			   </tr>
			<?php } ?>
		</tbody>
    </table>		
</div>





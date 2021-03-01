<?php 
include_once("inc\dbfarmer.php");
include("eqpexp.php");
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
	<div class="card-header"><b style="font-size:29px">Equipment Details</b></div>
	<div class="well-sm col-sm-12">
		<div class="btn-group pull-right">	
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">					
				<button class="btn btn-primary float-right btn-sm" type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-info">Export To Excel</button>
			</form>
		</div>
	</div>				  
	<table id="" class="table table-striped table-bordered" border="2%" >
		<tr>
			<th class="text-center">Id</th>
			<th class="text-center">categories id</th>
			<th class="text-center">equipment</th>
			<th class="text-center">modelname</th>			
			<th class="text-center">description</th>
			<th class="text-center">qty</th>
			<th class="text-center">price</th>
			<th class="text-center">image</th>
			<th class="text-center">date_created</th>
		</tr>
		<tbody>
			<?php foreach($developersData as $developer) { ?>
				<!--id,name, password, email,contact, address,type,date_created,aadhaar,date-->
			   <tr>
			   <td class="text-center"><?php echo $developer ['id']; ?></td>
			   <td class="text-center"><?php echo $developer['category_ids']; ?></td>
			   <td class="text-center"><?php echo $developer ['title']; ?></td>  
				<td><?php echo $developer ['author']; ?></td>			   
			   <td class="text-center"><?php echo $developer ['description']; ?></td>
			   <td class="text-center"><?php echo $developer['qty']; ?></td>  
			    
			     <td class="text-center"><?php echo $developer['price']; ?></td>  
			      <td class="text-center"><?php echo $developer['image_path']; ?></td> 
			       <td class="text-center"><?php echo $developer['date_created']; ?></td>   
			   </tr>
			<?php } ?>
		</tbody>
    </table>		
	<?php 
     include('eqprep.php');
	?>
</div>

<?php 
include("footer.php")
?>





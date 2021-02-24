<?php 
include_once("inc/db_connect.php");
include("export.php");
//include("inc/header.php"); 
?>
<title>Admin_data</title>
<div class="container" align="center" >	
	<h2 >Users Data</h2>
	<div class="well-sm col-sm-12">
		<div class="btn-group pull-right">	
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">					
				<button type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-info">Export To Excel</button>
			</form>
		</div>
	</div>				  
	<table id="" class="table table-striped table-bordered" border="1%" align="center">
		<tr>
			<th>user_id</th>
			<th>first name</th>
			<th>last_name</th>
			<th>email</th>			
			<th>username</th>
			<th>adhaar</th>
		</tr>
		<tbody>
			<?php foreach($developersData as $developer) { ?>
			   <tr>
			   <td><?php echo $developer ['user_id']; ?></td>
			   <td><?php echo $developer ['first_name']; ?></td>
			   <td><?php echo $developer ['last_name']; ?></td>  
				<td><?php echo $developer ['email']; ?></td>			   
			   <td><?php echo $developer ['username']; ?></td>
			   <td><?php echo $developer ['adhaar']; ?></td>   
			   </tr>
			<?php } ?>
		</tbody>
    </table>		
	
</div>

<div class="container" align="center" >	
	<h2 >bid Data</h2>
	<div class="well-sm col-sm-12">
		<div class="btn-group pull-right">	
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">					
				<button type="submit" id="dataExport2" name="dataExport" value="Export to excel" class="btn btn-info">Export To Excel</button>
			</form>
		</div>
	</div>				  
	<table id="" class="table table-striped table-bordered" border="1%" align="center">
		<tr>
			<th>bid_id</th>
			<th>user_id</th>
			<th>product_id</th>
			<th>bid_amount</th>			
			<th>status</th>
			<th>date_created</th>
		</tr>
		<tbody>
			<?php foreach($developersData2 as $developer2) { ?>
			   <tr>
			   <td><?php echo $developer2 ['id']; ?></td>
			   <td><?php echo $developer2['user_id']; ?></td>
			   <td><?php echo $developer2 ['product_id']; ?></td>  
				<td><?php echo $developer2 ['bid_amount']; ?></td>			   
			   <td><?php echo $developer2 ['status']; ?></td>
			   <td><?php echo $developer2['date_created']; ?></td>   
			   </tr>
			<?php } ?>
		</tbody>
    </table>		
	
</div>







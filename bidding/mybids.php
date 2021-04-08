<?php include('admin/db_connect.php');?>
<?php session_start();?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>

			<!-- FORM Panel -->

			<!-- Table Panel -->
			
			
					<center>	<h2><b>Your Bids</b></h2></center>
					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover">
							<thead>
								<tr>
									<th class="p-3 mb-2 bg-primary text-white" scope="col">#</th>
									<th class="p-3 mb-2 bg-primary text-white" scope="col">Product</th>
									<th class="p-3 mb-2 bg-primary text-white" scope="col">Ordered UserName</th>
									<th class="p-3 mb-2 bg-primary text-white" scope="col">Amount</th>
									<th class="p-3 mb-2 bg-primary text-white" scope="col ">Status</th>
									<th class="p-3 mb-2 bg-primary text-white" scope="col">Delivery Address</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$cat = array();
								$cat[] = '';
                                $user_id = $_SESSION['login_id'];
								$qry = $conn->query("SELECT * FROM categories ");
								while($row = $qry->fetch_assoc()){
									$cat[$row['id']] = $row['name'];
								}
								$books = $conn->query("SELECT b.*, u.address, u.name as uname, p.name,p.bid_end_datetime bdt FROM bids b inner join users u on u.id = '$user_id' inner join products p on p.id = b.product_id ");
								while($row=$books->fetch_assoc()):
									$get = $conn->query("SELECT * FROM bids where product_id = {$row['product_id']} order by bid_amount desc limit 1 ");
									$uid = $get->num_rows > 0 ? $get->fetch_array()['user_id'] : 0 ;
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										 <p> <b><?php echo ucwords($row['name']) ?></b></p>
									</td>
									<td class="">
										 <p> <b><?php echo ucwords($row['uname']) ?></b></p>
									</td>
									<td class="text-right">
										 <p> <b><?php echo number_format($row['bid_amount'],2) ?></b></p>
									</td>
									
									<td class="p-3 mb-2 bg-info text-white">
										<?php if($row['status'] == 1): ?>
										<?php if(strtotime(date('Y-m-d H:i')) < strtotime($row['bdt'])): ?>
										<span class="badge badge-secondary">Bidding Stage</span>
										<?php else: ?>
										<?php if($uid == $row['user_id']): ?>
										<span class="badge badge-success">Wins in Bidding</span>
										<?php else: ?>
										<span class="badge badge-secondary">Loose in Bidding</span>
										<?php endif; ?>
										<?php endif; ?>
										<?php elseif($row['status'] == 2): ?>
										<span class="badge badge-primary">Confirmed</span>
										<?php else: ?>
										<span class="badge badge-danger">Canceled</span>
										<?php endif; ?>
									</td>
									<td class="text-right">
										 <p> <b><?php echo ucwords($row['address']) ?></b></p>
									</td>	
									
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
				
</body>
</html>

<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height: :150px;
	}
</style>
<script>
	$(document).ready(function(){
		$('table').dataTable()
	})
	
	$('.view_user').click(function(){
		uni_modal("<i class'fa fa-card-id'></i> Buyer Details","view_udet.php?id="+$(this).attr('data-id'))
		
	})
	$('#new_book').click(function(){
		uni_modal("New Book","manage_booking.php","mid-large")
		
	})
	$('.edit_book').click(function(){
		uni_modal("Manage Book Details","manage_booking.php?id="+$(this).attr('data-id'),"mid-large")
		
	})
	$('.delete_book').click(function(){
		_conf("Are you sure to delete this book?","delete_book",[$(this).attr('data-id')])
	})
	
	function delete_book($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_book',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>